<?php

//DATABASE 연결하는법
//---->MySQL 함수를 사용 or PDO(PHP Data Objects)를 사용
//PDO가 상대적으로 쉽고 ,다양한 SQL 쿼리를 실행

// DB 연결
$dbc = mysqli_connect("localhost","root","root506","employees","3306");

//var_dump($dbc);

// 쿼리 요청
// $result_query = mysqli_query($dbc,"SELECT emp_no,first_name FROM employees LIMIT 10;");
// var_dump($result_query);

// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);
// $result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// while ($temp_row = mysqli_fetch_row($result_query)) {
//     // var_dump($temp_row);
//     //----echo $temp_row[0].",");
//     var_dump($temp_row);
// }


$i =5;
$i1 ="F";
$i2 =10010;
$i3 =5;
// $result = null;
// prepared Statement : 
$stmt = $dbc->stmt_init(); // Statement를 셋팅
// $stmt->prepare("SELECT emp_no,first_name FROM employees LIMIT ?"); //DB 질의 할 쿼리를 작성
$stmt->prepare("SELECT emp_no,first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT?");
$stmt->bind_param("sii",$i1,$i2,$i3); //prepare 셋팅 "i"(int) 위의 물음표값의 타입을 입력
$stmt->execute(); //DB에 쿼리 질의 실행

//---------------------질의 결과를 우리가 지정한 변수에 담아 사용하는 방법 ------------------------
// $stmt->bind_result( $col1,$col2 ); //&(참조의 표시) //질의 결과를 각 아규먼트에 저장하기 위한 셋팅
// $stmt->fetch(); //bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실헹될때마다 한 레코드씩 저장)
// var_dump( $col1,$col2 );

//패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
// while ($stmt->fetch())
// {
//     echo "col1 col2\n";
// }

//---------------------이하 연상배열로 가져오는 방법------------------------
//질의 결과를 저장
// $result = $stmt->get_result();
//패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법
// while ( $row = $result->fetch_assoc())
// {
//     echo $row["$first_name"],"\n";
// }


// while ($temp_row = mysqli_fetch_assoc($result_query)) {
//     var_dump($temp_row["first_name"]);
// }
    
// DB 연결 종료   
mysqli_close($dbc);
