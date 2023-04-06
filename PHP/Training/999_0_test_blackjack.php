<?php
		$arr_cardNum = array( "A" ,"2" ,"3" ,"4" ,"5" ,"6" ,"7" ,"8" ,"9" ,"10" ,"J" ,"Q" ,"K");
		$arr_cardShape = array("♠" ,"♣" ,"♦" ,"♥");
        // $arr_card = array();
        // $user
        // $dealer

        foreach ( $arr_cardShape as $shape )
        {
            foreach ( $arr_cardNum as $num ) 
            {
                $arr_card[]= $shape.$num; //$arr_card배열에 $shape.$num를 넣는다
            }
        }
        shuffle($arr_card);
        // array_reverse($arr_card);
        // print_r($arr_card); //카드확인

        











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