<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("���������� ������������ � �������");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<h2>������������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> ����� </th> <th> ������ </th>
 <th> ��� ���������� </th> <th> ���������� �����, �. </th> <th> ���� ��������, �. </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM fridge"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["model"] . "</td>";
 echo "<td>" . $row["type"] . "</td>";
 echo "<td>" . $row["volume"] . "</td>";
 echo "<td>" . $row["time"] . "</td>";
 echo "<td><a href='edit_fridge.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_fridge.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_fridge.php"> �������� ������ </a><br><br>

<h2>��������� ������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> �������� </th> <th> ����� </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM service"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["address"] . "</td>";
 echo "<td><a href='edit_service.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_service.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_service.php"> �������� ������ </a><br><br>

<h2>������ �� ������:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> ���� ������ </th> <th> ���� ��������� </th>
 <th> id ������������ </th> <th> id ���������� ������ </th>
 <th> ��� </th> <th> ���������, ���. </th>
 <th> ������������� </th> <th> ���������� </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM request"); // ������ �� ������� �������� � �������������
while ($row=mysqli_fetch_array($result)){// ��� ������ ������ �� �������
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["date_in"] . "</td>";
 echo "<td>" . $row["date_out"] . "</td>";
 echo "<td>" . $row["id_fridge"] . "</td>";
 echo "<td>" . $row["id_service"] . "</td>";
 echo "<td>" . $row["fio"] . "</td>";
 echo "<td>" . $row["price"] . "</td>";
 echo "<td><a href='edit_request.php?id=" . $row["id"]
. "'>�������������</a></td>"; // ������ ������� ��� ��������������
 echo "<td><a href='delete_request.php?id=" . $row["id"]
. "'>�������</a></td>"; // ������ ������� ��� �������� ������
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // ����� ������� � ������� ��
print("<P>����� �������: $num_rows </p>");
?>
<a href="new_request.php"> �������� ������ </a><br><br>


<a href="gen_pdf.php"> ��������� PDF </a><br>
<a href="gen_xls.php"> ��������� Excel </a><br>

<br><a href='..'>�����</a><br>

</body> </html>
