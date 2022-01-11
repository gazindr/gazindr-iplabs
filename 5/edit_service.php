<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head>
<title> Редактирование данных </title>
</head>
<body>
<H2>Редактирование данных:</H2>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM service WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $name=$st["name"];
 $address = $st['address'];
 }
print "<form action='save_edit_service.php' metod='get'>";
print "Название: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>URL: <input name='address' size='20' type='text'
value='".$address."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>