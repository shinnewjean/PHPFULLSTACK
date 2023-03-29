<?php
    $arr = array(5 , 10 , 7 , 3 , 1);
/*    
    $a = count($arr);
    for ($n = 0; $a > $n ; $n++)
    { 
        echo $n." > ".$arr[$n]."\n";
    }
*/    
    //echo "0"." > ".$arr[]."\n";
/*
    foreach ($arr as $key => $value) {
        echo $key." > ".$value."\n";
    }
*/

// asort($arr);
// print_r($arr);

// $temp = $arr[0];
// $arr[0] = $arr[1];
// $arr[1] = $arr[2];
// $arr[2] = $temp;
// print_r($arr);
/*
$a = count($arr);
for ($i=0; $i < $a ; $i++) 
{ 
    for ($p=0; $p < $a ; $p++) 
    {
        if ($arr[$i] > $arr[$p]) // < 오름차순 / > 내림차순
        {
            $temp = $arr[$i];
            $arr[$i] = $arr[$p];
            $arr[$p] = $temp;
        }
    } 
}
print_r($arr);
*/
$a = count($arr);
//echo $a;
//echo $arr[count($arr)-1];
foreach ($arr as $key => $value) 
{
    if ($value === max($arr)) {
        echo $key." => ".$value."\n";
    }

    if ($value === min($arr)) {
        echo $key." => ".$value."\n";
    }
}

// foreach ($arr as $key => $value) 
// {
//     if ($value === max($arr)) 
//     { 
//         echo $key." => ".$value."\n";
//     }
//     else {
//         for ($i=$a; $i <= 0 ; $i--)
//         {
//             if ($value === max($arr)) 
//             {
//                 echo $key." => ".$value."\n";
//             }
//         }
//     }
// }

// foreach ($arr as $key => $value) 
// {
//     if ($value === max($arr)) 
//     { 
//         echo $key." => ".$value."\n";
//     }

// }

/*foreach ($arr as $key => $value) 
{
    if ($value === max($arr)) {
        echo $key." => ".$value."\n";
    }
    else {
        for ($i=0; $i < $a; $i++) 
        {

        } 
    }
}*/


// echo max($arr);


/*버블 정렬 카피
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting\n";
print_r($array1);

natsort($array2);
echo "\nNatural order sorting\n";
print_r($array2);
*/




?>