<?php


// 이중 밑줄(__) 로 시작하는 PHP 함수를 매직 메소드(Magic Method)라 부른다.

// Magic Method 에는 __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state() 그리고 __clone() 이 있다.



//   __construct() : 클래스의 생성자
//      새로운 오브젝트가 생성(인스턴스화)될때마다 이 메소드를 호출

//   __destruct() : 클래스의 소멸자
//      특정 오브젝트에의 모든 참조(레퍼런스)가 삭제된 직후 도는 오브젝트가 명시적으로 파기된 직후 호출
//   __set() – 엑세스 할 속성에 데이터를 쓸 때 사용 (저장)
//   __get() – 엑세스 할 속성에서 데이터를 읽을 때 사용 (출력)
//   __isset() – 엑세스할 속성에 isset() 또는 empty() 를 호출하여 트리거 됨 (확인)
//   __unset() – 엑세스 할 속성에 unset() 를 사용할 경우 호출 (삭제)