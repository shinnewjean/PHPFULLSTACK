<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~10는 그 숫자대로 점수
// 4-2. K·Q·J는 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 스페이드>크로버>다이아>하트 순
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한번 사용한 카드는 다시 쓸 수 없다.
?>

<?php
// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

//--------------설정
// class Blackjack
// {
	
// }


$card = array("A","2","3","4","5","6","7","8","9","10","J","Q","K");
$shape = array("♠","♣","♦","♥");
// echo array_rand($card);
shuffle($card); //배열 랜덤 정렬( shuffle, array_rand )
shuffle($shape);
// // echo $shape[0].$card[0]; //카드 한장뽑기
// echo $shape[0].$card[0].$shape[1].$card[1];
$user = $shape[0].$card[0].$shape[1].$card[1];
shuffle($card);
shuffle($shape);
$dealer = $shape[0].$card[0].$shape[1].$card[1];
echo "user : ".$user."\n";
echo "dealer : ".$dealer."\n";
//특수문자 자르기
$str_user_num = mb_substr($user,-1,1);
$str_dealer_num = mb_substr($dealer,1,1);

if ($str_user_num>$str_dealer_num)
{
	echo "user_num WIN";
}
else {
	echo "dealer_num WIN";
}

class Blackjack
{
	public $cardNum = array("A","2","3","4","5","6","7","8","9","10","J","Q","K");
	public $cardShape = array("♠","♣","♦","♥");
	public $card = array();

	// $card = $cardNum.$cardShape
	// print_r ($card);

	
	function card (&$card,$cardNum,$cardShape)
	{ 
		$card = $cardNum.$cardShape;
		echo $card;

	}

}



echo "\n\n--------------------------------------------\n\n";



// 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
$userInt = 0;
if ($userInt === 1)
{
	echo "카드더받기";
}
elseif ($userInt === 2) {
	echo "카드비교";
}
elseif ($userInt === 0) {
	echo "게임종료";
}


// 결과값 문구
$cardsum = 4;
if ( $cardsum > 21 ) 
{
	echo "\n----------YOU LOSE!!----------\n";
	echo "\n당신은 ".$cardsum."점 이상으로 패배입니다.\n";
	echo "\n------------------------------\n";
}
else if ( $cardsum === 21 )
{
	echo "\n**********YOU WIN!!**********\n";
	echo "\n당신은 ".$cardsum."점으로 승리입니다.\n";
	echo "\n*****************************\n";
}
else if ( $cardsum < 21 and $cardsum > 0 )
{
	echo "\n카드를 더 모아주세요.\n";
}

