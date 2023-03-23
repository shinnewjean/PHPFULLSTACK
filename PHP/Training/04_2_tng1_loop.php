<?php
//1. 반복문을 이용해서 아래와 같이 출력해 주세요.
//갯수는 내가 입력한 갯수만큼
$star = "*";
$endNum = 10 ;
for ($num1=1; $num1 <= $endNum ; $num1++) { 
    for ($num2=1; $num2 <= $num1 ; $num2++) 
        { 
            echo $star;
        }
    echo "\n";
}

echo str_repeat(" ", $endNum-1)."★\n";
for ($i=1; $i <= $endNum ; $i++) { 
    echo str_repeat(" ", $endNum-$i);
    echo str_repeat("O", $i);
    echo str_repeat("O", $i)."\n";
}
for ($num1=$endNum; $num1 > 0 ; $num1--) { 
    for ($num2=1; $num2 <= $num1 ; $num2++) 
        { 
            echo $star;
        }
    echo "\n";
}
?>