<?php

// 5월 2일 보강  PDO Class

// PDO(PHP Data Objects) 확장은 PHP에서 데이터베이스에 액세스하기 위한 가볍고 일관된 인터페이스를 정의

// 옵션을 배열로 만들어놓음
// 보통은 아래와 같이 3개정도
// $db_option = [
//     PDO::ATTR_EMULATE_PREPARES      => false //DB의 Prepared Statement 기능을 사용하도록 설정
//     ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION //PDO EXCEPTION을 TROWS하도록 설정
//     ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC //연상배열로 ferch 하도록 설정
// ];

$db_option = array(
    PDO::ATTR_EMULATE_PREPARES      => false //DB의 Prepared Statement 기능을 사용하도록 설정
                                            // Prepared statement(준비된 쿼리 / 여기서 statement는 query와 동의어로 봐도 무방함)
    ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION //PDO EXCEPTION(예외)을 TROWS하도록 설정(에러가 있어도 계속 돌아가게)
    ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC //연상배열로 ferch 하도록 설정
);

// 1. DB 접속
// $conn = new PDO( dns정보 : 어떤 데이터베이스를 이용하여할지, 유저, 비밀번호 ,(옵션));
// $conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4" , "root" , "root506" , $db_option );

// $sql = " SELECT * FROM board_info "; // 쿼리 작성

// $stmt = $conn->query( $sql ); // 해당 쿼리를 사용하여 DB요청하고, Statement객체를 받아옴
// $result = $stmt->fetchALL(); // Statement객체의 정보를 fetch해서 연상배열로 가져옴 // fetchAll(); : 결과를 배열로 한번에 전부 반환

// var_dump( $result );

// DB 파기
// $conn = null;



// 준비된 문(Prepared Statements)은 동일한(또는 유사한) SQL 문을 높은 효율성으로 반복 실행하는 데 사용되는 기능이다. 준비된 문은 기본적으로 아래와 같이 작동한다.
// 1. Prepare(준비) : SQL문 템플릿이 완성돼 데이터베이스로 전송된다. 매개변수라 하는 특정 값은 지정되지 않은 상태로 남는다("?" 레이블이 지정됨). 예를 들어 INSERT INTO table VALUES(?, ?, ?) 형태로 사용한다.
// 2. DB는 SQL문 템플릿에서 쿼리 최적화를 파싱, 컴파일 및 수행하며 결과를 실행하지 않고 저장한다.
// 3. Execute(실행) : 나중에 응용 프로그램은 값을 매개변수에 바인딩하고 DB는 명령문을 수행한다. 응용 프로그램은 다른 값으로 원하는 만큼 문(Statements)을 실행할 수 있다.

// DB접속
$conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4" , "root" , "root506" , $db_option );

$sql = " SELECT * FROM board_info WHERE board_no = :board_no ";
$arr_prepare = array( ":board_no" => 1 );

$stmt = $conn->prepare( $sql ); // 해당 쿼리를 셋팅해서 Statement 객체를 반환 //prepare(준비하다)
$stmt->execute( $arr_prepare ); // 해당 Prepared statement(준비된 쿼리) 데이터를 이용해서 DB에 요청 //execute(실행하다)
$result = $stmt->fetchALL(); //DB가 응답한 정보를 fetch해서 연상배열로 반환
var_dump( $result );
$conn = null; // DB연경 파기