<head>
    <title>LabsGazinDR-2.4</title>
</head>
<p> Вариант - 9 </p>

<?php
    $per = rand(3,5);
    $A = array();
    $B = array();
    echo 'Массив А: <br>';
    for ($i=0;$i<$per;$i++)
        {
            $A[$i]=rand(1,3);
            echo $A[$i].'&nbsp;&nbsp;';
        }
    echo '<br><br>';
    echo 'Массив B: <br>';
    for ($i=0;$i<$per;$i++)
            {
                $B[$i]=rand(1,3);
                echo $B[$i].'&nbsp;&nbsp;';
            }
    echo '<br><br>';
    if ($A == $B){
        echo 'Да';
    } else
        echo 'Нет';
?>
