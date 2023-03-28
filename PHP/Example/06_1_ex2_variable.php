<?php
$N = "\n";
$HH = "-------------------------------------------------------------------------";

//전역변수(global variable)
    /*
    //-----------독립-----------=>저장하는 메모리가 다름
    function fnc_add()
    {
        $int_a = $int_a +10;

        return $int_a;
    }
    //--------------------------


    //-----------독립-----------
    $int_a = 5;

    echo fnc_add();
    //--------------------------
    */
                //
    //          V

//전역변수
/*    function fnc_add()
    {
        global $global_int_a; //전역변수 선언
        $global_int_a = $global_int_a +10;
        return $global_int_a;
    }

    $global_int_a = 5; //전역변수 초기화(값 대입)

    echo fnc_add().$N.$HH.$N;
*/

//Test
/*    $a = 100;

    $b = 200;

    function sum() {

        $GLOBALS["b"] = $GLOBALS["a"] + $GLOBALS["b"];  // $GLOBALS 배열을 사용하여 전역 변수로 선언.

    }

    sum();

    echo "변수 ＼$b 의 값은 ". $b . "입니다.".$N.$HH.$N;
*/

// 정적 변수(Static variable) : 중첩되는변수??
    /*function fnc_add_1()
    {
        static $i = 1; //static이란? 기존의 값이 대입되어있으면 = 1이 안먹힘
        echo $i."\n";
        $i++;
    }
    //------------------------다른 메모리
    //for(초기값; 조건값; 증감값)
    for($i = 0; $i < 3; $i++)
    {
        fnc_add_1();
    }*/
    //out put
    // $i=0 일때
    // 1 $i=1 일때
    // 1 $i=2 일때


// call by value
/*    function fnc_val($int_a,$int_b)
    {
        $int_a = 3;
        $int_b = 4;
        echo "function => ".$int_a." ".$int_b.$N.$HH.$N;
    }

    $int_a = 1;
    $int_b = 2;
    fnc_val( 5 , 6 );

    echo $int_a." ".$int_b.$N.$HH.$N;*/

// call by reference
function fnc_ref(&$a,&$b) //  & : 주소를 참조하는 표현
{
    $a = 3;
    $b = 4;
}

$int_a = 1;
$int_b = 2;
fnc_val( $int_a , $int_b );

echo $int_a." ".$int_b.$N.$HH.$N;
?>