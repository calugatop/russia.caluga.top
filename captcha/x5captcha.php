<?php
include("../res/x5engine.php");
$nameList = array("chz","7h7","j8l","2v4","2vk","nmv","xfr","428","eup","awe");
$charList = array("T","H","3","D","G","6","7","L","W","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
