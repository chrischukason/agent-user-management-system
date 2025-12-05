<?php
require 'config.php';
$sql = file_get_contents('db.sql');
$db->exec($sql);
echo "Database initialized.";
?>