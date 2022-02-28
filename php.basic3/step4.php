<?php
function sum_dig($nums)
{
    $sum = 0;
    for ($i = 0; $i < strlen($nums); $i++) {
        $sum += $nums[$i];
    }
    return $sum;
}
echo sum_dig("12345") . "\n";
echo sum_dig("9999") . "\n";
?>