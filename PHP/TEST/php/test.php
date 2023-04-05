<?php
$cardsum = 18;
if ( $cardsum > 21 ) 
{
	echo "\n----------YOU LOSE!!----------\n";
	echo "\n당신은 ".$cardsum."점 이상으로 패배입니다.\n";
	echo "\n------------------------------\n";
}
else if ( $cardsum = 21 )
{
	echo "\n**********YOU WIN!!**********\n";
	echo "\n당신은 ".$cardsum."점으로 승리입니다.\n";
	echo "\n*****************************\n";
}
else if ( $cardsum > 0 and $cardsum < 21 )
{
	echo "\n카드를 더 모아주세요.\n";
}