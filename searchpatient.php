<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
 
// DB config in a separate file because it contains passwords and will not be in the git repo
require_once 'db_config.php';

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_database, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

// Get and sanitize the requested search string
$searchpatientfield = $conn->real_escape_string($_GET["searchpatientfield"]);

$patientresult = $conn->query("select * from ecc_characters where character_name like '%${searchpatientfield}%'");

if ($patientresult) {
	/* Start with an assoc array (hashmap) */
	$patientdata = $patientresult->fetch_assoc();
	$characterid = $patientdata["characterID"];
	
	/* Get the rest of the data from the medicorum tables.
	 * This will not get closed data and it should get data in order so the latest data 'wins' */
	$patientresult = $conn->query("
		select fieldname,fieldvalue from med_fieldtypes
		join med_fieldvalues on (med_fieldtypes.fieldtypeID=med_fieldvalues.fieldtypeID)
		where characterID=${characterid}
		and close_timestamp is NULL
		UNION
		select concat(fieldname,'/',fieldvalue,'/',subfieldname) as fieldname,subfieldvalue as fieldvalue
		from med_fieldtypes join med_fieldvalues on (med_fieldtypes.fieldtypeID=med_fieldvalues.fieldtypeID)
		join med_subfieldvalues on (med_subfieldvalues.fieldvalueID = med_fieldvalues.fieldvalueID)
		join med_subfieldtypes on (med_subfieldtypes.subfieldtypeID = med_subfieldvalues.subfieldtypeID)
		where characterID=${characterid}
		and med_fieldvalues.close_timestamp IS NULL");
	if ($conn->error) { die($conn->error); }
	while ($fieldvalue=$patientresult->fetch_object()){
		/* Add (or overwrite) each field value */
		$patientdata[$fieldvalue->fieldname]=$fieldvalue->fieldvalue;
	}

	/* Get historical data */
	$patientresult = $conn->query("
		select fieldname,fieldvalue,subfieldname,subfieldvalue
		from med_fieldvalues
		join med_fieldtypes on (med_fieldtypes.fieldtypeID = med_fieldvalues.fieldtypeID)
		join med_subfieldvalues on (med_subfieldvalues.fieldvalueID = med_fieldvalues.fieldvalueID)
		join med_subfieldtypes on (med_subfieldtypes.subfieldtypeID = med_subfieldvalues.subfieldtypeID)
		where characterID=${characterid}
		and close_timestamp is not NULL
		order by fieldname,fieldvalue");
	if ($conn->error) { die($conn->error); }
	$patientdata['subsets'] = [];
	$lastfieldname = Null;
	$lastfieldvalue = Null;
	while ($fieldvalue=$patientresult->fetch_object()) {
		if ($fieldvalue->fieldname != $lastfieldname) {
			if ($lastfieldname) {
				$subsetlist[$lastfieldvalue] = $patientsubset;
				$patientdata['subsets'][$lastfieldname] = $subsetlist;
			}
			$lastfieldname = $fieldvalue->fieldname;
			$lastfieldvalue = Null;
			$subsetlist = [];
		}
		if ($fieldvalue->fieldvalue != $lastfieldvalue) {
			if ($lastfieldvalue) {
				$subsetlist[$lastfieldvalue] = $patientsubset;
			}
			$patientsubset = [];
			$lastfieldvalue = $fieldvalue->fieldvalue;
		}
		$patientsubset[$fieldvalue->subfieldname] = $fieldvalue->subfieldvalue;
	}
	if ($lastfieldname) {
		$subsetlist[$lastfieldvalue] = $patientsubset;
		$patientdata['subsets'][$lastfieldname] = $subsetlist;
	}

	/* Special: Send the URL for the image, which is based on character ID */
	$patientdata['character_image'] = "https://www.eosfrontier.space/eos_douane/images/mugs/$characterid.jpg";
	
	header('Content-Type: application/json');
	echo json_encode($patientdata);
} else {
	die("Patient not found");
}

$conn->close();

?> 
