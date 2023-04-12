<?php
    
    // 한파일로도 php는 가능합니다.
    // 1. get method로 사용자가 입력한 데이터를 http requeste를 합니다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //   2-1. key : id ,pw ,name ,birth_date
    // 3. echo를 이용해서 각각의 값을 출력해주세요.
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
    <form method="get" action="20_2_ex1_http_get_method.php">
        <label for="ID">ID</label>
        <!-- <input type="text" name="ID" value="ID 입력값 없음"><br> -->
        <input type="text" name="ID"><br>
        <label for="PW">PW</label>
        <input type="text" name="PW"><br>
        <label for="NAME">NAME</label>
        <input type="text" name="NAME"><br>
        <label for="BIRTH_DATE">BIRTH_DATE</label>
        <input type="date" name="BIRTH_DATE"><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>

<?php
    // var_dump($_GET)
    echo '<br>출력값이다!!!<br>';
    echo 'ID : '.$_GET["ID"].'<br>';
    echo 'PW : '.$_GET["PW"].'<br>';
    echo 'NAME : '.$_GET["NAME"].'<br>';
    echo 'BIRTH_DATE : '.$_GET["BIRTH_DATE"].'<br>';
?>