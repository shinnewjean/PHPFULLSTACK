<?php
// 세션이란?
// session
// SID(session ID)를 식별자로 서버에 데이터를 저장
// SID로는 쿠키나 도메인 파라미터를 사용
// session_start(); 로 시작, 스크립트의 최상단에 위치해야 함
// $_SESSION
// 데이터는 서버 내에 파일이나 DB에 저장 함
// 주로 사용자 인증시에 사용함

$user_id = "php506";
$user_pw = "506";

// session명 지정, 지정하지 않으면 "PHPSESSID"로 지정됩니다. ex4참고
session_name("kim");

// session 시작
session_start();

//-------------------------------------------
//유저인증작업 필요, 지금은 생략
//-------------------------------------------

// session에 데이터 저장
$_SESSION["id"] = $user_id;
$_SESSION["del"] = 'delete';

