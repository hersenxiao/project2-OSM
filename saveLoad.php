<?php
$username = "user1";
if(is_uploaded_file($_FILES["avatar"]["tmp_name"])){
	move_uploaded_file($_FILES["avatar"]["tmp_name"],"./data/userdata/$username/parameterValue.csv");
}else{
	print "Error";
}
header("Location: parameter_menu.php");
?>