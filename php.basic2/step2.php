<?php
function greaterFn($num){
    if($num > 40){
        return "{$num} is greater than 30";
    }else if ($num > 20 ){
        return "{$num} is greater than 20"; 
    }else if($num > 10 ){
        return "{$num} is greater than 10"; 
    }else{
        return "{$num} is less than 10 ";
    }
}
echo greaterFn(40),"\n";
echo greaterFn(21),"\n";
echo greaterFn(12),"\n";
echo greaterFn(8),"\n";
?>