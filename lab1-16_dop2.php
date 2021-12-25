<?php
    $N = rand(1,100);
    $col =0;
    $i = 1;
    echo '<br> Число N = ' . $N;
    echo '<br>';
    for ($i = 1; $i <= $N; $i++){
        if ($N % $i == 0){
            echo $i . ' ';
            $col++;
        }
    }
    echo '<br> Количество делителей: ' . $col;
?>