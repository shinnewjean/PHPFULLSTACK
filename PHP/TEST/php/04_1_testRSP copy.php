<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- htdos -->
    <h1>가위바위보 게임을 시작하겠습니다.(거절금지)</h1>

    <form name="rspGame" method="get">
        <input type="image" name="button" src="IMG/0.jpg">
        <input type="image" name="button" src="IMG/1.jpg">
        <input type="image" name="button" src="IMG/2.jpg">
    </form>
</body>
</html>

<?php
$rsp1 = rand(0,2);
$r1 = "rock";
$s1 = "scissors";
$p1 = "paper";
$name1 = "ME";
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

echo "  /   ";
$rsp2 = rand(0,2);
$name2 = "COM";
if( $rsp2 === 0 ){
echo $name2.$col.$r1;
}
else if ( $rsp2 === 1 ){
    echo $name2.$col.$s1;
}
else {
    echo $name2.$col.$p1;
}
echo "<br><br>";
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