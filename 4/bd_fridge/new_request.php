<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<H2>Добавление новой записи:</H2>
<form action="save_new_request.php" metod="get">
<br>Дата начала: <input name="date_in" size="20" type="date">
<br>Дата окончания: <input name="date_out" size="20" type="date">

<?php
print "<br>id Холодильника: <select name='id_fridge'>";
$result=mysqli_query($conn, "SELECT * FROM fridge");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]." ".$row["model"]."</option>";
echo "</select>";
?>

<?php
print "<br>id Сервисного центра: <select name='id_service'>";
$result=mysqli_query($conn, "SELECT * FROM service");
echo "<option value='' selected hidden>...</option>";
foreach($result as $row) echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
echo "</select>";
?>

<br>ФИО: <input name="fio" size="20" type="text">
<br>Стоимость, руб.: <input name="price" size="20" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p><a href="index.php"> Вернуться </a>
</body>
</html>