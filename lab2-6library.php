<?php
    $arr=array();
    $temp_arr=array();
    $r=rand(1,6);
    function Task() {
        echo "Если в матрице P(m,n) есть отрицательные элементы, найти наибольший из них<br/>";
        echo "<br/>";
      }

    function Matrice() {
        global $arr;
        global $temp_arr;
        global $r;
        for($i = 0; $i < $r; $i++) {
            for($j = 0; $j < $r; $j++){
                $l=rand(-10,10);
                    array_push($temp_arr, $i + $l);
            }
            array_push( $arr, $temp_arr);
            $temp_arr = [];
        }
    }

    function Concl(){
        global $arr;
            echo "Основная матрица:<br/>";
        foreach($arr as $items) {
            foreach($items as $item) {
            echo $item.'|';
            }
              echo "<br>";
        }
        echo "<br>";
    }

    function Reshenie(){
        global $arr;
        global $r;
        $naib = -100;
        for($i=0; $i < count($arr); $i++){
            for($q=0; $q < count($arr[$i]); $q++){
                if($arr[$i][$q]>$naib && $arr[$i][$q] <0)
                {
                    $naib = $arr[$i][$q];
                }
            }
        }
        echo 'Наибольшее из отрицтельных чисел: '. $naib;
    }
    echo "<br>";
?>