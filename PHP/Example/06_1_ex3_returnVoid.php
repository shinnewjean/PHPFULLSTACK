<?php

//리턴(return)함수 : 리턴값이 있는
    //모든함수는 리턴값이 있어야함. 왜? 나를 호출한 곳으로 돌아가야되기때문 but. 예외는 있음
    function sum2($n1,$n2)
    {
        return $n1 + $n2 ; //
    }
    $result = sum2(3,6);
    echo $result;

//보이드(void)함수 : 리턴값이 없는, 리턴으로 종료하는 소스를 만들수있음= 깔끔한소스

    function sum($n1,$n2) //function 변수명(매개변수(파라미터_parameter)){}
    {
        echo $n1 + $n2 ; // 리턴이 필요없는 이유? 
    }

    sum(1,2); //echo 필요없음 
    sum(3,4);






?>