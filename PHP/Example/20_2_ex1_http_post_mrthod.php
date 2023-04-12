<?php

// 1.POST Method 
//      - request 할때의 데이터를 외부에서 볼수가 없다.

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
    <!-- form Tag로 request -->
    <form  method="post" action="20_2_ex2_httppost.php">
        <input type="text" name="p_test1"><br>
        <input type="text" name="p_test2"><br>
        <input type="hidden" name="p_hidden1" value="aaa" ><br>
        <!-- a tag hidden 사용예제에 대해 알아보기 -->
        <button type="submit">submit</button>
    </form>
</body>
</html>