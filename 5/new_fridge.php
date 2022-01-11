<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
session_start();
if(!$_SESSION["rule"]) header("Location: .");
?>

<html>
<head> <title> Добавление новой записи </title> </head>
<body>
<H2>Добавление новой записи:</H2>
<form action="save_new_fridge.php" metod="get">
<br>Марка: <input name="name" size="20" type="text">
<br>Модель: <input name="model" size="20" type="text">
<br>Тип разморозки: <input name="type" size="10" type="text">
<br>Внутренний объем, л.: <input name="volume" size="20" type="text">
<br>Срок гарантии, г.: <input name="time" size="10" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p><a href="index.php"> Вернуться </a>
</body>
</html>