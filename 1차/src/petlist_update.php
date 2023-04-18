<?php
define( "SRC_ROOT", $_SERVER["DOCUMENT_ROOT"]."/PHP-506-2/src/" );
define( "URL_DB", SRC_ROOT."common/db_common.php" );
include_once( URL_DB );

$http_method = $_SERVER["REQUEST_METHOD"];



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
    
        <select name="select" id="select">
            <option value="0" selected>진행예정</option>
            <option value="1">진행중</option>
            <option value="2">진행완료</option>
            <option value="2">진행실패</option>
        </select>
    
</body>
</html>