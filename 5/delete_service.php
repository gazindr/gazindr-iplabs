<?php
session_start();
if($_SESSION["rule"] == 2) {
   $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("���������� ������������ � �������");
   $zapros="DELETE FROM service WHERE id=" . $_GET['id'];
   mysqli_query($conn, $zapros);
 }
 header("Location: index.php");
 exit;
?>