<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
 // ����������� � ���� ������:
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251"); // ��� ���������
 // ������ ������� �� ���������� ������ � �������:
 $sql_add = "INSERT INTO fridge SET name='" . $_GET['name']
."', model='".$_GET['model']."', type='"
.$_GET['type']."', volume='".$_GET['volume'].
"', time='".$_GET['time']. "'";
 mysqli_query($conn, $sql_add); // ���������� �������
 if (mysqli_affected_rows($conn)>0) // ���� ��� ������ ��� ���������� �������
 { print "<p>������ ���������.";
 print "<p><a href=\"index.php\"> ��������� </a>"; }
 else { print "������ ����������. <a href=\"index.php\">
��������� </a>"; }
?>