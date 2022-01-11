<head>
    <meta charset="UTF-8">
    <title>GazinDR</title>
</head>

<?
if (is_numeric($_POST["a"]) and is_numeric($_POST["a1"])) {

    } else {
       echo "Введите числа";
       exit();
    }
switch ($_POST["z"]) {
 case 1:
 $s1= $_POST["a"]+$_POST["a1"];
 break;
 case 2:
 $s1= $_POST["a"]-$_POST["a1"];
 break;
 case 3:
 $s1= $_POST["a"]*$_POST["a1"];
 break;
 case 4:
 $s1= $_POST["a"]/$_POST["a1"];
 break;
}
 echo "Результат вычислений:        ";
echo $s1;
?>
