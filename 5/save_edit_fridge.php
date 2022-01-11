<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html><body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn , 'SET NAMES cp1251');
 $zapros="UPDATE fridge SET name='".$_GET['name'].
"', model='".$_GET['model']."', type='"
.$_GET['type']."', volume='".$_GET['volume'].
"', time='".$_GET['time']."' WHERE id='"
.$_GET['id']."'";
 mysqli_query($conn, $zapros);
if (mysqli_affected_rows($conn)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться</a> '; }
?>
</body></html>