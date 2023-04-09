<?php
    // while(true) {
    //     echo '시작';
    //     print "\n";
    //     fscanf(STDIN, "%d\n", $input);        
    //     if($input === 0) {
    //         break;
    //     }
    //     echo $input;
    //     print "\n";
    // }
    // echo "끝!\n";

class Blackjack
{
    //기본설정(카드,선수_딜러,플레이어 설정)
    public $arr_cardNum = array( "A" ,"2" ,"3" ,"4" ,"5" ,"6" ,"7" ,"8" ,"9" ,"10" ,"J" ,"Q" ,"K");
    public $arr_cardShape = array("♠" ,"♣" ,"♦" ,"♥");
    public $arr_card = array(); //없어도되지만 가독성이 좋아진다
    public $player = array();
    public $dealer = array();
    public $INTbuttonnum = 1;
    public $playerNum = array();
    public $playerShape = array();
    public $dealerNum = array();
    public $dealerShape = array();
    //0_시작    1_스탠드 Stand(더이상 카드를 받지 않음)     2_히트 Hit(한 장 더)   3_버스트 Bust(21 초과)

    public function __construct()
	{
		$this->arr_card_num		= array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K" );
		$this->arr_card_shape	= array("♠" ,"♣" ,"♦" ,"♥");
	}

    //카드 52장 만들기
    public function card()
    {
        foreach ( $arr_cardShape as $shape ) //카드조합 만들기
        {
            foreach ( $arr_cardNum as $num ) 
            {
                $arr_card[]= $shape.$num; //$arr_card배열에 $shape.$num를 넣는다
            }
        }
        shuffle($arr_card); //카드 섞기
        // array_reverse($arr_card);
    } 

}

print Blackjack 




//기본(카드,선수_딜러,플레이어 설정)
		$arr_cardNum = array( "A" ,"2" ,"3" ,"4" ,"5" ,"6" ,"7" ,"8" ,"9" ,"10" ,"J" ,"Q" ,"K");
		$arr_cardShape = array("♠" ,"♣" ,"♦" ,"♥");
        $arr_card = array(); //없어도되지만 가독성이 좋아진다
        $player = array();
        $dealer = array();
        $INTbuttonnum = 1;
        $playerNum = array();
        $playerShape = array();
        $dealerNum = array();
        $dealerShape = array();

        public function __construct() //__construct() : 클래스의 생성자
        {
            
        }

        foreach ( $arr_cardShape as $shape ) //카드조합 만들기
        {
            foreach ( $arr_cardNum as $num ) 
            {
                $arr_card[]= $shape.$num; //$arr_card배열에 $shape.$num를 넣는다
            }
        }
        shuffle($arr_card); //카드 섞기
        // array_reverse($arr_card);

//시작시 카드 2개 주기
        //시작시 $player 카드가 0이면 2개의 카드 추가
        if ( count($player) === 0 )  // or과 for 로 플레이어랑 딜러카드 주기 가능한지 확인하기 
        {
            //array_push : 배열에 추가하는 함수     array_shift : 배열에서 빼는 함수
            array_push ($player ,array_shift($arr_card));
            array_push ($player ,array_shift($arr_card)); 
        }
        
        if ( count($dealer) === 0 ) 
        {
            array_push ($dealer ,array_shift($arr_card));
            array_push ($dealer ,array_shift($arr_card)); 
        }

//카드 비교하기
        //카드 모양과 숫자 분리하기
        foreach ($player as $value)
        {
            // substr([문자열], [시작위치], [길이]);
            $playerNum[] = mb_substr($value,1);
            $playerShape[] = mb_substr($value,0,1);
            $cardNum[] = mb_substr($value,1);
            $cardShape[] = mb_substr($value,0,1);
        }
        foreach ($dealer as $value)
        {
            $cardNum[] = mb_substr($value,1);
            $cardShape[] = mb_substr($value,0,1);
        }
        
        //카드가 2개 이상일때 모든 카드의 숫자를 더하기
        if ( count($playerNum) >= 2 ) 
        {
            
            foreach ( $playerNum as $playerNumSum)
            {
                if ( $playerNum === "A" ) // 카드가 A,J,Q,K일때 숫자값으로 변경 
                {
                    $playerNumSum = 1;
                }
                else if ( $playerNum === "J" || $playerNum === "Q" || $playerNum === "K" )
                {
                    $playerNumSum = 10;
                }
            }
            // else {
                
            // }

            $playerNumSum = 0; //sum의 초기값 셋팅
            foreach ($playerNum as $value) 
            {
                    $playerNumSum = $playerNumSum + $value;
            }
                echo $playerNumSum;
        } 
        // else 
        // {
        //         # code...
        // }
                
        //         if ($playerNum > $dealerNum) 
        //         {
        //                 # code...
        //             } 
        //             else 
        //             {
        //                     # code...
        //                 }
                        
                        
//********************확인란**************************
// echo "player : ";
// print_r($player);

// echo "playerNum : ";
// print_r($playerNum);

// echo "playerNum : ";
// print_r($playerShape);

// echo "dealer : ";
// print_r($dealer);

// echo "dealerNum : ";
// print_r($dealerNum);

// echo "playerNum : ";
// print_r($dealerShape);

// 배열의 길이 확인
// echo count($player);

// 배열 내용 확인
// print_r($player);

// 에코로 출력값 확인
// echo $playerNum;

// echo "player : ";
// print_r($player);

// echo "dealer : ";
// print_r($dealer);
//****************************************************
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
// class arrayCard
// {
// 	// member variable : 멤버변수 설정
// 	public $arr_cardNum; //private인 이유?
// 	public $arr_cardShape;
// 	public $arr_card; //

// 	// constructor : 멤버 변수의 값 설정
// 	public function __construct() //__construct() : 클래스의 생성자
// 	{
// 		$this->arr_cardNum = array( "A" ,"2" ,"3" ,"4" ,"5" ,"6" ,"7" ,"8" ,"9" ,"10" ,"J" ,"Q" ,"K");
// 		$this->arr_cardShape = array("♠" ,"♣" ,"♦" ,"♥");
// 		$this->arr_card;
// 	}

//     public function 
// }

// print_r (arrayCard);