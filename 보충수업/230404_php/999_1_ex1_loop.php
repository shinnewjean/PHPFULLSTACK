<?php
//1. while + if가 조합된거
    // $i = 0;
    // while ($i <= 4)
    // {
    //     ++$i;
    //     if ( $i === 0 ) 
    //     {
    //         echo $i."입니다.";
    //     } 
    //     else if( $i === 4 ) 
    //     {
    //         echo $i."입니다.";
    //     }
    //     // ++$i;
    // }

    //     //my exam
    //     echo "-----------------------------------------------------------------\n";
    //     $a = 0;
    //         while ($a <= 5) {
    //             echo ++$a."\n";
    //         }
    //     echo "-----------------------------------------------------------------\n";
    //     $b = 0;
    //         while ($b <= 5) {
    //             echo $b++."\n";
    //         }
    //         echo "-----------------------------------------------------------------\n";


//foreach + if 조합
    // $arr_ass = array("a" => 1   ,"b" => 2 ,"c" => 3); //사이즈가 3인 어레이 /요소의 갯수가 3 /사이즈 3의 배열
    // // foreach? 배열의 사이즈 만큼 돌아가는 반복문
    // foreach ($arr_ass as $key => $val) 
    // {
    //     // echo "$key : $val\n";
    //     if( $key === "c" || $val === 2 )
    //     {
    //         echo "if";
    //     }
    // }

// 이중루프
    // for( $i = 2; $i <= 9; $i++ )
    // {
    //     echo $i."단\n";
    //     for ( $a = 1; $a <= 10; $a++ ) 
    //     {
    //         $result = $i * $a;
    //         echo $result."\n";
    //     }
    // }

    // $a=1;
    // while ($a <= 10) 
    //     {
    //         $result = 2 * $a;
    //         echo $result;
    //     }

// 1~100 숫자중에 짝수의 합을 구해주세요

    // $a=1;
    // $max=200;
    // $zzac=2;
    // $hol=1;
    // $result=0;

    // while ($a <= $max) 
    // {
    //     if ($a % $hol === 0 ) {
    //         $result = $rcesult + $a;
    //     }
    //     $a++;
    // }
    // echo $result;

// 연상배열
    // $arr_test = 
    //     array(
    //         1
    //         ,2
    //         ,
    //             array(
    //                 "info_a" => 3
    //                 ,"info_b" => 4
    //                 ,"info_arr" => 
    //                     array(
    //                         "f_1" => 5
    //                         ,"f_2" => 7
    //                     )
    //             )
    //     );

    // echo $arr_test[2]["info_arr"]["f_1"];

    // // foreach ($arr_test as $key => $val) {
    // //     $val === 3 || 7;
    // //     echo $key." ".$val;
    // // }
    // // if (condition) {
    // //     # code...
    // // }

// 함수
    //함수명      : fnc_sum
    // 기능       : 파라미터를 더한값을 리턴
    // 파라미터   : INT $param_a
    //              IINT $param_b
    // 리턴값     : INT $sum

    // function fnc_sum($param_a,$param_b)
    // {
    //     $sum=$param_a+$param_b;
    //     return $sum;
    // }
    // echo fnc_sum(1,2);

// 가변함수 가변파라미터
    // function fnc_sum2(...$param_numbers)
    // {
    //     $sum=$param_numbers[0]+$param_numbers[1];
    //     return $sum;
    // }
    // echo fnc_sum2(1,2);

    // function fnc_sum2(...$param_numbers)
    // {
    //     // $sum = 0;
    //     // foreach ($param_numbers as $val) {
    //     //     $sum += $val;
    //     // }
    //     return array_sum($param_numbers);
    // }
    // echo fnc_sum2(1,2,3,4,5,6,7,8,9,10);

//글로벌 함수
    // function fnc_global()
    // {
    //     global $global_i;
    //     static $static_i = 0;
    //     $global_i = 0;
    // }
    // // $global_i = 5; //출력 = 0
    // fnc_global();
    // $global_i = 5; //출력 = 5
    // echo $global_i;

    // function fnc_static()
    // {
    //     static $static_i = 0;
    //     echo $static_i;
    //     $static_i++;
    // }
    // fnc_static();
    // fnc_static();
    // fnc_static();
    // fnc_static();

    // function fnc_reference(&$param_str) //참조문 //$str이 &$param_str으로 되는부분??
    // {
    //     $param_str = "fnc_reference";
    // }
    // $str = "aaa";
    // fnc_reference($str);
    // echo $str;

    //별찍기 함수로 만들기

        function fnc_star($param_star)
        {
            for ($a=0; $a < $param_star; $a++) 
            { 
                echo"*";
            }
            echo"\n";
        };
        fnc_star(1);
        fnc_star(2);
        fnc_star(3);
        fnc_star(4);
        fnc_star(5);
        
        while i
            // for ($b=0; $b < $max; $b++) 
            // { 
            //     for ($a=0; $a < $max; $a++) 
            //     { 
            //         echo"*";
            //     }
            //     echo"\n";
            // }
