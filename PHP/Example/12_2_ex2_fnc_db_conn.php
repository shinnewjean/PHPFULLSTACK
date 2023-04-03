<?php

//---------------------------------------------------
// 함수명  : my_db_conn
// 기능    : DB Connect
//파라미터 : PDO &$param_conn
//리턴     : 없음
//---------------------------------------------------
function my_db_conn( &$param_conn )//레퍼런스 파라미터
{
    //-----------------------------------고정--------------------------------------------------------
    // $dbc = mysqli_connect("localhost","root","root506","employees","3306");
    $db_host     = 'localhost'; // 호스트 이름  //host
    $db_user     = 'root';      // 사용자 이름  //user
    $db_password = 'root506';   // 비밀번호     //password
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
    $param_conn = new PDO( $db_dns ,$db_user ,$db_password ,$db_option ); //PDO객체생성
}


$obj_conn = null; //PDO Class

//DB Connection
my_db_conn($obj_conn);

//SQL
$sql = 
    " SELECT "
    ." * "
    ." FROM "
    ."  employees "
    ." LIMIT :limit_start ";

$arr_prepare =
    array(
        ":limit_start" => 5
    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump($result);

$obj_conn = null; //DB Connection 파기

