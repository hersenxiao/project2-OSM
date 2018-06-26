<?php
$username = "user1";
if(is_uploaded_file($_FILES["avatar"]["tmp_name"])){
	move_uploaded_file($_FILES["avatar"]["tmp_name"],"./data/userdata/$username/communication.txt");
}else{
	print "Error";
}
header("Location: index.php");
?>