<?php

//DATABASE 연결하는법
//---->MySQL 함수를 사용 or PDO(PHP Data Objects)를 사용
//PDO가 상대적으로 쉽고 ,다양한 SQL 쿼리를 실행

//-----------------------------------고정--------------------------------------------------------
// $dbc = mysqli_connect("localhost","root","root506","employees","3306");
$db_host     = 'localhost'; // 호스트 이름
$db_user     = 'root';      // 사용자 이름
$db_password = 'root506';   // 비밀번호
$db_name     = 'employees'; // 데이터베이스 이름
$db_charset  = "utf8mb4";   // 캐릭터셋 charset
$db_dns      = "mysql:host=".$db_host.";dbname=".$db_name.";charset =".$db_charset;
$db_option   = 
array //!!외워주세요
(
    PDO::ATTR_EMULATE_PREPARES      => false // DB의 Prepared Statement 기능을 사용하도록 설정 (false : 데이터베이스의 값을 사용)기본 디폴트값 true
    ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION //PDO Exception을 Throws하도록 설정 (에러가 났을때 어떻게 쓰로우 해주는지 지정)
    ,PDO::ATTR_DEFAULT_FETCH_MODE   =>PDO::FETCH_ASSOC  //연상배열로 Fetch를 하도록 설정 (FETCH_ASSOC:연상배열) 
);
//-----------------------------------고정--------------------------------------------------------

//PDO class로 DB연동 //미리 변수로 값을 셋팅
$obj_conn = new PDO( $db_dns ,$db_user ,$db_password ,$db_option ); //PDO객체생성

/* SELECT예제
// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해주세요.
$sql = 
    // "
    // SELECT emp.emp_no,sal.salary,emp.birth_date
    // FROM employees emp
    //     INNER JOIN salaries sal
    //     ON emp.emp_no=sal.emp_no
    // WHERE (emp.emp_no = 10001
    // or emp.emp_no = 10002)
    // AND sal.to_date = DATE(99990101)
    // "

    //수정이 용이하게 쓰기
    " SELECT "
    ." sal.salary "
    ." ,emp.emp_no "
    ." ,emp.birth_date "
    ." FROM "
    ."  employees emp "
    ."  INNER JOIN salaries sal "
    ."      ON emp.emp_no=sal.emp_no "
    ." WHERE "
    ." ( "
    // ."    emp.emp_no = 10001 "
    ."    emp.emp_no = :emp_no1 "
    // ."    OR emp.emp_no = 10002 "
    ."    OR emp.emp_no = :emp_no2 "
    ."  ) "
    ." AND sal.to_date >= NOW() ";

$arr_prepare =
    array
    (
        ":emp_no1"=> 10001
        ,":emp_no2" => 10002
    );

$stmt = $obj_conn->prepare($sql); //Prepare Statement를 생성
$stmt -> execute($arr_prepare); //쿼리실행//연상배열로 넘겨주기
$result = $stmt->fetchAll(); //쿼리 결과를 fetch
var_dump($result);

//foreach로도 가능
//// $stmt
*/


// INSERT예제
$sql = 
//departments테이블
" INSERT INTO departments( "
." dept_no"
." ,dept_name"
." ) "
." VALUES( "
." :dept_no "
." ,:dept_name "
." ) ";

//프리페어 스테이트먼트
$arr_prepare = 
    array
    (
        ":dept_no" => "d011"
        ,":dept_name" => "PHP풀스택"
    );

$stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
$result = $stmt->execute( $arr_prepare ); /*= $stmt->fetchAll(); insert에서는 패치가 필요없음*/
$obj_conn->commit();
var_dump ($result);

//FRUSH PRIVILEGES; mariaDB에서 최신화 할때 명령어




$obj_conn = null; //DB파기 //DB닫기
?> 