<?php

function chk($N, $M){
    $col =0;
    $i = 0;
    $j1 = 1;
    $j2 = 1;
    if ($N > $M){
            for  ($i = $M + 1; $i < $N; $i++){
                for ($j1 = 1;  $j1 < $N; $j1++){
                    for ($j2 = $j1; $j2 < $N; $j2++){
                        if (($j1*$j1*$j1) + ($j2*$j2*$j2) == $i){
                            $col++;
                            echo $i . ' ';
                         }
                    }
                }
            }
        } else {
            for  ($i = $N + 1; $i < $M; $i++){
                for ($j1 = 1;  $j1 < $M; $j1++){
                    for ($j2 = $j1; $j2 < $M; $j2++){
                        if (($j1*$j1*$j1) + ($j2*$j2*$j2) == $i){
                            $col++;
                            echo $i . ' ';
                         }
                    }
                }
            }

        }
        if ($col > 0) {
        echo '<br> Найдено чисел: ' . $col;}
        else{
        echo '<br> Ничего не найдено';}
}

$N=rand(0,100);
$M=rand(0,100);
$res = chk($N, $M);
echo '<br> Число N = ' . $N;
echo '<br> Число M = ' . $M;

?>

