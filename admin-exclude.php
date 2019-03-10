<!DOCTYPE html>
<html>
<head>
	<title>Medicorum - work in progress</title>
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
	<link rel="stylesheet" href="css/style_base.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
	<style>
#character-exclude-list {
	margin: 20px 20px 50px 20px;
}
#character-exclude-list tr.excluded {
	background-color: #320;
}
#character-exclude-list td.button-exclude div {
	color: #fff;
	border: 2px solid #2ba;
	background-color: #054;
	border-radius: 10px;
	cursor: pointer;
	margin: 2px;
	padding: 1px 5px;
}
#character-exclude-list td.button-exclude:hover div {
	background-color: transparent;
	box-shadow: 0px 0px 1px #000;
	box-shadow: 0px 0px 7px #6ed;
}
	</style>
	<script>
$(load)
var perfectscrollbar
function load() {
	perfectscrollbar = new PerfectScrollbar('#main-content', { })
	$('#character-exclude-list td.button-exclude').click(excludechar)
}
function excludechar() {
	var par = $(this).closest('tr')
	var characterID = par.find('.field-characterID').text()
	if (characterID) {
		var savefields = {characterID: characterID}
		if (par.hasClass('excluded')) {
			var reason = par.find('.field-exclude').text()
			if (confirm('Karakter weer in Medicorum tonen? (was: '+reason+')')) {
				savefields['-exclude'] = reason
				$.post("savepatient.php",savefields,saveready)
			}
		} else {
			var reason = prompt('Karakter uit Medicorum verwijderen, reden:','Bestaat niet')
			if (reason) {
				savefields['exclude'] = reason
				$.post("savepatient.php",savefields,saveready)
			}
		}
	}
}
function saveready(data) {
	var characterID = data.characterID
	var exclude = data.exclude
	if (characterID) {
		var tr = $("#character-row-"+characterID)
		if (exclude) {
			tr.addClass('excluded')
			tr.find('td.button-exclude div').text('Tonen')
		} else {
			tr.removeClass('excluded')
			tr.find('td.button-exclude div').text('Verbergen')
		}
		tr.find('td.field-exclude').text(exclude)
	}
}
	</script>
</head>
<body>
<div 
<?php include 'page_header.php';?>

<div id="top-menu">
<?php
function selectedif($wanteduri) {
  if (basename($_SERVER['PHP_SELF'], '.php') == $wanteduri) {
    return 'selected';
  }
}
?>
<a href="admin-exclude.php" class="top-menu-item top-menu-item top-menu-item-right <?=selectedif("admin-exclude")?>">Characters Verbergen</a>
</div>

<div id="main-body">
	<div id="main-content">
		<table id="character-exclude-list">
			<caption>Karakters in Medicorum tonen of niet</caption>
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
$result = $conn->query("
	select ecc_characters.*, med_fieldvalues.fieldvalue as exclude
	from ecc_characters
	left join med_fieldvalues on (med_fieldvalues.characterID = ecc_characters.characterID and
		med_fieldvalues.fieldtypeID in (select fieldtypeID from med_fieldtypes where fieldname='exclude') and
		med_fieldvalues.close_timestamp IS NULL)
	");

if (!$result) {
	die("SQL failure ".$conn->error);
}

echo '<tr><th>chrID</th><th>acct</th><th>character_name</th><th>ICC_number</th><th colspan="2"></th></tr>';
while ($row = $result->fetch_assoc()) {
	$exclude = array_key_exists('exclude', $row) ? $row["exclude"] : "";
	$exclass = $exclude ? ' excluded' : '';
	echo '<tr class="row-character'.$exclass.'" id="character-row-'.$row["characterID"].'">';
	echo '<td class="field-characterID">'.$row["characterID"].'</td>';
	echo '<td class="field-accountID">'.$row["accountID"].'</td>';
	echo '<td class="field-character_name">'.$row["character_name"].'</td>';
	echo '<td class="field-ICC_number">'.$row["ICC_number"].'</td>';
	echo '<td class="field-exclude">'.$exclude.'</td>';
	echo '<td class="button-exclude"><div>'.($exclude?'Tonen':'Verbergen').'</div></td>';
	echo '</tr>';
}
$conn->close();
?>
		</table>
	</div>
</div>
<?php include 'page_footer.php';?>

</body>
</html>
