// 제어문

// 제어문 ( if / switch / for / while / do~ while )
// 제어문, 반복문 ( if문, switch문, for문, for-in문, while문, do-while문 )
// 조건문(if문, switch문)

//--------------------------------------------------
// 조건문 (if문, switch문)
//--------------------------------------------------
// if ( 1 > 0 ) {
//     console.log( "1은 0보다 크다" );
// } else if ( 1 < 0 ) {
//     console.log( "1은 0보다 작다" );
// } else {
//     console.log( "else" );
// }

// let u_age = 10;
// switch ( u_age ) {
//     case 10:
//         console.log( "u_age : 10대" );
//         break;
//     case 20:
//         console.log( "u_age : 20대" );
//         break;

//     default:
//         console.log("u_age : " + u_age + "살" );
//         break;
// }

//--------------------------------------------------
// 반복문 ( while문, do-while문, for문, foreach문, for-in문, for-of문 )
//--------------------------------------------------

//while문
// let num = 0;
// while ( num <= 3 ) {
//     console.log( num );
//     num++;
// }
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//do-while문
//<test> : 구구단
// console.log( "또또단" );
// a = 2;
// do {    
//     console.log( a + "단" );
//     b = 1;
//     do {
//         console.log( a + "X" + b + "=" + (a*b) );
//         b++;
//     } while (b <= 9);
//     a++;
// } while (a <= 9);
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//for문
// dan = 2;
// mult = 1;
// for (let i = 1; i <= 9; i++) {
//     console.log( dan + "X" + i + "=" + (dan*i) );
// }
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//foreach문 : 배열만 루프 가능
let arr = [1,2,3,4];

// arr.forEach(function(value) {
//     console.log( value );
// });
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

arr = {
    u_name : "신유진"
    ,u_age : "27"
}
// for...in문 : 모든 객체를 루프 가능
// for ( let i in arr ){
//     console.log( i + " : " + arr[i] );
// }

arr = [5,4,3,2];
arr.num = 2;
// for...of문 : 
for (let i of arr) {
    console.log( i );
}


// PHP 인덱스 배열
// $arr = array(1,2,3);
// $arr[0];