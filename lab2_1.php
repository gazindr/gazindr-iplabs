<head>
    <title>LabsGazinDR-2.1</title>
</head>

<?php

    $treug=array(1,2,3,4,5,6,7,8,9,10);


    echo'Массив треугольных чисел: ';
    foreach($treug as $i=>$n) {
        $treug[$i]=$n*($n+1)/2;
        echo $treug[$i] .'&nbsp;&nbsp;';
    }
    echo '<br><br>';

    $kvd=array(1,2,3,4,5,6,7,8,9,10);

    echo'Массив квадратов натуральных чисел: ';
    foreach($kvd as $a=>$b) {
        $kvd[$a]=$b*$b;
        echo $kvd[$a].'&nbsp;';
        }
    echo '<br><br>';

    $rez=array();

    echo'Результирующий массив: ';
    $rez=array_merge($treug,$kvd);
    print_r($rez);
    echo '<br><br>';

    echo'Отсортированный массив: ';
    sort($rez);
    print_r($rez);

    echo '<br><br>';

    echo'Массив с удаленным первым элементом: ';
    array_shift($rez);
    print_r($rez);
    echo '<br><br>';

    echo'Массив с удаленными повторными элементами: ';
    $rez = array_unique($rez);
    print_r($rez);

?>