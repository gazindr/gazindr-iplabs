<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head
<title> Редактирование данных </title>
</head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM request WHERE id=".$_GET['id']);
 while ($st = mysqli_fetch_array($rows)) {
 $date_in=$st["date_in"];
 $date_out=$st["date_out"];
 $id_fridge=$st["id_fridge"];
 $id_service=$st["id_service"];
 $fio = $st['fio'];
 $price = $st['price'];
 }
print "<form action='save_edit_request.php' metod='get'>";
print "<br>Дата начала: <input name='date_in' size='20' type='date'
value='".$date_in."'>";
print "<br>Дата окончания: <input name='date_out' size='20' type='date'
value='".$date_out."'>";
print "<br>id Холодильника: <select name='id_fridge'>";
  
$result=mysqli_query($conn, "SELECT * FROM fridge");
echo "<option value='".$id_fridge."' selected hidden>".$id_fridge."</option>";
foreach($result as $row)
  echo "<option value='".$row["id"]."'>".$row["id"]."</option>";
echo "</select>";

print "<br>id Сервисного центра: <select name='id_service'>";
$result=mysqli_query($conn, "SELECT * FROM service");
echo "<option value='".$id_service."' selected hidden>".$id_service."</option>";
foreach($result as $row)
  echo "<option value='".$row["id"]."'>".$row["id"]."</option>";
echo "</select>";

print "<br>ФИО: <input name='fio' size='20' type='text'
value='".$fio."'>";
print "<br>Стоимсоть, руб.: <input name='price' size='20' type='text'
value='".$price."'>";
print "<input type='hidden' name='id' value='".$_GET['id']."'>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться </a>";
?>
</body>
</html>