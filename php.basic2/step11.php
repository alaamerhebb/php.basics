<?php
function primeCheck($number)
{
    if ($number == 1)
        return "{$number} is not a prime number";
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return "{$number} is not a prime number";
    }
    return "{$number} is a prime number";
}
echo primeCheck(1), "\n";
echo primeCheck(7), "\n";
echo primeCheck(5), "\n";
echo primeCheck(11), "\n";
?>