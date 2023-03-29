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
    $url = "https://www.google.com/search?q=%ED%99%94%EC%9D%B4%ED%8C%85&sxsrf=APwXEdfScgGZN0T2o1FDw5KDWwI3MAO7CA%3A1680080753799&source=hp&ei=cf8jZMT6IcSy2roP19yu4AE&iflsig=AOEireoAAAAAZCQNgc2v3zdyRl2oyEIGO81a-4L8lx5J&ved=0ahUKEwiE94nE5ID-AhVEmVYBHVeuCxwQ4dUDCAo&oq=%ED%99%94%EC%9D%B4%ED%8C%85&gs_lcp=Cgdnd3Mtd2l6EAMyCwgAEIAEELEDEIMBMgsIABCABBCxAxCDATILCAAQgAQQsQMQgwEyCwgAEIAEELEDEIMBMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgcIIxDqAhAnOgQIIxAnOhEILhCABBCxAxCDARDHARDRAzoECAAQAzoLCC4QgAQQsQMQgwE6CAguEIAEELEDOgcIABCKBRBDOgsILhCABBCxAxDUAjoNCC4QigUQxwEQ0QMQQzoECC4QA1DaD1iHGmCcHGgDcAB4AoABcYgBwgaSAQMxLjeYAQCgAQGwAQo&sclient=gws-wiz&uact=5";

    $arr_url = parse_url($url);
    //var_dump($arr_url);

    parse_str($arr_url["query"],$arr_parse);

    var_dump($arr_parse);

?>
