<?php
    
    // 한파일로도 php는 가능합니다.
    // 1. post method로 사용자가 입력한 데이터를 http requeste를 합니다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //   2-1. key : id ,pw ,name ,birth_date
    // 3. 유저가 입력하지 않은 데이터도 함께 전송
    //   3-1. key : h_page ,val : h1
    // 4. echo를 이용해서 각각의 값을 출력해주세요.
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
    <form method="post" action="20_2_ex1_http_post_method.php">
        <label for="ID">ID</label>
        <input type="text" name="ID"><br>
        <label for="PW">PW</label>
        <input type="text" name="PW"><br>
        <label for="NAME">ID</label>
        <input type="text" name="NAME"><br>
        <label for="BIRTH_DATE">BIRTH DATE</label>
        <input type="date" name="BIRTH_DATE"><br>
        <input type="hidden" name="h_page" value="h1"><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>

<?php
    // var_dump($_GET)
    echo '<br>-------------------------POST 출력값---------------------<br>';
    echo 'ID : '.$_POST["ID"].'<br>';
    echo 'PW : '.$_POST["PW"].'<br>';
    echo 'NAME : '.$_POST["NAME"].'<br>';
    echo 'BIRTH_DATE : '.$_POST["BIRTH_DATE"].'<br>';
    echo '쉿 몽환의 숲'.$_POST["h_page"].'<br>';
    echo '<br>----------------------------END--------------------------<br>';
?>