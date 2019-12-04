<?php 
    $currentYear = date('Y');
    $year = $currentYear - 100;

    for($year; $year <= $currentYear; $year++) {
        echo $year . "\n";
    }
?>