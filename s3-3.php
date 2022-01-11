<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gdr</title>
</head>
<body>
<FORM method="post" action="<?php print $PHP_SELF ?>">
    Введите число:
    <p> <INPUT type="text" name="a" size="3">
        </SELECT>
    <p>Вывод делителей:
        <SELECT  NAME="z" SIZE="5">
            <OPTION  VALUE="1"  SELECTED> Четные делители
            <OPTION  VALUE="2"> Нечетные
            <OPTION  VALUE="3"> Простые
            <OPTION  VALUE="4"> Составные
            <OPTION  VALUE="5"> Все делители
        </SELECT>
        <br/>
        <br/> <INPUT type="submit" name="run" value="Рассчитать"></p>
</FORM>
<?
    if (is_numeric($_POST["a"])) {
        } else {
           echo "Введите числа";
           exit();
        }
    function is_prime ($n)
    {
        for($x=2; $x <= sqrt($n); $x++) {
            if($n % $x == 0) {
                return false;
            }
        }
        return true;
    }
    switch ($_POST["z"]) {
     case 1:
    echo "Четные делители числа: ". $_POST["a"] . "<br/>";
    for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
    if (($_POST["a"] % $i) == 0) echo $i."<br>";
    }
    break;
    case 2:
    echo "Нечетные делители числа: ". $_POST["a"] . "<br/>";
    for ($i=1;$i<=$_POST["a"];$i=$i+2) {
    if (($_POST["a"] % $i) == 0) echo $i."<br>";
    }
    break;
    case 3:
    $n=$_POST["a"];
    echo "Простые делители числа: ". $_POST["a"] . "<br/>";
    for ($i=1;$i<=$_POST["a"];$i=$i+1) {
    if (($_POST["a"] % $i) == 0) if (is_prime($i)) echo $i."<br>";
    }
    break;
    case 4:
    echo "Составные делители числа: ". $_POST["a"] . "<br/>";
    for ($i=2;$i<=$_POST["a"];$i=$i+1) {
    if (($_POST["a"] % $i) == 0) if (!is_prime($i)) echo $i."<br>";
    }
    break;
    case 5:
    echo "Все делители числа: ". $_POST["a"] . "<br/>";
    echo "Четные делители". "<br/>";
    for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
    if (($_POST["a"] % $i) == 0) echo $i."<br>";
    }
    echo "Нечетные делители " . "<br/>";
    for ($i=1;$i<=$_POST["a"];$i=$i+2) {
    if (($_POST["a"] % $i) == 0) echo $i."<br>";
    }
    echo "Простые делители" . "<br/>";
    for ($i=1;$i<=$_POST["a"];$i=$i+1) {
    if (($_POST["a"] % $i) == 0) if (is_prime($i)) echo $i."<br>";
    }
    echo "Составные делители" . "<br/>";
    for ($i=2;$i<=$_POST["a"];$i=$i+1) {
    if (($_POST["a"] % $i) == 0) if (!is_prime($i)) echo $i."<br>";
    }
    break;
    }
    ?>
</body>
</html>