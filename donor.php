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
	<script src="chart.js"></script>
</head>
<body>

	<?php include 'page_header.php';?>

<div id="top-menu"><?php include 'page_top-menu.php';?></div>

<div id="main-body">
	<div id="main-content">
	<div id="searchpatientframe">
		<div id="field_patientalert" class="datafield patient-alert-blink"></div>
		
			<div id="top-patientinformation">
				<table>
				<tr>
					<td width="120px">&nbsp;&nbsp;Naam patient</td>
					<td width="350px" id="field_character_name" class="datafield"></td>
					<td width="100px">Bloedgroep</td>
					<td id="field_bloodtype" class="datafield editable"></td>
				</tr><tr>
					<td>&nbsp;&nbsp;ICC nummer</td>
					<td id="field_ICC_number" class="datafield"></td>
					<td colspan="2" text-align="right"><div id="searchpatient">Vind je patient (op naam): <input type="text" id="searchpatientfield" class="input02" /><button id="searchpatientbutton" class="button02">zoek</button> </div></td>
				</tr>
				</table>
			</div>
		</div>

  <ul class="tabs">
    
		<li class="tab">
        <input type="radio" name="tabs" checked="checked" id="tab1" />
        <label for="tab1">Bloed</label>
        <div id="tab-content1" class="content">
			<table>
				<tr>
					<td>Naam</td><td id="field_character_name" class="datafield"></td>
				</tr><tr>
					<td>Bloedgroep</td><td id="field_bloodtype" class="datafield"></td>
				</tr>
		  </table>
		
			<p>Bovenaan staat het zoekveld om je patient te vinden.</p>
			<ul>
				<li>naam</li>
				<li>bloedgroep</li>
				<li>bijzonderheden</li>
				<li>laatste donatie (waarschuwing als het te kort geleden is)</li>
				<li>aantal keer gedoneerd, achievement bij x-aantal?</li>
				<li>bloed afgenomen door: (arts/verpleger)</li>
				<li>anders nog iets?</li>
			</ul>
			
			<p>Misschien ook een mogelijkheid om te zoeken op bloedgroep, zodat er snel personen opgeroepen kunnen worden als er ergens tekort van is.</p>

			</div>
		</li>

		<li class="tab">
        <input type="radio" name="tabs" id="tab2" />
        <label for="tab2">Orgaan donoren</label>
        <div id="tab-content2" class="content">
				<p>iets voor personen die als orgaan-donor geregistreerd staan</p>
			</div>
		</li>

		<li class="tab">
        <input type="radio" name="tabs" id="tab3" />
        <label for="tab3">Wachtlijst</label>
        <div id="tab-content3" class="content">
				<p>ruimte voor wachtlijst (personen die een orgaan nodig hebben)</p>
			</div>
		</li>
		
	</ul>
</div></div>

<?php include 'page_footer.php';?>

</body>
</html>