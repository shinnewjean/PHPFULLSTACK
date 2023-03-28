<?php
/*function outputHello() {
    echo "Hello yujin!";
}

if (1>0) {
    outputHello();
} else {
    echo "Bye yujin";
}*/


$n = "\n";
$HH = "-------------------------------------------------------------------------";

/*1.
// 두 파라미터의 차를 구하는 함수를 구현해 주세요.
    function fnc_Minu ($int_minu1,$int_minu2)
    {
        //$minus = $int_minu1 - $int_minu2;
        //return $minus;

        return $int_minu1 - $int_minu2;
    }

    $result_Minu = fnc_Minu(100,3);
    
// 두 매개변수를 나눈 함수(나머지)를 구현해 주세요.
    function fnc_divi ($int_divi1,$int_divi2)
    {
        $division = $int_divi1 / $int_divi2;
        return $division;
    }

    $result_divi = fnc_divi(100,3);

// 두 매개변수를 곱하는 함수를 구현해 주세요.
    function fnc_Multip ($int_Multip1,$int_Multip2)
    {
        $Multiplication = $int_Multip1 * $int_Multip2;
        return $Multiplication;
    }

    $result_Multip = fnc_Multip(100,3);

// 각각의 결과를 출력해 주세요.
    echo $result_Minu.$n;
    echo $result_divi.$n;
    echo $result_Multip.$n;
*/

//2.
//빼기, 곱하기 ,나누기를 가변 파라미터 함수로 구현해 주세요.
    function fnc_args_Mi()
    {
        $args = func_get_args();
        $minus = 0;
        foreach ($args as $val) {
            if ($val === $args[0]){
                $minus=$val;
            }
            else{
                $minus -= $val;
            }
        }
        return $minus;
    }
    
    function fnc_args_M()
    {
        $args = func_get_args(); //곱하기
        $Multiplication = 0; //처음값 0
        
        foreach ($args as $val) {
            if ($val === $args[0]){ //배열이 배열의 첫번째값이 올때
                $Multiplication=$val;
            }
            else{
                $Multiplication *= $val;
            }
        }
        return $Multiplication;
    }

    function fnc_args_D()
    {
        $args = func_get_args(); //나누기
        $division = 0;
        
        foreach ($args as $val) {
            if ($val === $args[0]){ 
                $division=$val;
            }
            else{
                $division /= $val;
            }
        }
        return $division;
    }
    
    echo fnc_args_Mi (10,10,2,5).$n;
    echo fnc_args_M (10,2,5).$n;
    echo fnc_args_D (10,2,5).$n.$HH.$n;


/*//test
    function fnc_args_Minus()
    {
        $args = func_get_args();
        $sum = func_get_arg(0)*2;
        foreach ($args as $val) {
            $sum -= $val;
        }
        return $sum;
    }
    $result = fnc_args_Minus (10,2,5);
    echo $result.$n.$HH.$n;
*/


/*    function func() {
        echo func_get_arg(0);
        }
        func(1,2,3,4,5);
*/

/*    function func1() {
        $arr = func_get_args();
        for( $i = 0; $i < func_num_args(); $i++ ) 
            {
            echo $arr[$i].$n;
            }
        }
        func1(1,2,3,4,5);
*/

//Teacher.ver
    /*function fnc_args_minus()
    {
        $result_args = fnc_get_args();
        $result_minus = null;

        foreach ($result_args as $val) {
            if( is_null ( $result_minus ) )
            {
                $result_minus = $val;
            }
            else
            {
                $result_minus -= $val;
            }
        }
        return $result_minus;
    }
    echo fnc_args_minus(10,5,2);*/
    // Output: 120

    // function factorial($num) 
    // {
    //     if($num <= 1)
    //     {
    //     return 1;
    //     } 
    //     else 
    //     {
    //       return $num * factorial($num - 1);//5,4,3,2,1반복
    //     }
    // }
    // echo factorial(5);
    
    
    


?>