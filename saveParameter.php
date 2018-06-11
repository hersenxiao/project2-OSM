<?php
	$education_input = $_POST["education_input"]."\n";
	$food_input = $_POST["food_input"]."\n";
	$goverance_input = $_POST["goverance_input"]."\n";
	$health_input = $_POST["health_input"]."\n";
	$housing_input = $_POST["housing_input"]."\n";
	$leisure_input = $_POST["leisure_input"]."\n";
	$mixed_input = $_POST["mixed_input"]."\n";
	$religion_input = $_POST["religion_input"]."\n";
	$transport_input = $_POST["transport_input"]."\n";
	$working_input = $_POST["working_input"]."\n";

	file_put_contents("data/userdata/user1parameterValue.csv",$education_input);
	file_put_contents("data/userdata/parameterValue.csv",$food_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$goverance_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$health_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$housing_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$leisure_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$mixed_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$religion_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$transport_input,FILE_APPEND);
	file_put_contents("data/userdata/parameterValue.csv",$working_input,FILE_APPEND);
	header("Location: parameter_menu.php");
?>