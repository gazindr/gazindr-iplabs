<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<body>
<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("Невозможно подключиться к серверу");
 mysqli_query($conn, "SET NAMES cp1251");
?>
<h2>Холодильники:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Марка </th> <th> Модель </th>
 <th> Тип разморозки </th> <th> Внутренний объем, л. </th> <th> Срок гарантии, г. </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM fridge"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["model"] . "</td>";
 echo "<td>" . $row["type"] . "</td>";
 echo "<td>" . $row["volume"] . "</td>";
 echo "<td>" . $row["time"] . "</td>";
 echo "<td><a href='edit_fridge.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_fridge.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_fridge.php"> Добавить запись </a><br><br>

<h2>Сервисные центры:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Название </th> <th> Адрес </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM service"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["name"] . "</td>";
 echo "<td>" . $row["address"] . "</td>";
 echo "<td><a href='edit_service.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_service.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_service.php"> Добавить запись </a><br><br>

<h2>Заявки на ремонт:</h2>
<table border="1">
<tr>
 <th> id </th>
 <th> Дата начала </th> <th> Дата окончания </th>
 <th> id Холодильника </th> <th> id Сервисного центра </th>
 <th> ФИО </th> <th> Стоимость, руб. </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result=mysqli_query($conn, "SELECT * FROM request"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row["id"] . "</td>";
 echo "<td>" . $row["date_in"] . "</td>";
 echo "<td>" . $row["date_out"] . "</td>";
 echo "<td>" . $row["id_fridge"] . "</td>";
 echo "<td>" . $row["id_service"] . "</td>";
 echo "<td>" . $row["fio"] . "</td>";
 echo "<td>" . $row["price"] . "</td>";
 echo "<td><a href='edit_request.php?id=" . $row["id"]
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete_request.php?id=" . $row["id"]
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 echo "</tr>";
}
echo "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего записей: $num_rows </p>");
?>
<a href="new_request.php"> Добавить запись </a><br><br>


<a href="gen_pdf.php"> Сохранить PDF </a><br>
<a href="gen_xls.php"> Сохранить Excel </a><br>

<br><a href='..'>Назад</a><br>

</body> </html>
