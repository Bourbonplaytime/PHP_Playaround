<?php 
    $currentYear = date('Y');
    $year = $currentYear - 100;

    do {
        echo $year . "\n";
    }
    while(++$year <= $currentYear);
?>