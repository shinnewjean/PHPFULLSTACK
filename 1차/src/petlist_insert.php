<?php
    // TODO : 취소버튼 클릭시 리스트 페이지로 이동(경로추가)
    // TODO : 헤더파일 경로 추가
    // TODO : 리스트파일 경로 추가


    define( "DOC_ROOT", $_SERVER["DOCUMENT_ROOT"]."/" );
    define( "URL_DB", DOC_ROOT."pet_list/src/common/db_common.php" ); // 통합하면 경로 수정해야할듯
    // define( "URL_HEADER", "" ); // 헤더파일 경로 추가 예정
    include_once( URL_DB );

    $http_method = $_SERVER["REQUEST_METHOD"];
    
    // -------------------------------------------------------
    // 처리 완료 후 리스트 페이지로 이동
    if ( $http_method === "POST" ) {
        $arr_post = $_POST;
        pet_list_insert( $arr_post );
        // header( "Location: " ); // 리스트파일 경로 추가 예정
        exit();
    }
    // -------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petlist_insert</title>
</head>
<body>
    <form action="petlist_insert.php" method="post">
        <select name="list_comp_flg" id="list_comp_flg">
            <option value="0">진행 예정</option>
            <option value="1">진행 중</option>
            <option value="2">진행 완료</option>
            <option value="3">기간 만료</option>
        </select>
        <br>
        <label class="label_title" for="title">제목</label>
		<input class="input_title" type="text" maxlength="100" name="list_title" id="title" placeholder="제목을 입력하세요." required>
        <br>
        <label for="start_time">시작일자</label>
        <input type="datetime-local" name="list_start" id="start_time" required>
        <br>
        <label for="end_time">기한일자</label>
        <input type="datetime-local" name="list_end" id="end_time" required>
        <br>
        <label for="location">장소</label>
        <input type="text" maxlength="100" name="list_location" id="location" required>
        <br>
		<label for="contents">내용</label>
		<textarea class="input_contents" maxlength="250" name="list_contents" id="contents" placeholder="내용을 입력하세요." required></textarea>
		<br>
		<button type="submit" title="작성">작성</button>
		<button type="button" title="취소">취소</button>
    </form>
</body>
</html>