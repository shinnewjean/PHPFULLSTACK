// JavaScript 언어의 타입은 원시 값과 객체로 나뉩니다.

//--------------------------------------------------
// 기본 데이터 타입
// 원시 값 (언어의 최고 로우레벨에서 직접 표현되는 불변 데이터)
//--------------------------------------------------

// 숫자 (number)
// PHP : int...
let num = 27;

// 문자열 (string)
// PHP : string
let str = "string";

// 불리언 (Boolean)
// PHP : 
let bool = true;

// 널 (null)
// PHP : null
let test1 = null;

// 언디파인드 (Undefined) : undefined 는 원시값으로, 선언한 후 값을 할당하지 않은 변수 혹은 값이 주어지지 않은 인수에 자동으로 할당됩니다.
// PHP x
let test2;

// 심볼 (Symbol) : Symbol은 고유하고 변경 불가능한 원시 값이며 객체의 속성(아래를 참고하세요) 키로 사용할 수 있습니다. 어떤 프로그래밍 언어들에선 "아톰"이라고 부르기도 합니다.
// PHP x
// const S_CONST = Symbol("심볼");
const S_CONST1 = Symbol("심볼1");
const S_CONST2 = Symbol("심볼1"); //같은 값이지만 서로 다른 

// 관리자모드 데이터 타입 확인방법
// typeof(num);
// 'number'

console.log( num );
console.log( str );
console.log( bool );
console.log( test1 );
console.log( test2 );
console.log( S_CONST1 );
console.log( S_CONST2 );
console.log( S_CONST1 === S_CONST2 ); // false

// BigInt 타입? 배우지 않음

//--------------------------------------------------
// 객체 타입 ( JSON ) (기본 이외의 타입)
// 객체 (속성의 컬렉션) :컴퓨터 과학에서의 객체란 식별자(식별자는 코드 내의 변수, 함수, 혹은 속성을 식별하는 문자열입니다.)로 참조할 수 있는 메모리 상의 값을 말합니다.
//--------------------------------------------------
// 배열
// Date
// Object

// let obj1 = { // 객체표현시 중괄호
//     u_name : "신유진"
// } 
// F12 ( 관리자모드 )
// obj1
// {u_name: '신유진'}
// obj1.u_name
// '신유진'

let obj1 = { 
    u_name : "신유진"
    ,u_age : 27
    ,u_gender : "여자"
    // , test: function () {  //함수명 : 
    //     console.log( "임둥" ); 
    // }
    , test: function () {
        console.log( "임둥" ); 
    }
    ,addr: {
        addr1: "대구"
        ,addr2: "달서구"
    }
} 
console.log( obj1 );
obj1.test();
console.log( obj1.addr.addr1 );

// 배열 (Array)
let arr = ["신유진" ,"금쪽이" ,"신노스케" ,"전 외노자"];

// F12 ( 관리자모드 )
// arr or arr;
// (4) ['신유진', '금쪽이', '신노스케', '전 외노자']
console.log( arr );
console.log( arr[0] );
console.log( arr[1] );
console.log( arr[2] );

// <test>??
let testnum = 1;
function test() {
    let testnum = 2;
    console.log( "함수 : " + num );
}