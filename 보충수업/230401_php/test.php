<?php
$a=1;
$max=200;
$zzac=2;
$hol=1;
$result=0;

while ($a <= $max) 
{
    if ($a % $hol === 0 ) {
        $result = $result + $a;
    }
    $a++;
}
echo $result;



?>
