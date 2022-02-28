<?php

$number = 8;
$line_counter = 0;
while ($line_counter <= $number) {
    $column_counter = 1;
    while ($column_counter <= $line_counter) {
        echo ("*");
        $column_counter++;
    }
    $line_counter++;
    echo ("\n");
}
?>
