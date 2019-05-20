<?php
include("../res/x5engine.php");
$nameList = array("acn","5mz","6mj","g3x","tn6","wnt","8d4","2m4","aul","6a5");
$charList = array("2","Y","Z","E","P","H","E","R","K","V");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
