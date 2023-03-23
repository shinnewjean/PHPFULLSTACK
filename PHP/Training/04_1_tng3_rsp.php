<?php
    //echo rand(0,10); 0부터 10의 숫자를 랜덤으로 출력
    //1번 사람
    $rsp1 = rand(0,2);
    $r1 = "rock";
    $s1 = "scissors";
    $p1 = "paper";
    $name1 = "shin";
    $col = " : "; 
    if( $rsp1 === 0 ){
    echo $name1.$col.$r1;
    }
    else if ( $rsp1 === 1 ){
        echo $name1.$col.$s1;
    }
    else {
        echo $name1.$col.$p1;
    }
    //2번사람
    echo "     ";
    $rsp2 = rand(0,2);
    $name2 = "lee";
    if( $rsp2 === 0 ){
    echo $name2.$col.$r1;
    }
    else if ( $rsp2 === 1 ){
        echo $name2.$col.$s1;
    }
    else {
        echo $name2.$col.$p1;
    }
    //결과
    echo "\n\nResults : ";
    $win = " win!!";
    $lose = " lose!!";
    $draw = " draw!!";
    //  0주먹  1가위               1가위 2보                  2보 0주먹
    if(( $rsp1===0 && $rsp2===1 )||( $rsp1===1 && $rsp2===2 )||( $rsp1===2 && $rsp2===0 )){
    echo $name1.$win;
    }
    // 0주먹 2보                         1가위 0주먹                2보 1가위
    else if (( $rsp1===0 && $rsp2===2 )||( $rsp1===1 && $rsp2===0 )||( $rsp1===2 && $rsp2===1 )){
        echo $name2.$win;
    }
    else {
        echo $draw;
    }
?>