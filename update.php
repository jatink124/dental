<?php
	require_once 'connect.php';
	$data = json_decode(file_get_contents("php://input"));
  $mem_id = $data->mem_id;
  $name = $data->name;
	$email = $data->email;
	$phone = $data->phone;
	$comments = $data->comments;
	$conn->query("UPDATE `member` SET `name` = '$name', `email` = '$email',`phone` = '$phone', `comments` = '$comments' WHERE `mem_id` = $mem_id") or die(mysqli_error());
?>
