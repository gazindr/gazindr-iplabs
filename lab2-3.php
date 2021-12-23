<head>
    <title>LabsGazinDR-2.3</title>
</head>

<?php
    $cust = array (
        'cnum' => 2001,
        'cname' => 'Hoffman',
        'city' => 'London',
        'snum' => 1001
    );
    print_r($cust);
    echo '<br><br>';

    $cust['rating'] = 100;

    foreach($cust as $k => $v)
        echo $k, ':  ', $v, '<br>';

    echo '<br>';
    $cust = array('cnum', 'cname', 'city','snum');
    sort($cust);
    print_r($cust);
    echo '<br><br>';

    $cust[] = 'rating';
    ksort($cust);
    print_r($cust);
?>
