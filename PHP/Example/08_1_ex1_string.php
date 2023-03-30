<?php

// 문자열 합치기 p.150
    // $str_1 ="aaa";
    // $str_2 ="bbb";
    // $str_3 ="ccc";

    // $str_sum = $str_1.$str_2.$str_3;

    // echo $str_sum;

// 대소문자 변환
    //$str_en = "abCd efgh";

    //소문자로 변환
        // echo strtolower($str_en)."\n";

    //대문자로 변환
        // echo strtoupper($str_en)."\n";

    //맨 앞 글자만 대문자로 변환, 나머지는 그대로
        // echo ucfirst($str_en)."\n";

    //각 단언의 맨 앞글자만 대문자로 변환
        // echo ucwords($str_en)."\n";

//URL관련 함수
    // $url = "https://www.google.com/search?q=%ED%99%94%EC%9D%B4%ED%8C%85&sxsrf=APwXEdfScgGZN0T2o1FDw5KDWwI3MAO7CA%3A1680080753799&source=hp&ei=cf8jZMT6IcSy2roP19yu4AE&iflsig=AOEireoAAAAAZCQNgc2v3zdyRl2oyEIGO81a-4L8lx5J&ved=0ahUKEwiE94nE5ID-AhVEmVYBHVeuCxwQ4dUDCAo&oq=%ED%99%94%EC%9D%B4%ED%8C%85&gs_lcp=Cgdnd3Mtd2l6EAMyCwgAEIAEELEDEIMBMgsIABCABBCxAxCDATILCAAQgAQQsQMQgwEyCwgAEIAEELEDEIMBMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgcIIxDqAhAnOgQIIxAnOhEILhCABBCxAxCDARDHARDRAzoECAAQAzoLCC4QgAQQsQMQgwE6CAguEIAEELEDOgcIABCKBRBDOgsILhCABBCxAxDUAjoNCC4QigUQxwEQ0QMQQzoECC4QA1DaD1iHGmCcHGgDcAB4AoABcYgBwgaSAQMxLjeYAQCgAQGwAQo&sclient=gws-wiz&uact=5";

    // $arr_url = parse_url($url);
    // //var_dump($arr_url);

    // parse_str($arr_url["query"],$arr_parse);

    // var_dump($arr_parse);

// 역순의 문자열 
    // $str_abcd = "가나다라"; //한글이 바이트가 크기때문에 문자열이 깨져서 나옵니다.
    // echo strrev($str_abcd);
    // $str_abcd = "abcd";
    // echo strrev($str_abcd);

// 문자열 나누기(자르기) p.156
    // $str_1 = "가나다라마";
    // echo substr($str_1,3,8)."\n"; //몇바이트로 자르겠느냐 => 한글은 1글자당 3바이트(멀티바이트 문자)
    // echo mb_substr($str_1,2,4)."\n"; //mb_(멀티바이트)를 붙이면 글자당으로 바뀔수있다
    // echo mb_substr($str_1,2,-1)."\n";
    // echo mb_substr($str_1,-2,1)."\n";

// tng)문자열 자르기로 "php입니다." 만 출력해주세요.
// $str_tng = "안녕하세요. PHP입니다.";
// echo strtolower(mb_substr($str_tng,-7,7))."\n";

// tng)문자열 자르기로 "세요. P" 만 출력해주세요.
// echo strtolower(mb_substr($str_tng,3,3)." ".mb_substr($str_tng,-7,1))."\n";

// 문자열 빈공간 지우기 p.157
    // $str_trim = "              a                 b               c               d               ";
    // $str_trim = "abcd\n";
    // echo trim($str_trim)."\n";
    // echo rtrim($str_trim)."\n";
    // echo ltrim($str_trim)."\n";

// 문자열의 길이를 구하는 함수 p.159
    // $str_len = "ab가나";
    // echo strlen($str_len)."\n";
    // echo mb_strlen($str_len)."\n";

// 문자열 포멧에 따라 출력하는 함수
    //printf("안녕하세요.%s입니다.%d","PHP",1234);
        // ex) 안녕하세요. ***님 환영합니다.
        //     ***= 상수나 함수로
            // define ( "WELCOM" , "HI! %s" );
            // printf ( WELCOME , "유진" );

// tng)기본 포맷 : ERROR(숫자) : xxx ERROR가 발생했습니다.
//      애러 번호 : 애러종류
            // 1 : 시스템
            // 2 : 로그인
            // 3 : 접속
    $error_base = "ERROR가 발생했습니다.";
    // define ("ERROR_MSG","ERROR(%d) : %s ERROR가 발생했습니다.");
    // define ("ERROR_MSG","ERROR(%d) : %s $error_base\n");
    // printf (ERROR_MSG, 1 , "시스템");
    // echo "\n";
    // printf (ERROR_MSG, 2 , "로그인");
    // echo "\n";
    // printf (ERROR_MSG, 3 , "접속");
    // echo "\n";

// 문자열을 분리하는 함수
    // $str_sscanf = "가나다라 50 abcd";
    // sscanf($str_sscanf, "%s %d %s" , $str_ko , $int_d , $str_en);
    // echo $str_ko , "\n " , $int_d , "\n " , $str_en , "\n ";

// 문자열을 반복해서 찍어주는 함수
    // echo str_repeat("가나",3);

// 문자열을 특정 문자열로 분리하는 함수
    // $str_expl = "홍길동,27세,남자,의적,조선";
    // $arr_expl = explode("," , $str_expl);
    // print_r($arr_expl);

// 배열을 특정 문자열로 합치는 함수 : implode()
    // $str_impl = implode("123" , $str_expl);
    // echo $str_impl;






?>