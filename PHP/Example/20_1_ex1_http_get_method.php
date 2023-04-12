<?php

// 1. GET Method로 데이터를 넘겨주는 방법1-
//     - Query String에 키와 값을 셋팅 해준다.
//    http://localhost/Project_mini_board/src/board_list.php?page_num=1#top
//                                                            ?뒷부분을 쿼리 스트링

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1-2. form Tag를 이용하는 방법 -->
    <form method="get" action="20_1_ex2_httpget.php">
        <input type="text" name="test1" value="testvalue1">
        <input type="text" name="test2" value="testvalue2">
        <button type="submit">submit</button>
    </form>
    <!-- form tag = http://localhost/Project_mini_board/src/board_list.php?page_num=1#top -->
    <br>
    <br>
    <br>
    <a href="http://localhost/20_1_ex2_httpget.php">A TAG</a>
</body>
</html>