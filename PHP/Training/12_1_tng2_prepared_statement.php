<?php
//아래 쿼리로 결과를 출력하는 프로그램을 만들어 주세요.

/* -------쿼리----------
SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT?
*/

/* --------prepare 셋팅값---------
to_date : "9999-01-01"
salary : 50000
LIMIT : 5
*/

//MY An

//변수지정과 DB연결의 순서는 바꿔도 가능합니다.
//DB연결
$databaseconnect = mysqli_connect("localhost","root","root506","employees","3306");

//변수 지정
$date = "9999-01-01";
$sal = 50000;
$lim = 5;
$result = null; //안 적어도 값은 나옴.. 31번줄에 적었고,셋팅해줬기때문에 필요는없지만 있으면 개발자들이 알기쉬움

$stmt = $databaseconnect -> stmt_init(); //mysqli_stmt_prepare을 사용하기 위한 객체를 초기화 하고 리턴해줍니다.
$stmt -> prepare(" SELECT emp_no,salary 
                    FROM salaries 
                    WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ? ");
$stmt -> bind_param("sii",$date,$sal,$lim); //prepared statement의 값을 셋팅 //!!타입 공부하기 메소드함수(지정되어있는 함수)
$stmt->execute(); //쿼리를 실행

$result = $stmt -> get_result();
while ( $row = $result -> fetch_assoc() ) //루프문으로 더이상 값이 없는 시점까지
{
    // echo $row ["emp_no"]." ".$row ["salary"]."\n";
    /*발표자 답안 */ echo "emp_no : ".$row ["emp_no"]."     "."salary : ".$row ["salary"]."\n"; //
}


//DB 종료
// mysqli_close($databaseconnect);
$databaseconnect->close();












?>