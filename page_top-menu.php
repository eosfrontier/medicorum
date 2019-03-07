<?php
function selectedif($wanteduri) {
  if (basename($_SERVER['PHP_SELF'], '.php') == $wanteduri) {
    return 'selected';
  }
}
?>
<!-- <a href="#" class="top-menu-item top-menu-item-right <?=selectedif("beheer")?>">Beheer</a>
<a href="#" class="top-menu-item <?=selectedif("account")?>">Mijn account</a>
<a href="report.php" class="top-menu-item <?=selectedif("report")?>">Rapportages</a> -->
<a href="donor.php" class="top-menu-item top-menu-item-right class="top-menu-item <?=selectedif("donor")?>">Donor registratie</a>
<a href="chart.php" class="top-menu-item <?=selectedif("chart")?>">Patientenkaart</a>
<a href="index.php" class="top-menu-item top-menu-item-left <?=selectedif("index")?>">Home</a>
