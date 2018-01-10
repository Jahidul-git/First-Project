<?php
	include'practice.php';
	$id = $_GET['id'];
	$db = Database();
	$db->delteData($id);
?>