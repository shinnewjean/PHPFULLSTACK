<?php
//여러분 다 퍼블릭으로 만드세요
//class car
//{
    /*
    $car_name : 차이름을 저장하는 멤버변수
    $car_color : 차 색깔을 저장하는 멤버변수

    method명 : car_make
    parameter : 
            string $param_name
            string $param_color
    기능 : 멤버 변수에 값을 셋팅
    
    method명 : car_out
    parameter : 없음
    기능 : 자동차 이름과 색깔을 출력
        (형식 : $car_color."색".$car_name)
    */
//}

//1)
    $arr_carName = array("렉서스" , "아벤타도르" ,"우라칸");
    $arr_carColor = array("빨강" , "노랑" , "초록" , "황금");
    $carName = $arr_carName[rand(0,count($arr_carName)-1)];
    $carColor = $arr_carColor[rand(0,count($arr_carColor)-1)];
    class Car
    {
        public $car_name;
        public $car_color;

        public function car_make($param_name,$param_color)
        {
            $this->car_name = $param_name;
            $this->car_color = $param_color;
        }

        public function car_out()
        {

            echo $this->car_color."색 ".$this->car_name;
        }
    }

    $obj_car = new Car;
    $obj_car -> car_make($carName,$carColor);
    $obj_car -> car_out();



?>