<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<?php
 $conn = mysqli_connect("eu-cdbr-west-02.cleardb.net","b374ee7921ac55","547aa47c", "heroku_1ad19f5ab79e862") or die ("Невозможно подключиться к серверу");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
 mysqli_query($conn, $zapros);
 header("Location: index.php");
 exit;
?>

<body bgcolor='#A1BCC9'></body>