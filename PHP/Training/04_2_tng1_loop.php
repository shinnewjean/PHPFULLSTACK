<?php
//1. 반복문을 이용해서 아래와 같이 출력해 주세요.
//갯수는 내가 입력한 갯수만큼
/*
// 1. 원본
$endNum = 10;
$star = '*';
$blank = ' ';
for ($num1=1; $num1 <= $endNum ; $num1++) { 
    for ($num2=1; $num2 <= $num1 ; $num2++) 
        { 
            echo $star;
        }
    echo "\n";
}

// 2.트리
echo str_repeat($blank, $endNum-1)."★\n";
for ($i=1; $i <= $endNum ; $i++) { 
    echo str_repeat($blank, $endNum-$i);
    echo str_repeat("O", $i);
    echo str_repeat("O", $i)."\n";
}

// 3. 위아래 역방향
for ($num1=$endNum; $num1 > 0 ; $num1--) { 
    for ($num2=1; $num2 <= $num1 ; $num2++) 
        { 
            echo $star;
        }
    echo "\n";
}
*/
// 4.
for ($num1=$endNum; $num1 > 0 ; $num1--) { 
    for ($num2=1; $num2 <= $num1 ; $num2++) {
        for ($num2=1; $num2 <= $num1 ; $num2++) 
        { 
            echo $blank;
        }
    echo $star;
    }
    echo "\n";
}
?>