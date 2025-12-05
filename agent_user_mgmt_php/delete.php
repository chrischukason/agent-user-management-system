<?php
require 'config.php';
$id=$_GET['id'];
$db->exec("DELETE FROM users WHERE id=$id");
header("Location: index.php");
?>