<?php
function powerOfTwo($n){
    if($n == 0){
        return "$n False, it is not power of two";
    }else if(($n & ($n - 1)) == 0)
    {
		return "$n is power of 2";
    }else return "$n False, it is not power of two";
}
echo powerOfTwo(2), "\n";
echo powerOfTwo(36), "\n";
echo powerOfTwo(0), "\n";
echo powerOfTwo(16), "\n";
echo powerOfTwo(1), "\n";
echo powerOfTwo(256), "\n";
?>