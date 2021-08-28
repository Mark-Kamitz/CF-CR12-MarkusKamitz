<?php
require_once("actions/db_connect.php");
$sql = "SELECT * FROM destinations";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$destinations = json_encode($rows);
echo $destinations;
$connect->close();
?>