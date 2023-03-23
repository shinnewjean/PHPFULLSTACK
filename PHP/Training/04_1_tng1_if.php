<?php

// 1.if로 만들어 주세요.
// 성적
// 범위 :
//     100점 : A+
//     90~99 : A
//     80~90 : B
//     70~80 : C
//     60~70 : D
//     60 미만 : F

// 출력 문구 : 당신의 점수는 xxx점 입니다. <등급>

// $score = 105;
// $text1 = "당신의 점수는";
// $text2 = "점 입니다.";
        // if( $score === 100 ){
        //     echo "$text1 $score$text2"."<A+>";
        // }
        // else if ( $score >= 90 && $score < 100 ){
        //     echo "당신의 점수는 ".$score."점 입니다. <A>";
        // }
        // else if ( $score >= 80 && $score < 90 ){
        //     echo "당신의 점수는 ".$score."점 입니다. <B>";
        // }
        // else if ( $score >= 70 && $score < 80 ){
        //     echo "당신의 점수는 ".$score."점 입니다. <C>";
        // }
        // else if ( $score >= 60 && $score < 70 ){
        //     echo "당신의 점수는 ".$score."점 입니다. <D>";
        // }
        // else {
        //     echo "당신의 점수는 ".$score."점 바보입니다. <F> ";
        // }

        
//한꺼번에 바꾸기 CTRL + SHIFT + L OSUSUMEDESU!!

// if( $score === 100 ) {$an='A+';}
// else if( $score >= 90 && $score < 100 ) {$an='A';}
// else if( $score >= 80 && $score < 90 ) {$an='B';}
// else if( $score >= 70 && $score < 80 ) {$an='C';}
// else if( $score >= 60 && $score < 70 ) {$an='D';}
// else{$an='바보...F';}
// echo $an."! ".$text1.$score.$text2;


// 0~100 입력 받았을때, "당신의 점수는 XXX점입니다. 등급" 라고 출력하고,
// 그외의 값일 경우 "잘못된 값을 입력했습니다." 라고 출력해 주세요
// if( 0 <= $score && $score <= 100 ):if( $score === 100 ) {$an='A+';}
// else if( $score >= 90 && $score < 100 ) {$an='A';}
// else if( $score >= 80 && $score < 90 ) {$an='B';}
// else if( $score >= 70 && $score < 80 ) {$an='C';}
// else if( $score >= 60 && $score < 70 ) {$an='D';}
// else{$an='바보...F';}
// echo $an."! ".$text1.$score.$text2;
// else:echo "ERROR!!! 잘못된 값을 입력하셨슴둥!!!";endif;

// if( 0 > $score && $score > 100 )
//     {echo "ERROR!!! 잘못된 값을 입력하셨슴둥!!!";}
// else
//     {if( $score === 100 ) {$an='A+';}
//     else if( $score >= 90 && $score < 100 ) {$an='A';}
//     else if( $score >= 80 && $score < 90 ) {$an='B';}
//     else if( $score >= 70 && $score < 80 ) {$an='C';}
//     else if( $score >= 60 && $score < 70 ) {$an='D';}
//     else{$an='바보...F';}
// echo $an."! ".$text1.$score.$text2;}

// if ( 0 <= $score && $score <= 100 ){echo $an."! ".$text1.$score.$text2;}
// else{echo "ERROR!!! 잘못된 값을 입력하셨슴둥!!!";}



?>
