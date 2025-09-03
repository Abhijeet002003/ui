<?php
$conn = new mysqli('localhost', 'root', '', 'php');
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>