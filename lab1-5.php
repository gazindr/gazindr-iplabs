<?php
$a = rand(-20,20);
$c = rand(-20,20);
$d = rand(-20,20);
$del=($d+$a^2-1);
echo '<br> a = ' . $a;
echo '<br> c = ' . $c;
echo '<br> d = ' . $d;
echo '<br> del = ' . $del;
if ($del == 0){
	echo "Ошибка, попробуйте еще раз";
} else{
	$per = (25/$c-$d + 2)/($del);
	echo '<br> ((25/' . $c . ') - ' . $d . ' + 2) / ('. $d . ' + ' . $a . '^2 - 1)';
	echo 'Результат:' . round($per);
}
?>
