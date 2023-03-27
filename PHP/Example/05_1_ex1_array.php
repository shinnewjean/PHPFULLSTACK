<?php 
//배열

/*// 변수가 주택느낌이면 배열은 아파트 느낌.
    $week1 = array("sun" , "mon" , "tue" , "wed");
    //print $week1[0];

    $sun = "Sun";
    $mon = "Mon";
    $tue = "Tue";
    $w = "Wed";
    $t = "목";
    $f = "금";
    $week2 = array($week1[1] , $week1[3] , $week1[0] , $week1[2]);
    //echo $week2[2];
    print_r($week2);*/

//멀티타입 배열
    /*$arr_mult_type = array ("aaa" , 1 , 3.14 , 'a');
    //구조를 확인하는 함수
    var_dump($arr_mult_type);
    print_r($arr_mult_type);*/
    //현업 모두 쌍따옴표 " 사용, 
    //$str 문자열
    //$int 정수열

//★연상 배열
    /*$week1 = array("값1" , "값2" , "값3" , "값4");
    print $week1[키]];
    키를 지정해주는 배열, key 컬럼명 값 데이터베이스 값*/
    /*$arr_ass = array("key1" => "val1"
                    ,"key2" => "val2");
    echo $arr_ass["key1"];*/

//다차원 배열 차원에 맞게 여러개의 키값
    //2차원배열
    /*$arr_temp = array(array(1,2,3,4)
                    ,array(5,6,7,8)
                    );
    echo $arr_temp[1][3];*/

    //3차원 배열
    /*$arr1_temp = array(array(1,2,3,4)
                    ,array(5,6,7,8)
                    ,array(
                        array(9,10,11,12)
                        )
                    );*/
    //echo $arr1_temp[2][0][1];
    /*$arr1_temp3 = $arr1_temp[2][0];
    var_dump ($arr1_temp3[1]);
    echo ($arr1_temp3[1]);*/
    /*$arr1_temp3 = $arr1_temp[2];
    $arr1_temp3 = array(array(9,10,11,12));
    var_dump ($arr1_temp3);*/

    //배열의 원소 삭제 : unset()_배열의 특정 원소를 삭제
    $arr_week = array("sun" , "mon" , "delete" , "tue" , "wed");
    unset($arr_week[2]);
    print_r($arr_week);
    

    

?>