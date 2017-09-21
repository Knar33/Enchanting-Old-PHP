<?php
session_start();
include 'mysqlconnection.php';

//set redirect url to the current url
$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title>Enchant Optimizer</title>
<meta name="robots" content="index,follow" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
  
<link href='fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css' />


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script src="ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" /></script>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

</head>

<body>

<?php

$reagant = $_GET['r'];

echo 'Enchants for ' . $reagant . '<br><br>
<table border="1">
<tr>
<td>Type</td><td>enchant</td><td>reagant 1</td><td>reagant 2</td><td>reagant 3</td><td>reagant 4</td>
';
$results2 = "SELECT id, type, enchant, reagant1, reagant2, reagant3, reagant4 FROM enchants WHERE reagant1=? OR reagant2=? OR reagant3=? OR reagant4=?";
$statement2 = $mysqli->prepare($results2);
$statement2->bind_param('ssss', $reagant, $reagant, $reagant, $reagant);
$statement2->execute();
$statement2->bind_result($enchid, $enchtype, $enchant, $reg1, $reg2, $reg3, $reg4);
mysqli_stmt_store_result($statement2);
while($statement2->fetch()) {
	echo '<tr><td>' . $enchtype . '</td><td>' . $enchant . '</td><td>' . $reg1 . '</td><td>' . $reg2 . '</td><td>' . $reg3 . '</td><td>' . $reg4 . '</td></tr>';
}
echo '</table>';
echo '<br><a href="index.php">Go Back!</a>';
?>
		

</body>
</html>