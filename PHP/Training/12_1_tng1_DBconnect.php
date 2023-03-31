<?php

$dbc = mysqli_connect("localhost","root","root506","employees","3306");

//사번이 10005 이하 사원의 사번,이름, 성별, 생일

$fnc1 = mysqli_query($dbc,"SELECT emp_no,CONCAT(first_name,' ',last_name) as name,gender,birth_date 
                    FROM employees 
                    WHERE emp_no<=10005");

// 1)
// while ($temp_row = mysqli_fetch_assoc($fnc1)) {
//     var_dump($temp_row);
// }

// 2)
// while ($temp_row = mysqli_fetch_assoc($fnc1)) {
//     echo $temp_row["emp_no"]." ".$temp_row["name"]." ".$temp_row["gender"]." ".$temp_row["birth_date"]."\n";}
// mysqli_close($dbc);

// 3)
// $result_query = mysqli_query( $dbc,$sql)
// mysqli_num_rows()를 이용해서 레코드 수를 체크하는 방법
// if (mysqli_num_rows($result_query) === 0) 
// {
        // echo "데이터가 0건 입니다.";
// }
// else {
//     while ($temp_row = mysqli_fetch_assoc($result_query)) {
//         echo implode( " ", $temp_row);
// }

// 4) 플레그를 이용하는 방법
$fig_cnt = false;
while ($temp_row = mysqli_fetch_assoc($result_query)) 
{
    echo implode( " ", $tmp_row), "\n";
    $fig_cnt = true;
}
if( !$fig_cnt )
{
    echo "데이터가 0건 입니다.";
}