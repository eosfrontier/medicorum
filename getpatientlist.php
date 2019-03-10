<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
 
// Separate file which is not in git repo because it contains password
require_once 'db_config.php';

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_database, $db_port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

/* Get all the character names, including ICC number */
$patientresult = $conn->query("
	select character_name as value, concat(character_name,' (',ICC_number,')') as label
	from ecc_characters
	where not exists(select fieldvalue from med_fieldvalues
		join med_fieldtypes on (med_fieldtypes.fieldtypeID = med_fieldvalues.fieldtypeID)
		where fieldname='exclude'
		and med_fieldvalues.characterID = ecc_characters.characterID
		and close_timestamp is NULL)
");

if ($patientresult) {
	/* Build json by hand because it didn't work in one go for some reason */
	header('Content-Type: application/json');
	$comma = '[';
	while ($row = $patientresult->fetch_assoc()) {
		echo $comma.json_encode($row);
		$comma = ",\n";
	}
	echo ']';
} else {
	die("SQL failure".$conn->error);
}

$conn->close();

?> 
