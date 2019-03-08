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
					<td colspan="2" text-align="right"><div id="searchpatient">Vind je patient: <input type="text" id="searchpatientfield" class="input02" /><button id="searchpatientbutton" class="button02">zoek</button> </div></td>
				</tr>
				</table>
			</div>
			<div class="character_image">
				<img id="field_character_image"/>
			</div>
	</div>


  <ul class="tabs">
  <!-- Hier begint de eerste kaart -->
    <li class="tab">
        <input type="radio" name="tabs" checked="checked" id="tab1" />
        <label for="tab1">Algemene gegevens</label>
	<div id="tab-content1" class="content">
		<?php include 'chart_overview.php';?>
	</div>
    </li>

    <li class="tab">
      <input type="radio" name="tabs" id="tab2" />
      <label for="tab2">Medische gegevens</label>   
	<div id="tab-content2" class="content">
	      <?php include 'chart_medical.php';?>
	</div>
    </li>
						<!-- Hier stopt de tweede kaart -->
						<!-- Bionics gaan we later toevoegen 
						<li class="tab">
						  <input type="radio" name="tabs" id="tab3" />
						  <label for="tab3">Bionics</label>   
						<div id="tab-content3" class="content">
							  <?php include 'chart_bionics.php';?>
						</div>
						</li>	 -->
	
     <li class="tab">
      <input type="radio" name="tabs" id="tab3" />
      <label for="tab3">Behandelingskaart</label>   
	<div id="tab-content3" class="content">
	      <?php include 'chart_treatment.php';?>
	</div>
    </li>

	 <li class="tab">
      <input type="radio" name="tabs" id="tab4" />
      <label for="tab4">Behandelhistorie</label>   
	<div id="tab-content4" class="content">
	      <?php include 'chart_history.php';?>
	</div>
    </li>

    <li class="tab">
      <input type="radio" name="tabs" id="tab5" />
      <label for="tab5">Mortuarium</label>   
	<div id="tab-content5" class="content">
	      <?php include 'chart_morgue.php';?>
	</div>
    </li>
    
  </ul>
	</div>
		<div id="buttom-frame">
			<button id="edit-button" class="button01">wijzigen</button>
			<button id="cancel-button" class="button01">annuleren</button>
			<button id="save-button" class="button01">opslaan</button>
		</div>
 
</div>

<?php include 'page_footer.php';?>

</body>
</html>
