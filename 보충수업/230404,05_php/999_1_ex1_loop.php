<?php
/********************************************** 
파일명 : 
시스템명 : 
이력
    v001 : new - d1111
    v002 : fnc_print_str
***********************************************/



//1. while + if가 조합된거
    // $i = 0;
    // while ($i <= 4)
    // {
    //     ++$i;
    //     if ( $i === 0 ) 
    //     {
    //         echo $i."입니다.";
    //     } 
    //     else if( $i === 4 ) 
    //     {
    //         echo $i."입니다.";
    //     }
    //     // ++$i;
    // }

    //     //my exam
    //     echo "-----------------------------------------------------------------\n";
    //     $a = 0;
    //         while ($a <= 5) {
    //             echo ++$a."\n";
    //         }
    //     echo "-----------------------------------------------------------------\n";
    //     $b = 0;
    //         while ($b <= 5) {
    //             echo $b++."\n";
    //         }
    //         echo "-----------------------------------------------------------------\n";


//foreach + if 조합
    // $arr_ass = array("a" => 1   ,"b" => 2 ,"c" => 3); //사이즈가 3인 어레이 /요소의 갯수가 3 /사이즈 3의 배열
    // // foreach? 배열의 사이즈 만큼 돌아가는 반복문
    // foreach ($arr_ass as $key => $val) 
    // {
    //     // echo "$key : $val\n";
    //     if( $key === "c" || $val === 2 )
    //     {
    //         echo "if";
    //     }
    // }

// 이중루프
    // for( $i = 2; $i <= 9; $i++ )
    // {
    //     echo $i."단\n";
    //     for ( $a = 1; $a <= 10; $a++ ) 
    //     {
    //         $result = $i * $a;
    //         echo $result."\n";
    //     }
    // }

    // $a=1;
    // while ($a <= 10) 
    //     {
    //         $result = 2 * $a;
    //         echo $result;
    //     }

// 1~100 숫자중에 짝수의 합을 구해주세요

    // $a=1;
    // $max=200;
    // $zzac=2;
    // $hol=1;
    // $result=0;

    // while ($a <= $max) 
    // {
    //     if ($a % $hol === 0 ) {
    //         $result = $rcesult + $a;
    //     }
    //     $a++;
    // }
    // echo $result;

// 연상배열
    // $arr_test = 
    //     array(
    //         1
    //         ,2
    //         ,
    //             array(
    //                 "info_a" => 3
    //                 ,"info_b" => 4
    //                 ,"info_arr" => 
    //                     array(
    //                         "f_1" => 5
    //                         ,"f_2" => 7
    //                     )
    //             )
    //     );

    // echo $arr_test[2]["info_arr"]["f_1"];

    // // foreach ($arr_test as $key => $val) {
    // //     $val === 3 || 7;
    // //     echo $key." ".$val;
    // // }
    // // if (condition) {
    // //     # code...
    // // }

// 함수
    //함수명      : fnc_sum
    // 기능       : 파라미터를 더한값을 리턴
    // 파라미터   : INT $param_a
    //              IINT $param_b
    // 리턴값     : INT $sum

    // function fnc_sum($param_a,$param_b)
    // {
    //     $sum=$param_a+$param_b;
    //     return $sum;
    // }
    // echo fnc_sum(1,2);

// 가변함수 가변파라미터
    // function fnc_sum2(...$param_numbers)
    // {
    //     $sum=$param_numbers[0]+$param_numbers[1];
    //     return $sum;
    // }
    // echo fnc_sum2(1,2);

    // function fnc_sum2(...$param_numbers)
    // {
    //     // $sum = 0;
    //     // foreach ($param_numbers as $val) {
    //     //     $sum += $val;
    //     // }
    //     return array_sum($param_numbers);
    // }
    // echo fnc_sum2(1,2,3,4,5,6,7,8,9,10);

//글로벌 함수
    // function fnc_global()
    // {
    //     global $global_i;
    //     static $static_i = 0;
    //     $global_i = 0;
    // }
    // // $global_i = 5; //출력 = 0
    // fnc_global();
    // $global_i = 5; //출력 = 5
    // echo $global_i;

    // function fnc_static()
    // {
    //     static $static_i = 0;
    //     echo $static_i;
    //     $static_i++;
    // }
    // fnc_static();
    // fnc_static();
    // fnc_static();
    // fnc_static();

    // function fnc_reference(&$param_str) //참조문 //$str이 &$param_str으로 되는부분??
    // {
    //     $param_str = "fnc_reference";
    // }
    // $str = "aaa";
    // fnc_reference($str);
    // echo $str;

    //별찍기 함수로 만들기
        // $INT = "엄훠 어딜보세요! ";
        // // function fnc_star($param_star) // v002 del
        // function fnc_star($param_num,$param_str = "*") // v002 add
        // {
        //     for ($a=0; $a < $param_num; $a++) 
        //     { 
        //         // echo"*"; // v002 del 별찍기
        //         echo $GLOBALS['INT']; // v002 add
        //         echo $param_str;
        //         // global $INT;
        //         // echo $INT;
        //     }
        //     echo"\n";
        // };
        // fnc_star(1);
        // fnc_star(2);
        // fnc_star(3);
        // fnc_star(4);
        // fnc_star(5);
        
        // while
            // for ($b=0; $b < $max; $b++) 
            // { 
            //     for ($a=0; $a < $max; $a++) 
            //     { 
            //         echo"*";
            //     }
            //     echo"\n";
            // }

//레퍼런스 함수 복습
    
    // function fnc_reference2(&$param_str) // 4. $str(aaa)가 &$param_str이 됨
    // {
    //     echo "2번 : $param_str \n"; // 5. 두번째 출력 : 2번 aaa
    //     $param_str = "fnc_reference2에서 값 변경"; // 6. $param_st4 출력 : 3번 변경된 출력값 에코
    // }
    // echo "1번 : $str \n"; // 2. 첫번째 출력 : 1번 aaa
    // fnc_reference2($str); // 3. 함수에 $str(aaa)을 실행 -> 위의 함수로 이동
    // echo "4번 : $str \n"; // 8. 네번째 출력 : 4번 변경된 출력값 에코

    //정답         1번 : aaa
                // 2번 : aaa
                // 3번 : fnc_reference2에서 값 변경
                // 4번 : fnc_reference2에서 값 변경

//클래스
    //--------------------class-----------------------
    // class Food
    // {
    //     // 접근 제어 지시자
    //     // public   : 어디서든 (class밖에서도) 접근이 가능
    //     // private  : 해당 class내에서만 접근 가능
    //     // protected: class 자기 자신과 상속 class 내에서만 접근가능

    //     //멤버 변수
    //     protected $str_name; //상속 받기 위해 public에서 protected변경 
    //     protected $int_price;


    //     //메소드 _class내에 있는 함수들
    //     public function __construct( $param_name, $param_price )
    //     {
    //         $this->str_name = $param_name;
    //         $this->int_price = $param_price;
    //     }
        
    //     public function fnc_print_food()
    //     {
    //         $str = $this->str_name." : ".$this->int_price."원\n";
    //         echo $str;
    //     }

    //     public function fnc_print_price($param_change_price)
    //     {
    //         $this->int_price = $param_change_price;
    //     }
    // }

        // $obj_food = new Food("탕수육",10000);
        // $obj_food -> fnc_print_food();

            //Food class의 멤버 변수 $int_price의 값을 12000 바꾸어 주세요.
                // echo "\n------------------변경후----------------------\n\n";
                // $tangPrice = 10000000;

                // $obj_food = new Food("탕수육",$tangPrice);
                // $obj_food -> fnc_print_food();

                // $obj_food = new Food("탕수육",10000); // 리셋
                
                // $obj_food -> fnc_print_price(++$tangPrice);
                // $obj_food -> fnc_print_food();


    // 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아 사용할수있다.
    // class koreanFood extends Food //부모클래스에 있는 객체들(멤버,메소드)등등을 사용할수있다.
    // {
    //     protected $side_dish;

    //     public function __construct( $param_name ,$param_price ,$param_side_dish)
    //     {
    //         $this->str_name = $param_name;
    //         $this->int_price = $param_price;
    //         $this->side_dish = $param_side_dish;
    //     }

    //     // 오버라이팅 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의
    //     public function fnc_print_food()
    //     {
    //         // $str = $this->str_name." : ".$this->int_price."원\n"."반찬 : ".$this->side_dish."\n";
            
    //         // 1)
    //         parent :: fnc_print_food();// 부모에게 있는 값을 출력
    //         $str ="반찬 : ".$this->side_dish."\n";

    //         echo $str;
    //     }

    // }

    // $obj_korean_food = new koreanFood( "치킨" ,20000 ,"치킨무" );
    // $obj_korean_food -> fnc_print_food();


//185p.10. test
class People
{
    protected $name;

    public function set_name( $param_name )
    {
        $this->name = $param_name;
    }
    public function people_print()
    {

        echo "이름 : $this->name\n";
    }
}
class Student extends People
{
    protected $id;

    public function set_id( $param_id )
    {
        $this->id = $param_id;
    }
    public function student_print()
    {
        parent :: people_print();
        echo "아이디 : $this->id \n";
    }
}

    $obj_student = new Student();
    $obj_student -> set_name("신유진");
    $obj_student -> set_id("shinnewjean");
    $obj_student -> student_print();
