<?php

// UTF-8 NΟ BOM

require 'db.php';
$sql = file_get_contents('create-tables.sql');
$sql = str_replace("\xEF\xBB\xBF", '', $sql); // remove BOM
$pdo->query($sql);
header('location: customer-list.php');
