<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <select name="" id="">
            <option value="0">진행 예정</option>
            <option value="1">진행 중</option>
            <option value="2">진행 완료</option>
            <option value="3">진행 실패</option>
        </select>
    </form>
    <?php
    $end_date = "2023-04-17";
    $to_date = date("Y-m-d");
    if ( $end_date < $to_date ) {
        $ddy = floor((strtotime($end_date) - strtotime(date('Y-m-d'))) / 86400);
        echo "D + ".mb_substr($ddy, 1);
    } else if ( $end_date === $to_date ) {
        echo  "D - Day";
    } 
    else {
        $ddy = ( strtotime($end_date) - strtotime($to_date) ) / 86400;
        echo "D - ".$ddy;
    }
    ?>
</body>
</html>