<?php
//    $arr = array(5 , 10 , 7 , 3 , 1);
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
/*
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
*/
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

<?php
/*
$arr = array(1, 5, 2, 3, 0);
$cnt = count($arr);

for ($i=1; $i <= $cnt; $i++) { 
    echo $i." => ".max($arr)."\n";
    unset($arr[array_search(max($arr), $arr)]);
}

$arr = array(5, 10, 7, 3, 1);
*/
?>

<?php
//배열 안에 최대값, 최소값을 출력해주는 함수를 각각 구현해주세요.
//함수명은 "my_max" , "my_min"
$arr = array(5 , 10 , 7 , 3 , 1);

my_max($arr); //1. my_max함수를 이용하여 $arr배열을 구해주세요

/*function my_max($arr){ //함수명 : my_max
foreach ($arr as $val) 
{
    if ($arr[0] > $arr[1]) //2. [0]값이 [1]값보다 클때
    {
        $ifmax = $arr[0]; //2-1. [0]값 $ifmax로 저장
    }
    else 
    {
        $ifmax = $arr[1];//3. 그외([1]이 클때)는 $ifmax를 [1]로 덮어서 저장
    }                   // 첫 비교 완료

    for ($i=1; $i < count($arr) ; $i++) //4. 반복문을 사용하여 [1]시작으로 ++중첩
    {
        if ($arr[$i] > $ifmax) //4-1. [i](중첩되는값)이 $ifmax([0][1]를 비교하고 나온 $ifmax과 비교해 큰값)보다 큰 경우
        {
            $ifmax = $arr[$i]; //4-2. $ifmax를 [i]로 덮어서 저장
        }
        else 
        {
            $ifmax = $ifmax;//5. 그외([i]가 작을때)는 $ifmax는 그대로 $ifmax로 저장
        }
    }
}
echo $ifmax;
}*/






// echo "최소값: " . $min;
// echo "<br />\n";
// echo "최대값: " . $max;
?>