<?php
require_once('config/db.php');
require_once('controller/siswaController.php');

$db = new DATABASE();
$conn = $db->getConnection();
$datasiswa = new datasiswa($conn);

$datasiswa->delete($_GET['id']);
header("Location:index.php");

?>