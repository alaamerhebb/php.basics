<?php
$number = 5;
$counter = 1;
$result = 1;
while ($counter <= $number) {
    $result=$result*$counter;
    $counter++;
}
echo $result.PHP_EOL;
