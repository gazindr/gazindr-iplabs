<head>
    <title>LabsGazinDR-2.5</title>
</head>
<p> Вариант - 9 </p>

<?php
    $a=rand(-10,10);
    $b=rand(-10,10);
    function f($u, $t) {
        if ( $u > 0 && $t > 0 ){
            return $u*$u+$t;
        }elseif ( $u <= 0 && $t <= 0 ){
            return $u+(($t*$t)/3);
        }elseif ($u>0 && $t<=0){
            return $u*2+$t;
        }elseif ($u<=0 && $t>0){
            return $u*$u-$t;
        }
    }
    $Z=f($a,$b-1)+f(($a* $a)/3,$b*$b*$b) - f(($a-1)/$b, $b*$a-4);
    echo "a=".$a." b=".$b."<br/>";
    echo "Z=".$Z;
?>

