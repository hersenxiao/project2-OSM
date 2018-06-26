<?php
	$result = $_POST["Education_input"].$_POST["Education_hidden"]."\n";
	$result .= $_POST["Food_input"].$_POST["Food_hidden"]."\n";
	$result .= $_POST["Governance_input"].$_POST["Governance_hidden"]."\n";
	$result .= $_POST["Health_input"].$_POST["Health_hidden"]."\n";
	$result .= $_POST["Housing_input"].$_POST["Housing_hidden"]."\n";
	$result .= $_POST["Leisure_input"].$_POST["Leisure_hidden"]."\n";
	$result .= $_POST["Mixed_input"].$_POST["Mixed_hidden"]."\n";
	$result .= $_POST["Religion_input"].$_POST["Religion_hidden"]."\n";
	$result .= $_POST["Transport_input"].$_POST["Transport_hidden"]."\n";
	$result .= $_POST["Working_input"].$_POST["Working_hidden"];

	file_put_contents("data/userdata/user1/parameterValue.csv",$result);
	header("Location: index.php");
?>