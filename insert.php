<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
	$name = $data->name;
	$email = $data->email;
	$phone = $data->phone;
	$comments = $data->comments;

	$conn->query("INSERT INTO `member` (name,email,phone,comments) VALUES('$name', '$email','$phone', '$comments')") or die(mysqli_error());
?>
