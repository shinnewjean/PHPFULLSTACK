<?php
// 연습문제 3. "I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력하는 프로그램을 구현해 주세요.
    $str_ex = "I am always Hello.";
    $str_base1 = substr($str_ex,0,strlen($str_ex)-6);
    $str_base2 = substr($str_ex,-1);
/*
//1)
    // define ( "ALWAYS" , "$str_base1%s$str_base2" );
    // printf ( ALWAYS , "Happy" );

//2) 점은?
    $str_expl2 = explode( ' ', $str_ex );
    //$str_expl2[3] = "Happy.";
    //print_r ($str_expl2);
    for ($i=0; $i < count($str_expl2); $i++)
    { 
        if ($str_expl2[3] = "Hello.") {
            $str_expl2[3] = "Happy.";
            echo $str_expl2[$i]." ";
        }
        else {
            echo $str_expl2[$i]," ";
        }
    }

//3)
    $str_expl3 = explode( ' ', $str_ex );
    $str_expl3[3] = "Happy.";
    $i = 0;
    while ($i < count($str_expl3))
    { 
    echo $str_expl3[$i]." ";
    $i++;
    }

//4)
    echo str_replace ("Hello","Happy",$str_ex);

//Announcement)
    //1)
        $str_explA1 = explode("Hello", $str_ex );
        $str_implA1 = implode("Happy", $str_explA1 );
        echo $str_implA1;

    //2)
*/

// 함수명 : my_str_replace
// 리턴값 : String $result_str
// 1)
    $result_str = explode(' ', $str_ex);
    // function my_str_replace($result_str)
    // {
    //     for ($i=0; $i < count($result_str); $i++)
    //     { 
    //         if ($result_str[3] = "Hello.") {
    //             $result_str[3] = "Happy.";
    //         }
    //         else {
    //             $result_str[$i] = $result_str[$i];
    //         }
    //     }
    //     return $result_str;
    // }
    // print_r(my_str_replace($result_str));

// 2)
    $rename_inp = "Hello";
    $rename_outp = "Hungry";
    function my_str_replace($pram_str, $param_separator, $param_ch)
    {
        $arr_expl = explode($param_separator, $pram_str);
        $result_str = implode($param_ch, $arr_expl);
        return $result_str;
    }
    echo my_str_replace($str_ex ,$rename_inp,$rename_outp);



?>