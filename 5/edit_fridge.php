<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head>
<title> �������������� ������ </title>
</head>
<body>
<H2>�������������� ������:</H2>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM fridge WHERE id='".$_GET['id']."'");
 while ($st = mysqli_fetch_array($rows)) {
 $id=$st['id'];
 $name=$st['name'];
 $model = $st['model'];
 $type = $st['type'];
 $volume = $st['volume'];
 $time = $st['time'];
 }
print "<form action='save_edit_fridge.php' metod='get'>";
print "�����: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>������: <input name='model' size='20' type='text'
value='".$model."'>";
print "<br>��� ����������: <input name='type' size='10' type='text'
value='".$type."'>";
print "<br>���������� �����, �.: <input name='volume' size='20' type='text'
value='".$volume."'>";
print "<br>���� ��������, �.: <input name='time' size='10' type='text'
value='".$time."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>