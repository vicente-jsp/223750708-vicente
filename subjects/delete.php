<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM subjects WHERE id = $id");

header("Location: index.php");
exit;
?>