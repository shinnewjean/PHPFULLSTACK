<?php
// 1.switch로 만들어 주세요.
// 성적
// 범위 :
//     100점 : A+
//     90~99 : A
//     80~90 : B
//     70~80 : C
//     60~70 : D
//     60 미만 : F

// 출력 문구 : 당신의 점수는 xxx점 입니다. <등급>

$score = 77;
$text1 = "당신의 점수는";
$text2 = "점 입니다.";


switch ($score) {
    case $score > 100:
        echo "ERROR!!! 잘못된 값을 입력하셨슴둥!!!";
        break;

    case 100 :
        echo "A+! ".$text1.$score.$text2;
        break;

    case $score >= 90  && $score <= 100 :
        echo "A! ".$text1.$score.$text2;
        break;

    case 80 <=$score  && $score < 90 :
        echo "B! ".$text1.$score.$text2;
        break;
        
    case 77==$score:
        echo "럭키! ".$text1.$score.$text2;
        break;  
        
    case 70 <=$score  && $score < 80 :
        echo "C! ".$text1.$score.$text2;
        break;


    case 60 <=$score  && $score < 70 :
        echo "D! ".$text1.$score.$text2;
        break;

    case $score < 60 && $score > 0:
        echo "F! ".$text1.$score.$text2;
        break;

    default:
        echo "바보임둥..";
        break;
}









?>