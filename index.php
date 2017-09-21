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

if(isset($_POST['submit'])) {
	
	//get user submitted values
	$Blood = 			floor($_POST['1Blood'] / 5) + 
						floor($_POST['2Blood'] / 5) + 
						floor($_POST['3Blood'] / 5) + 
						floor($_POST['4Blood'] / 5) + 
						floor($_POST['5Blood'] / 5);
						
	$Bile = 			floor($_POST['1Bile'] / 5) + 
						floor($_POST['2Bile'] / 5) + 
						floor($_POST['3Bile'] / 5) + 
						floor($_POST['4Bile'] / 5) + 
						floor($_POST['5Bile'] / 5);
						
	$Bone = 			floor($_POST['1Bone'] / 5) + 
						floor($_POST['2Bone'] / 5) + 
						floor($_POST['3Bone'] / 5) + 
						floor($_POST['4Bone'] / 5) + 
						floor($_POST['5Bone'] / 5);
						
	$Cinder = 			floor($_POST['1Cinder'] / 5) + 
						floor($_POST['2Cinder'] / 5) + 
						floor($_POST['3Cinder'] / 5) + 
						floor($_POST['4Cinder'] / 5) + 
						floor($_POST['5Cinder'] / 5);
						
	$Claw = 			floor($_POST['1Claw'] / 5) + 
						floor($_POST['2Claw'] / 5) + 
						floor($_POST['3Claw'] / 5) + 
						floor($_POST['4Claw'] / 5) + 
						floor($_POST['5Claw'] / 5);
						
	$Corpseflesh = 		floor($_POST['1Corpseflesh'] / 5) + 
						floor($_POST['2Corpseflesh'] / 5) + 
						floor($_POST['3Corpseflesh'] / 5) + 
						floor($_POST['4Corpseflesh'] / 5) + 
						floor($_POST['5Corpseflesh'] / 5);
						
	$Darktaint = 		floor($_POST['1Darktaint'] / 5) + 
						floor($_POST['2Darktaint'] / 5) + 
						floor($_POST['3Darktaint'] / 5) + 
						floor($_POST['4Darktaint'] / 5) + 
						floor($_POST['5Darktaint'] / 5);
						
	$Eye = 				floor($_POST['1Eye'] / 5) + 
						floor($_POST['2Eye'] / 5) + 
						floor($_POST['3Eye'] / 5) + 
						floor($_POST['4Eye'] / 5) + 
						floor($_POST['5Eye'] / 5);
						
	$Greenleaf = 		floor($_POST['1Greenleaf'] / 5) + 
						floor($_POST['2Greenleaf'] / 5) + 
						floor($_POST['3Greenleaf'] / 5) + 
						floor($_POST['4Greenleaf'] / 5) + 
						floor($_POST['5Greenleaf'] / 5);
						
	$Heart = 			floor($_POST['1Heart'] / 5) + 
						floor($_POST['2Heart'] / 5) + 
						floor($_POST['3Heart'] / 5) + 
						floor($_POST['4Heart'] / 5) + 
						floor($_POST['5Heart'] / 5);
						
	$Hoarfrost = 		floor($_POST['1Hoarfrost'] / 5) + 
						floor($_POST['2Hoarfrost'] / 5) + 
						floor($_POST['3Hoarfrost'] / 5) + 
						floor($_POST['4Hoarfrost'] / 5) + 
						floor($_POST['5Hoarfrost'] / 5);
						
	$Horn = 			floor($_POST['1Horn'] / 5) + 
						floor($_POST['2Horn'] / 5) + 
						floor($_POST['3Horn'] / 5) + 
						floor($_POST['4Horn'] / 5) + 
						floor($_POST['5Horn'] / 5);
						
	$Lifeforce = 		floor($_POST['1Lifeforce'] / 5) + 
						floor($_POST['2Lifeforce'] / 5) + 
						floor($_POST['3Lifeforce'] / 5) + 
						floor($_POST['4Lifeforce'] / 5) + 
						floor($_POST['5Lifeforce'] / 5);
						
	$Quartz = 			floor($_POST['1Quartz'] / 5) + 
						floor($_POST['2Quartz'] / 5) + 
						floor($_POST['3Quartz'] / 5) + 
						floor($_POST['4Quartz'] / 5) + 
						floor($_POST['5Quartz'] / 5);
						
	$Quintessence = 	floor($_POST['1Quintessence'] / 5) + 
						floor($_POST['2Quintessence'] / 5) + 
						floor($_POST['3Quintessence'] / 5) + 
						floor($_POST['4Quintessence'] / 5) + 
						floor($_POST['5Quintessence'] / 5);
						
	$Shadowcrest = 		floor($_POST['1Shadowcrest'] / 5) + 
						floor($_POST['2Shadowcrest'] / 5) + 
						floor($_POST['3Shadowcrest'] / 5) + 
						floor($_POST['4Shadowcrest'] / 5) + 
						floor($_POST['5Shadowcrest'] / 5);
						
	$Sparkstone = 		floor($_POST['1Sparkstone'] / 5) + 
						floor($_POST['2Sparkstone'] / 5) + 
						floor($_POST['3Sparkstone'] / 5) + 
						floor($_POST['4Sparkstone'] / 5) + 
						floor($_POST['5Sparkstone'] / 5);
						
	$Stormrune = 		floor($_POST['1Stormrune'] / 5) + 
						floor($_POST['2Stormrune'] / 5) + 
						floor($_POST['3Stormrune'] / 5) + 
						floor($_POST['4Stormrune'] / 5) + 
						floor($_POST['5Stormrune'] / 5);
						
	$Tooth = 			floor($_POST['1Tooth'] / 5) + 
						floor($_POST['2Tooth'] / 5) + 
						floor($_POST['3Tooth'] / 5) + 
						floor($_POST['4Tooth'] / 5) + 
						floor($_POST['5Tooth'] / 5);
						
	$Venom_sac = 		floor($_POST['1Venom_sac'] / 5) + 
						floor($_POST['2Venom_sac'] / 5) + 
						floor($_POST['3Venom_sac'] / 5) + 
						floor($_POST['4Venom_sac'] / 5) + 
						floor($_POST['5Venom_sac'] / 5);
						
	$Nith = $_POST['Nith'];
	$Ichor = $_POST['Ichor'];
	$Numen = $_POST['Numen'];

	
	//table of user submitted values
	echo 'Input Reagants (sets of 5)
	<table border="1">
	<tr><td><b>Reagant</b></td><td><b>Quantity</b></td></tr>
	<tr><td><a href="reagant.php?r=Blood">Blood</a></td><td>' . $Blood . '</td></tr>
	<tr><td><a href="reagant.php?r=Bile">Bile</a></td><td>' . $Bile . '</td></tr>
	<tr><td><a href="reagant.php?r=Bone">Bone</a></td><td>' . $Bone . '</td></tr>
	<tr><td><a href="reagant.php?r=Cinder">Cinder</a></td><td>' . $Cinder . '</td></tr>
	<tr><td><a href="reagant.php?r=Claw">Claw</a></td><td>' . $Claw . '</td></tr>
	<tr><td><a href="reagant.php?r=Corpseflesh">Corpseflesh</a></td><td>' . $Corpseflesh . '</td></tr>
	<tr><td><a href="reagant.php?r=Darktaint">Darktaint</a></td><td>' . $Darktaint . '</td></tr>
	<tr><td><a href="reagant.php?r=Eye">Eye</a></td><td>' . $Eye . '</td></tr>
	<tr><td><a href="reagant.php?r=Greenleaf">Greenleaf</a></td><td>' . $Greenleaf . '</td></tr>
	<tr><td><a href="reagant.php?r=Heart">Heart</a></td><td>' . $Heart . '</td></tr>
	<tr><td><a href="reagant.php?r=Hoarfrost">Hoarfrost</a></td><td>' . $Hoarfrost . '</td></tr>
	<tr><td><a href="reagant.php?r=Horn">Horn</a></td><td>' . $Horn . '</td></tr>
	<tr><td><a href="reagant.php?r=Lifeforce">Lifeforce</a></td><td>' . $Lifeforce . '</td></tr>
	<tr><td><a href="reagant.php?r=Quartz">Quartz</a></td><td>' . $Quartz . '</td></tr>
	<tr><td><a href="reagant.php?r=Quintessence">Quintessence</a></td><td>' . $Quintessence . '</td></tr>
	<tr><td><a href="reagant.php?r=Shadowcrest">Shadowcrest</a></td><td>' . $Shadowcrest . '</td></tr>
	<tr><td><a href="reagant.php?r=Sparkstone">Sparkstone</a></td><td>' . $Sparkstone . '</td></tr>
	<tr><td><a href="reagant.php?r=Stormrune">Stormrune</a></td><td>' . $Stormrune . '</td></tr>
	<tr><td><a href="reagant.php?r=Tooth">Tooth</a></td><td>' . $Tooth . '</td></tr>
	<tr><td><a href="reagant.php?r=Venom_sac">Venom_sac</a></td><td>' . $Venom_sac . '</td></tr>
	<tr><td><a href="reagant.php?r=Nith">Nith</a></td><td>' . $Nith . '</td></tr>
	<tr><td><a href="reagant.php?r=Ichor">Ichor</a></td><td>' . $Ichor . '</td></tr>
	<tr><td><a href="reagant.php?r=Numen">Numen</a></td><td>' . $Numen . '</td></tr>
	</table><br>Results:<br>';
	
	//variable to kill loop
	$x = 1;
	$totalenchants = 0;
	$craftarray = array();
	
	while ($x == 1) {
		$checksuccess = 0;
		
		//unset arrays
		unset($reagants);
		unset($conflictarray);
		unset($limitingregs);
		unset($maxreagants);
		
		//array to track the limiting reagants
		$limitingregs = array();
		
		//Create new reagants array that keeps track of how many of each reagant you have
		$reagants = array("Nith"=>$Nith, "Ichor"=>$Ichor, "Numen"=>$Numen, "Blood"=>$Blood, "Bile"=>$Bile, "Bone"=>$Bone, "Cinder"=>$Cinder, "Claw"=>$Claw, "Corpseflesh"=>$Corpseflesh, "Darktaint"=>$Darktaint, "Eye"=>$Eye, "Greenleaf"=>$Greenleaf, "Heart"=>$Heart, "Hoarfrost"=>$Hoarfrost, "Horn"=>$Horn, "Lifeforce"=>$Lifeforce, "Quartz"=>$Quartz, "Quintessence"=>$Quintessence, "Shadowcrest"=>$Shadowcrest, "Sparkstone"=>$Sparkstone, "Stormrune"=>$Stormrune, "Tooth"=>$Tooth, "Venom_sac"=>$Venom_sac);		
		
		//Find how many of each enchant we can make (based on limiting reagant)
		$results2 = "SELECT id, type, enchant, reagant1, reagant2, reagant3, reagant4 FROM enchants";
		$statement2 = $mysqli->prepare($results2);
		$statement2->execute();
		$statement2->bind_result($enchid, $enchtype, $enchant, $reg1, $reg2, $reg3, $reg4);
		mysqli_stmt_store_result($statement2);			
		//cycle through all recipes
		while($statement2->fetch()) {	
			//check to see if we have at least 1 of each reagant for the recipe
			if ($reagants[$reg1] > 0 && $reagants[$reg2] > 0 && $reagants[$reg3] > 0 && $reagants[$reg4] > 0) {		
				$temparray1 = array(
					//reagant name => reagant amount
					$reg1 => $reagants[$reg1],
					$reg2 => $reagants[$reg2],
					$reg3 => $reagants[$reg3],
					$reg4 => $reagants[$reg4],
				);
				//find the reagant in the recipe we have the least amount of
				$lowestreg = array_keys($temparray1, min($temparray1));
				
				//track how many limiting reagants we have for that recipe in an array
				$limitingregs[$enchant] = $lowestreg[0];
				
				unset($temparray1);
				
				//we sucessfully added a reagant to the craft list
				$checksuccess = 1;
				
			}
		}
		//if we have at least 1 recipe we can craft
		if ($checksuccess == 1) {
			//new array to track how many conflicts we have for each recipe (check all 4 ingredients of the recipe against the limiting reagant of every other recipe)
			$conflictarray = array();
			
			//cycle through our recipe list array
			foreach($limitingregs as $key => $value) {
				$conflicts = 0;

				//get the required reagants from db for this recipe
				$results2 = "SELECT reagant1, reagant2, reagant3, reagant4 FROM enchants WHERE enchant=?";
				$statement2 = $mysqli->prepare($results2);
				$statement2->bind_param('s', $key);
				$statement2->execute();
				$statement2->bind_result($reg1, $reg2, $reg3, $reg4);
				mysqli_stmt_store_result($statement2);			
				while($statement2->fetch()) {	
					//see if any of the reagants for this recipe are also the limiting reagant of any other recipe, keep track of how many conflicts arise in conflicts variable
					foreach($limitingregs as $key2 => $value2) {
						if ($reg1 == $value2){
							$conflicts = $conflicts + 1;
						}
						if ($reg2 == $value2){
							$conflicts = $conflicts + 1;
						}
						if ($reg3 == $value2){
							$conflicts = $conflicts + 1;
						}
						if ($reg4 == $value2){
							$conflicts = $conflicts + 1;
						}
					}
				}
				$conflictarray[$key] = $conflicts;
			}
			//find the recipe that has the least amount of conflicts
			$leastconflicts = array_keys($conflictarray, min($conflictarray));
			$leastconflictsval = min($conflictarray);
			
			//get the ingredients of recipe that has least conflicts
			$results2 = "SELECT enchant, type, reagant1, reagant2, reagant3, reagant4 FROM enchants WHERE enchant=?";
			$statement2 = $mysqli->prepare($results2);
			$statement2->bind_param('s', $leastconflicts[0]);
			$statement2->execute();
			$statement2->bind_result($enchant, $enchtype, $reg1, $reg2, $reg3, $reg4);
			mysqli_stmt_store_result($statement2);
			while($statement2->fetch()) {
				//add 1 to the "recipe to craft" array
				if ($craftarray[$enchant] > 0) {
					$craftarray[$enchant] = $craftarray[$enchant] + 1;
				} else {
					$craftarray[$enchant] = 1;
				}
				//subtract the reagants from the total reagants we started with
				$$reg1 = $$reg1 - 1;
				$$reg2 = $$reg2 - 1;
				$$reg3 = $$reg3 - 1;
				$$reg4 = $$reg4 - 1;
			}
		} else {
			$x = 0;
		}
	}
	//sort array
	arsort($craftarray);
	//print "recipes to craft" array
	foreach($craftarray as $key => $value) {
		echo "$value x $key (";
		$results2 = "SELECT enchant, type, reagant1, reagant2, reagant3, reagant4 FROM enchants WHERE enchant=?";
		$statement2 = $mysqli->prepare($results2);
		$statement2->bind_param('s', $key);
		$statement2->execute();
		$statement2->bind_result($enchant, $enchtype, $reg1, $reg2, $reg3, $reg4);
		mysqli_stmt_store_result($statement2);
		while($statement2->fetch()) {
			echo $reg1 . ', ' . $reg2 . ', ' . $reg3 . ', ' . $reg4 . ')<br>';
		}
		$totalenchants = $totalenchants + $value;
	}
	echo '<br>Total Enchants: ' . $totalenchants . '<br><br>
	<a href="index.php">Go again!</a><br><br>
	';
	
	echo 'Remaining Reagants (sets of 5)
	<table border="1">
	<tr><td><b>Reagant</b></td><td><b>Quantity</b></td></tr>
	<tr><td><a href="reagant.php?r=Blood">Blood</a></td><td>' . $Blood . '</td></tr>
	<tr><td><a href="reagant.php?r=Bile">Bile</a></td><td>' . $Bile . '</td></tr>
	<tr><td><a href="reagant.php?r=Bone">Bone</a></td><td>' . $Bone . '</td></tr>
	<tr><td><a href="reagant.php?r=Cinder">Cinder</a></td><td>' . $Cinder . '</td></tr>
	<tr><td><a href="reagant.php?r=Claw">Claw</a></td><td>' . $Claw . '</td></tr>
	<tr><td><a href="reagant.php?r=Corpseflesh">Corpseflesh</a></td><td>' . $Corpseflesh . '</td></tr>
	<tr><td><a href="reagant.php?r=Darktaint">Darktaint</a></td><td>' . $Darktaint . '</td></tr>
	<tr><td><a href="reagant.php?r=Eye">Eye</a></td><td>' . $Eye . '</td></tr>
	<tr><td><a href="reagant.php?r=Greenleaf">Greenleaf</a></td><td>' . $Greenleaf . '</td></tr>
	<tr><td><a href="reagant.php?r=Heart">Heart</a></td><td>' . $Heart . '</td></tr>
	<tr><td><a href="reagant.php?r=Hoarfrost">Hoarfrost</a></td><td>' . $Hoarfrost . '</td></tr>
	<tr><td><a href="reagant.php?r=Horn">Horn</a></td><td>' . $Horn . '</td></tr>
	<tr><td><a href="reagant.php?r=Lifeforce">Lifeforce</a></td><td>' . $Lifeforce . '</td></tr>
	<tr><td><a href="reagant.php?r=Quartz">Quartz</a></td><td>' . $Quartz . '</td></tr>
	<tr><td><a href="reagant.php?r=Quintessence">Quintessence</a></td><td>' . $Quintessence . '</td></tr>
	<tr><td><a href="reagant.php?r=Shadowcrest">Shadowcrest</a></td><td>' . $Shadowcrest . '</td></tr>
	<tr><td><a href="reagant.php?r=Sparkstone">Sparkstone</a></td><td>' . $Sparkstone . '</td></tr>
	<tr><td><a href="reagant.php?r=Stormrune">Stormrune</a></td><td>' . $Stormrune . '</td></tr>
	<tr><td><a href="reagant.php?r=Tooth">Tooth</a></td><td>' . $Tooth . '</td></tr>
	<tr><td><a href="reagant.php?r=Venom_sac">Venom_sac</a></td><td>' . $Venom_sac . '</td></tr>
	<tr><td><a href="reagant.php?r=Nith">Nith</a></td><td>' . $Nith . '</td></tr>
	<tr><td><a href="reagant.php?r=Ichor">Ichor</a></td><td>' . $Ichor . '</td></tr>
	<tr><td><a href="reagant.php?r=Numen">Numen</a></td><td>' . $Numen . '</td></tr>
	</table><br><br>';
	
	
} else {
	echo '
	<form action="index.php" method="post">
	
	Catalysts: <br>
	<input type="number" step="any" name="Nith" size="3"><a href="reagant.php?r=Nith">Nith</a><br />
	<input type="number" step="any" name="Ichor" size="3"><a href="reagant.php?r=Ichor">Ichor</a><br />
	<input type="number" step="any" name="Numen" size="3"><a href="reagant.php?r=Numen">Numen</a><br />
	<br><br>
	
	<table border="1">
		<tr>
			<td> 
			</td>
			<td style="text-align: center;">
				Q1
			</td>
			<td style="text-align: center;">
				Q2
			</td>
			<td style="text-align: center;">
				Q3
			</td>
			<td style="text-align: center;">
				Q4
			</td>
			<td style="text-align: center;">
				Q5
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Blood">Blood</a>
			</td>
			<td>
				<input type="number" step="any" name="1Blood" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Blood" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Blood" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Blood" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Blood" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Bile">Bile</a>
			</td>
			<td>
				<input type="number" step="any" name="1Bile" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Bile" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Bile" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Bile" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Bile" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Bone">Bone</a>
			</td>
			<td>
				<input type="number" step="any" name="1Bone" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Bone" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Bone" size="3">
			</td>
			<td><input type="number" step="any" name="4Bone" size="3">
				
			</td>
			<td>
				<input type="number" step="any" name="5Bone" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Cinder">Cinder</a>
			</td>
			<td>
				<input type="number" step="any" name="1Cinder" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Cinder" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Cinder" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Cinder" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Cinder" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Claw">Claw</a>
			</td>
			<td>
				<input type="number" step="any" name="1Claw" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Claw" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Claw" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Claw" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Claw" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Corpseflesh">Corpseflesh</a>
			</td>
			<td>
				<input type="number" step="any" name="1Corpseflesh" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Corpseflesh" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Corpseflesh" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Corpseflesh" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Corpseflesh" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Darktaint">Darktaint</a>
			</td>
			<td>
				<input type="number" step="any" name="1Darktaint" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Darktaint" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Darktaint" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Darktaint" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Darktaint" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Eye">Eye</a>
			</td>
			<td>
				<input type="number" step="any" name="1Eye" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Eye" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Eye" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Eye" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Eye" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Greenleaf">Greenleaf</a>
			</td>
			<td>
				<input type="number" step="any" name="1Greenleaf" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Greenleaf" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Greenleaf" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Greenleaf" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Greenleaf" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Heart">Heart</a>
			</td>
			<td>
				<input type="number" step="any" name="1Heart" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Heart" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Heart" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Heart" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Heart" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Hoarfrost">Hoarfrost</a>
			</td>
			<td>
				<input type="number" step="any" name="1Hoarfrost" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Hoarfrost" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Hoarfrost" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Hoarfrost" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Hoarfrost" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Horn">Horn</a>
			</td>
			<td>
				<input type="number" step="any" name="1Horn" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Horn" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Horn" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Horn" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Horn" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Lifeforce">Lifeforce</a>
			</td>
			<td>
				<input type="number" step="any" name="1Lifeforce" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Lifeforce" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Lifeforce" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Lifeforce" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Lifeforce" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Quartz">Quartz</a>
			</td>
			<td>
				<input type="number" step="any" name="1Quartz" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Quartz" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Quartz" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Quartz" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Quartz" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Quintessence">Quintessence</a>
			</td>
			<td>
				<input type="number" step="any" name="1Quintessence" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Quintessence" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Quintessence" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Quintessence" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Quintessence" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Shadowcrest">Shadowcrest</a>
			</td>
			<td>
				<input type="number" step="any" name="1Shadowcrest" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Shadowcrest" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Shadowcrest" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Shadowcrest" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Shadowcrest" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Sparkstone">Sparkstone</a>
			</td>
			<td>
				<input type="number" step="any" name="1Sparkstone" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Sparkstone" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Sparkstone" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Sparkstone" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Sparkstone" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Stormrune">Stormrune</a>
			</td>
			<td>
				<input type="number" step="any" name="1Stormrune" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Stormrune" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Stormrune" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Stormrune" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Stormrune" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Tooth">Tooth</a>
			</td>
			<td>
				<input type="number" step="any" name="1Tooth" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Tooth" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Tooth" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Tooth" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Tooth" size="3">
			</td>
		</tr>
		<tr>
			<td> 
				<a href="reagant.php?r=Venom_sac">Venom Sac</a>
			</td>
			<td>
				<input type="number" step="any" name="1Venom_sac" size="3">
			</td>
			<td>
				<input type="number" step="any" name="2Venom_sac" size="3">
			</td>
			<td>
				<input type="number" step="any" name="3Venom_sac" size="3">
			</td>
			<td>
				<input type="number" step="any" name="4Venom_sac" size="3">
			</td>
			<td>
				<input type="number" step="any" name="5Venom_sac" size="3">
			</td>
		</tr>
		
	</table>
	<br>
	<input type="submit" name="submit" value="Submit!">
	</form>
	';
}
?>
		

</body>
</html>