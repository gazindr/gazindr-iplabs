<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head> <title> ���������� ����� ������ </title> </head>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<H2>���������� ����� ������:</H2>
<form action="save_new_request.php" metod="get">
<br>���� ������: <input name="date_in" size="20" type="date">
<br>���� ���������: <input name="date_out" size="20" type="date">

<br>id ������������: <select name="id_fridge">
<?php
  $result=mysqli_query($conn, "SELECT * FROM fridge");
  echo "<option value='' selected disabled hidden>...</option>";
  foreach($result as $row)
    echo "<option value='".$row["id"]."'>".$row["id"]."</option>";
  echo "</select>";
?>

<br>id ���������� ������: <select name="id_service">
<?php
  $result=mysqli_query($conn, "SELECT * FROM service");
  echo "<option value='' selected disabled hidden>...</option>";
  foreach($result as $row)
    echo "<option value='".$row["id"]."'>".$row["id"]."</option>";
  echo "</select>";
?>

<br>���: <input name="fio" size="20" type="text">
<br>���������, ���.: <input name="price" size="20" type="text">
<p><input name="add" type="submit" value="��������">
<input name="b2" type="reset" value="��������"></p>
</form>
<p><a href="index.php"> ��������� </a>
</body>
</html>