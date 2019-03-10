
<!DOCTYPE html>
<html>
<head>
	<title>Medicorum - work in progress</title>
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="css/style_base.css">
</head>
<body>

	<?php include 'page_header.php';?>


<div id="top-menu"><?php include 'page_top-menu.php';?></div>

<div id="main-body">
	<div id="main-content">
	
	  <ul class="tabs">
  <!-- Hier begint de eerste kaart -->
    <li class="tab">
        <input type="radio" name="tabs" checked="checked" id="tab1" />
        <!-- <label for="tab1">Medicorum</label> -->
	<div id="tab-content1" class="content">
	
		<div class="login-div">
			<h1 class="aquilafont">Login</h3>
			<p>Gebruik uw gebruikersnaam en wachtwoord.</p>
			
			<p class="aquilafont">Gebruikersnaam</p>
			<input type="text" name="username"><br>
			<p class="aquilafont">Wachtwoord</p>
			<input type="text" name="password"><br><br>
			<button type="button" class="aquilafont login-button">inloggen</button><br>
			<p><a href="forgot_password.php">Wachtwoord vergeten?</a></p>
			
		</div>
	
	
	<center><img src="images/aquila-logo.png" height="180px"></center>
		
	</div>
    </li>


	</div>
	
</div>
 
<?php include 'page_footer.php';?>

</body>
</html>