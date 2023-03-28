<?php 
    //음식종류 5개 이상을 배열로 만들어주세요.
    //array $food에서 무작위로 값을 출력해 주세요.
    /*$food = array("중식" , "일식" , "한식" , "패스트푸드" , "음료" , "인도음식" , "태국음식" , "베트남음식");
    $randF = rand(0,7);

    print $food[$randF]."\n"; 
    echo $food[2];*/
    /* ' , " 의 차이점 : 백엔드 언어의 문자열은  " 경우가 좋습니다. 기호의 경우 ' 가 좋습니다.
    print, echo 사용의 차이점 : print는 반환값이있고 한개의 인수만 사용, echo는 반환값이없음 한개이상 문자열 출력 가능.
            .결과_echo의 속도가 상대적으로 빠름*/

    /*연상배열 문제
    키는 요리명, 값은 주재료 하나로 이루어진 배열을 만들어주세요.(배열 길이는 4)*/
    /*$food = array("중식" , "일식" , "한식" , "패스트푸드" , "음료" , "인도음식" , "태국음식" , "베트남음식");
    $food_arr_ass = array("중식"=>"마라", "일식"=>"스시" , "한식"=>"국밥", "패스트푸드"=>"빵" , "음료"=>"제로콜라");
    // $food_arr_ass = array("중식"=>echo $chiFood[rand(0,4)];, "일식"=>"스시" , "한식"=>"국밥", "패스트푸드"=>"빵" , "음료"=>"제로콜라");
    $chiFood = array("마라탕" , "마라샹궈" , "짜장" , "짬뽕" , "유린기");
    echo $food_arr_ass[$food[rand(0,4)]]."\n";
    // echo $food_arr_ass[1];
    var_dump($food_arr_ass);*/

    //키:김치원소를 삭제해 주세요
    /*$arr_ass_del = array("된찌" => "파"
                        , "볶밥" => "양파" 
                        , "김치" => "마늘" 
                        , "비빔" => "침기름");*/
    /*unset($arr_ass_del["김치"]);
    echo $arr_ass_del["김치"]."\n";
    print_r($arr_ass_del);*/

    // foreach문을 이용해서 키가 "삭제"인 요소를 제거해 주세요.
    $arr_ass_foreach = array("된찌" => "파"
                        , "볶밥" => "양파" 
                        , "삭제" => "값값"
                        , "김치" => "마늘" 
                        , "비빔" => "침기름");

    foreach ($arr_ass_foreach as $menu => $i)
    {
        if ($menu === "삭제"){
            unset ($arr_ass_foreach[$menu]);
        }
        else {
            echo $menu." : ".$i."\n";
        }
    }
    // print_r($arr_ass_foreach);
?>