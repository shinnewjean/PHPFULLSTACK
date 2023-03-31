<?php

// DB 연결
$dbc = mysqli_connect("localhost","root","root506","employees","3306");

//var_dump($dbc);

// 쿼리 요청

$result_query = mysqli_query($dbc,"SELECT emp_no,first_name FROM employees LIMIT 10;");
// var_dump($result_query);

$result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);
$result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// while ($temp_row = mysqli_fetch_row($result_query)) {
//     // var_dump($temp_row);
//     //----echo $temp_row[0].",");
//     var_dump($temp_row);
// }
    
while ($temp_row = mysqli_fetch_assoc($result_query)) {
    var_dump($temp_row["first_name"]);
}
    
    
    


    
    
    
mysqli_close($dbc);
    
    ?>