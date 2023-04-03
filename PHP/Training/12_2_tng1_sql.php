<?php

//우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.
include_once("../Example/12_2_ex2_fnc_db_conn.php");

$obj_conn = null; //PDO Class

//DB Connection
my_db_conn($obj_conn);
// 1. 전체 월급의 편균
$sql_salAvg =(
    " SELECT"
    ." AVG(salary) "
    ." FROM " 
    ."salaries");

// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요.
// $arr_prepare = 
//     array
//     (


//     )

// $sql_newEmp =
// INSERT INTO employees
// (
// 	emp_no
// 	,birth_date
// 	,first_name
// 	,last_name
// 	,gender
// 	,hire_date
// )
// VALUES 
// (543210
// ,DATE(19970811)
// ,"Yujin"
// ,"Shin"
// ,"F"
// ,DATE(99990101)
// )
// 3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍"으로 변경해 주세요.

// 4. 2에서 등록한 사원을 삭제해 주세요.

$stmt = $obj_conn->prepare( $sql_salAvg );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump($result);

$obj_conn = null; //DB Connection 파기