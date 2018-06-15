<?php
	$education_input = $_POST["Education_input"].$_POST["Education_hidden"]."\n";
	print $education_input;
	$food_input = $_POST["Food_input"].$_POST["Food_hidden"]."\n";
	$goverance_input = $_POST["Governance_input"].$_POST["Governance_hidden"]."\n";
	$health_input = $_POST["Health_input"].$_POST["Health_hidden"]."\n";
	$housing_input = $_POST["Housing_input"].$_POST["Housing_hidden"]."\n";
	$leisure_input = $_POST["Leisure_input"].$_POST["Leisure_hidden"]."\n";
	$mixed_input = $_POST["Mixed_input"].$_POST["Mixed_hidden"]."\n";
	$religion_input = $_POST["Religion_input"].$_POST["Religion_hidden"]."\n";
	$transport_input = $_POST["Transport_input"].$_POST["Transport_hidden"]."\n";
	$working_input = $_POST["Working_input"].$_POST["Working_hidden"]."\n";

	file_put_contents("data/userdata/user1/parameterValue.csv",$education_input);
	file_put_contents("data/userdata/user1/parameterValue.csv",$food_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$goverance_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$health_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$housing_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$leisure_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$mixed_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$religion_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$transport_input,FILE_APPEND);
	file_put_contents("data/userdata/user1/parameterValue.csv",$working_input,FILE_APPEND);
	header("Location: index.html");
?>