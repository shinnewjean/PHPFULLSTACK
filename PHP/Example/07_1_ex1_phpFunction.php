<?php

// PHP함수

// 수학 함수 p.129
// min , max , floor , round , ceil , rand

    // echo floor(4.9),"\n";
    // echo round(4.5)."\n";
    // echo ceil(4.1),"\n";
    // echo min(array(3,4,6,1,3)),"\n";
    // echo max(array(3,4,6,1,3)),"\n";
    // echo rand(0,2),"\n";

// 날짜 함수 p.131,132
    // echo time(),"\n"; //Return Unix timestamp 
    // echo date('Y-m-d H:i:s'),"_정답!!","\n";
    // echo date('y-m-d ga:i:s'),"_정답!!","\n";
    // echo date('Y-M-D H:M:S'),"\n";
    // echo date('y-m-d h:m:s'),"\n";

//echo 1000000000000000000; //p.134 64비트값 셋팅으로 거의 가능

// 난수 함수(rand number) =mt_rand p.139
    // echo mt_rand(0,3); 

// 운영체제 / PHP버전상수 : 함수가아닌 상수값
    // echo PHP_OS,"\n";
    // echo PHP_VERSION;

// GLOBALS 배열 //PHP가 따로 글로벌 변수로 만들어주는것, 겹치는 네이밍 불가능
    //var_dump($GLOBALS);
    //$_get;

// PHP정보제공 함수 : phpinfo()
    //var_dump (phpinfo());
    //phpinfo();

// 정의 함수 : define(string name(상수명),mixed value) p.145
// 상수선언(명명규칙 : 상수명은 꼭 대문자로 작성) WHY? 개발자들간의 룰!! 
// 상수 왜 쓸까? 실수를 줄이기 위해서 (코드 길이가 짧아지고, 함수를 수정하는 것만으로 기능을 개선,오류를 쉽게 고칠수있다.)
    define("INT_ONE",1);
    echo INT_ONE;

?>