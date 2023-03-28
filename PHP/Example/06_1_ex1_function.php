<?php
//함수란? 특정한 목적을 수행하기 위해 설계된 코드 집합
/*function 변수명(매개변수)
    {}*/

//함수를 사용하는 이유 : 코드의 재사용성, 가독성
    //변수 더하기
        /*$num1 = 1;
        $num2 = 2;
        $sum = $num1 + $num2;
        echo $sum;*/
        
        //a = 32;
        //$b = 2;

// function변수명(매개변수)_호출하기전까지 실행되지 않음
    /*function fnc_add ($int_a,$int_b) 
    {
        $sum = $int_a + $int_b;

        return $sum;
    }
// return값을 받으면 좋은점 : 수정에 용이하다

// fnc_add 함수를 호출_ 실행
    $result_add = fnc_add(5,9);
    echo $result_add;*/

// test!!
    /*function outputHello() {
        echo "Hello World!";
    }

    if (10>5) {
        outputHello();
    } else {
        echo "Bye World";
    }*/

// 가변 파라미터 함수
/*    function fnc_args_add() //파라미터 공백
    {
        $args = func_get_args(); // 가변 파라미터 습득 /두번째실행
        $sum = 0; //더하기 결과 저장 변수/세번째

        //루프 : 더하기 실행
        foreach ($args as $val) {//네번째실행/배열 한줄씩 실행
            $sum += $val;//다섯번째
        }

        return $sum;
    }

    echo fnc_args_add (1,2,3,4); //첫번째실행 호출값
*/

// 재귀함수(Recursive function)
    function rcc( $param_a )
    {
        if( $param_a ===1 )
        {
            return 1;
        }
        return $param_a * rcc( $param_a - 1);
    }

    echo rcc(3)."\n";

    //Test!!
    function fibonacci($n) {
        if($n <= 1) {
            return $n;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2); //fi6+fi5
        }
        }
        
      echo fibonacci(7); // Output: 13








?>