<?php
//1.
    echo "점심메뉴\n";
    echo "탕수육 8,000\n";
    echo "짜장면 6,000\n";
    echo "짬뽕 6,000\n\n";

//2.
    print "점심메뉴
탕수육 8,000
짜장면 6,000
짬뽕 6,000\n\n";

//3.
    echo "점심메뉴\n탕수육 8,000\n짜장면 8,000\n짬뽕 8,000\n\n";

//4.
    $lunchmenu="점심메뉴\n";
    $lunchmenu_1="탕수육 8,000\n";
    $lunchmenu_2="짜장면 6,000\n";
    $lunchmenu_3="짬뽕 6,000\n\n";
    echo $lunchmenu;
    echo $lunchmenu_1;
    echo $lunchmenu_2;
    echo $lunchmenu_3;

//5.
$lunchmenu="점심메뉴\n";
$lunchmenu_1="탕수육 8,000\n";
$lunchmenu_2="짜장면 6,000\n";
$lunchmenu_3="짬뽕 6,000\n";
$blank = " ";
$line = "\n";
$price_8000 = "8,000";


echo "점심메뉴".$line;
echo $lunchmenu_1.$blank.$price_8000.$line;
echo $lunchmenu_2;
echo $lunchmenu_3;
?>