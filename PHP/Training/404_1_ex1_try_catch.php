<?php

// 아래 쿼리를 이용해서 DB접속 > data획득 후 출력해 주세요.
// try-cathc로 에러 처리를 해 주세요.
// 에러가 날 경우의 해당 Exception의 에러메세지를 출력해 주세요.
// 정상 종료일 경우 "정상종료"라고 출력해 주세요.
$sql1 = " SELECT * FROM departments "; //쿼리 조건문1
$sql2 = " SELECT * FROM dept_manager "; //쿼리 조건문2


include_once("../Example/12_2_ex2_fnc_db_conn.php");

// try-catch문 : 에러처리를 하기위한 문법
// for

try
{
	// 우리가 실행하고 싶은 소스코드를 작성
    $obj_conn = null; //obj_conn를 초기화
    my_db_conn( $obj_conn ); //DB연결 $obj_conn이 인스턴트화 되는부분
    $stmt = $obj_conn->query( $sql1 ); //1.조건쿼리문을 가져와서 쓰겠다 이말
    $stmt2 = $obj_conn->query( $sql2 ); //2.조건쿼리문을 가져와서 쓰겠다 이말
    $result = $stmt->fetchAll(); //1.값을 내는문장
    $result2 = $stmt->fetchAll(); //2.값을 내는문장

    if (count($result)===0) {
        //throw new Exception : 에러를 강제로 일으키는 구문
        throw new Exception("Error Processing Request"); //"E99"? 
    }

    var_dump ($result); //바덤프는 항상 괄호안에 결과넣기
    echo "정상종료"; //성공하면 실행되는곳 실패되면 캐치에 돌아감

}
catch( Exception $e ) //실패되면 $e를 실행
{
	// 에러가 발생 했을 때 실행되는 소스코드를 작성
    echo "----에러 발생----\n";
	echo $e->getMessage(); //$e값을 애코로 출력
	echo "\n----에러 발생----\n";
}
finally //무적권 나오는곳 (성공하든 실패하든 모두 출력하는곳)
{
	// 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
    $obj_conn = null; //정상종료든 에러발생이든 인스턴트화된 쿼리를 닫아줘야한다.
}
