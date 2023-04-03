<?php

// CLASS : 비슷한 함수들이 모여있는 집합
// 개발자들 끼리의 약속 : 첫글자는 대문자로 합시다.
    class Student
    {
        // 클레스 멤버 변수
            // 접근제어 지시자(public,private,protected)
            public $std_name; //어디서든 접근가능
            //private : 외부의 접근 막기
            private $std_id; // Student class내에서만 접근가능
            protected $std_age; // 자신과, 상속 Class 내에서만 접근 가능
            // 접근제어 지시자 : public, private, protected
        
        // Class 안에 있는 function을 method라고 부릅니다
        public function print_student( $param_std_name, $param_std_age )
        {
            $result_name = "이름 : ".$param_std_name;
            $result_age = "나이 : ".$param_std_age."세";
            echo $result_name;
            echo "\n";
            echo $result_age;
        }

	    // private 객체에 접근하기위해 getter와 setter 생성
        public function set_std_id($param_id)
        {
            // this 포인터 : class 자기 자신을 가르키고 있음
            $this->std_id = $param_id;
        }
    
        public function get_std_id()
        {
            return $this->std_id;
        }
    }
    
    //print_Student("신유진",27)

    // class를 초기화
    // class 선언
    $obj_Student = new Student;
    // class의 method를 호출
    // $obj_Student->print_Student("신유진",27);
    // class의 멤버변수 사용방법
    // $obj_Student->std_name = "금쪽이";
    // echo $obj_Student->std_name;

    // 지시자가 private이기 때문에 접근 권한이 없다.
    // $obj_Student->$std_id = "갑돌이id";

    //getter,setter로 private 객체에 접근
    $obj_Student -> set_std_id("유진이id");
    echo $obj_Student -> get_std_id();


////////////
// 생성자(constructor)
class food
{
	private $food_name;

	// 생성자
	public function __construct( $parama_food_name )
	{
		$this->food_name = $parama_food_name;
	}

	public function print_food_name()
	{
		echo $this->food_name;
	}
}

$obj_food = new food( "탕수육" );
$obj_food->print_food_name();

?>

<?php
/*
// chat gpt : example
class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
    }

    public function getName() {
    return $this->name;
    }

    public function getEmail() {
    return $this->email;
    }

    public function setEmail($email) {
    $this->email = $email;
    }

    public function displayInfo() {
    echo "Name: " . $this->name . "<br>";
    echo "Email: " . $this->email . "<br>";
    }
}

// 사용 예시
$user1 = new User("John Doe", "johndoe@example.com");
$user1->displayInfo();
$user1->setEmail("johndoe2@example.com");
$user1->displayInfo();
*/
?>

