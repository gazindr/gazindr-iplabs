<?php

function chk($N, $M){
    $i1 = 1;
    $j1 = 0;
    $j2 = 0;
    while ($i1 <= $N){
        if ($N % $i1 == 0){
            $j1++;
        }
        $i1++;
    }
    $i2 = 1;
    while ($i2 <= $M){
        if ($M % $i2 == 0){
            $j2++;
        }
        $i2++;
    }
    if ($j1 == $j2){
    return "Дружественные";
    }
    return "Не дружественные (враги)";
}

$N=rand(0,100);
$M=rand(0,100);
$res = chk($N, $M);
echo '<br> Число N = ' . $N;
echo '<br> Число M = ' . $M;
echo '<br> Результат: ' . $res;
?>



