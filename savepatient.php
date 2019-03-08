<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
 
// DB config in separate file so it's not in git repository
require_once 'db_config.php';

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_database, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

// Data is saved by character ID
$characterID = $conn->real_escape_string($_POST["characterID"]);

// Only want get these IDs once
$subfieldIDs = [];
$fieldtypeIDs = [];

// For returning te updated values
$patientdata = [];
foreach($_POST as $key=>$value) {
	$fieldname = explode('/',$conn->real_escape_string($key));
	$fieldvalue = $conn->real_escape_string($value);
	if (count($fieldname) > 1) {
		/* This is a subfield, get the number and name */
		$subfieldnum = $fieldname[1];
		$subfieldname = $fieldname[2];
		$fieldname = $fieldname[0];
		if (!$subfieldnum) {
			/* This is a new set */
			if (!array_key_exists("$fieldname/", $subfieldIDs)) {
				/* First entry of the new set: create a new entry in the main field table */
				$fieldtypeID = $conn->query("select fieldtypeID from med_fieldtypes where fieldname = '$fieldname'")->fetch_object();
				if ($fieldtypeID) {
					$fieldtypeID = $fieldtypeID->fieldtypeID;
					/* Previous value plus one (field is not integer so max might fail) */
					$lastval = $conn->query("select fieldvalue from med_fieldvalues where fieldtypeID = $fieldtypeID and characterID = $characterID order by fieldvalueID desc limit 1")->fetch_object();
					if ($lastval) {
						$lastval = $lastval->fieldvalue;
					} else {
						$lastval = 0;
					}
					$lastval++;
					$conn->query("insert into med_fieldvalues (fieldtypeID, characterID, fieldvalue, mod_characterID)
						      values ($fieldtypeID, $characterID, '$lastval',0)");
					$newid = $conn->insert_id;
					$subfieldIDs["$fieldname/"] = $newid;
					$fieldtypeIDs["$fieldname/"] = $fieldtypeID;
					$patientdata[$fieldname] = $lastval;
				} else {
					$subfieldIDs["$fieldname/"] = 0;
				}
			}
		}
		/* Check which ID corresponds to the value */
		if (!array_key_exists("$fieldname/$subfieldnum", $subfieldIDs)) {
			$subfield = $conn->query("select max(fieldvalueID) as subfieldID, max(med_fieldtypes.fieldtypeID) as fieldtypeID
						    from med_fieldvalues join med_fieldtypes on (med_fieldvalues.fieldtypeID = med_fieldtypes.fieldtypeID)
						    where characterID=$characterID
						    and fieldvalue='$subfieldnum' and fieldname='$fieldname'")->fetch_object();
			if ($subfield) {
				$subfieldIDs["$fieldname/$subfieldnum"] = $subfield->subfieldID;
				$fieldtypeIDs["$fieldname/$subfieldnum"] = $subfield->fieldtypeID;
			}
		}
		$subfieldID = $subfieldIDs["$fieldname/$subfieldnum"];
		$fieldtypeID = $fieldtypeIDs["$fieldname/$subfieldnum"];
		if ($subfieldID) {
			/* Find the subfieldtypeID by its name (and the fieldtypeID) */
			$subfieldtypeID = $conn->query("select subfieldtypeID from med_subfieldtypes
							where subfieldname = '$subfieldname' and fieldtypeID=$fieldtypeID")->fetch_object();
			if ($subfieldtypeID) {
				$subfieldtypeID = $subfieldtypeID->subfieldtypeID;
				$conn->query("insert into med_subfieldvalues (subfieldtypeID, fieldvalueID, subfieldvalue, mod_characterID)
					      values ($subfieldtypeID, $subfieldID, '$fieldvalue', 0)");
				$patientdata["$fieldname/$subfieldnum/$subfieldname"] = $value;
			}
		}
	} else {
		/* A normal field.  Simply insert */
		$fieldname = $fieldname[0];
		$dodelete = False;
		if ($fieldname[0] == '-') {
			/* This is a special notifier that this field should be closed (i.e. close date filled)
			 * TODO: Is this the best way to remove/close fields? */
			$fieldname = substr($fieldname,1);
			$fieldtypeID = $conn->query("select fieldtypeID from med_fieldtypes where fieldname = '$fieldname'")->fetch_object();
			if ($fieldtypeID){
				$fieldtypeID = $fieldtypeID->fieldtypeID;
				$conn->query("update med_fieldvalues set close_timestamp=now()
					      where fieldtypeID=$fieldtypeID and characterID=$characterID
					      and close_timestamp is NULL and fieldvalue='$fieldvalue'");
				$patientdata[$fieldname] = '';
		        }
		} else {
			/* Normal insert of a value */
			$fieldtypeID = $conn->query("select fieldtypeID from med_fieldtypes where fieldname = '$fieldname'")->fetch_object();
			if ($fieldtypeID){
				$fieldtypeID = $fieldtypeID->fieldtypeID;
				$conn->query("insert into med_fieldvalues (fieldtypeID, characterID, fieldvalue, mod_characterID)
					      values ($fieldtypeID, $characterID, '$fieldvalue', 0)");
				$patientdata[$fieldname] = $value;
			}
		}
	}
}
header('Content-Type: application/json');
echo json_encode($patientdata);
$conn->close();
?>
