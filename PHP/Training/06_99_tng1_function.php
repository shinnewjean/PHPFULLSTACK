<?php 
$HH = "--------------------------------------------------------------------";

// 1. 배열의 길이를 반환하는 my_len() 함수를 작성하시오.

/*    $arr_base = array(1, 2, 3, 4, 5);
    $arr_base1 = array(1, 2, 3, 4, 5, 6, 7, 8);*/

    /*echo "my_len : "."count ".count($arr_base)."\n"."\n";
    echo "my_len : "."sizeof ".sizeof($arr_base)."\n"."\n";*/


/*    function my_len($arr_len) //변수명: my_len , 파라미터: $arr_len = $arr_base
    {
        $result = 0; 
        foreach ($arr_len as $val) //$arr_len = $arr_base 의 값은 $val
        {
            $result += 1; //값이 있을경우 +1이 되도록해서 결과값(중첩)
        }
        return $result;
    }
    echo "my_len : "."foreach ".my_len($arr_base)."\n"."\n"; //출력으로 {변수명(배열명)} 어떤배열을 어떤변수에 적용 
*/

// 별찍기를 함수로 가져옵시다.

function print_star($i)
{
    for ($a = 0; $i > $a ; $a++) // for(초기값; 조건값; 증감값)
    { 
        echo "*"; // for문 소스코드 : 처음에 $a가 0이고,
                    //                한번 실행될때마다 $a++로 1증가,
                    //                $i보다 $a작을때까지 반복        =>$i가 3일 경우 $a는 0,1,2까지 3번반복

    }
        echo "\n"; // for문 실행후 줄바꿈 =>for(*가 3번 실행)=>function구절이 $i만큼 반복되는건가?
}


// function print_star_rect($a)
// {
//     for ($b = 0; $b < $a ; $b++) 
//     { 
//         for ($g = 0; $g < $a ; $g++) 
//         { 
//             echo "*";
//         }
//             echo "\n";
//     }
// }

function print_star_rect($a)
{
    for ($b = 0; $b < $a ; $b++) 
    { 
        print_star($a);
    }
}


print_star_rect(3);
echo $HH."\n";
print_star_rect(4);
echo $HH."\n";

/*
print_star(1);
print_star(2);
print_star(3);
print_star(4);
print_star(5);
echo $HH."\n";
*/


?>