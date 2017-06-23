<?php
session_start();
if (!$_SESSION[usr_id]) {
	header('location: ../../index.php');
	die();
}
$user = $_SESSION[usr_id];
