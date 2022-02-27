<?php
function sq_rt($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return $x;
}
echo (sq_rt(36)."\n");
echo (sq_rt(676)."\n");
?>