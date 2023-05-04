
// Math Method

// Math.abs(number) : number
// 인수의 절댓값 반환한다.

// Math.round(number) : number
// 인수의 소수점 이하를 반올림한 정수를 반환한다

// Math.ceil(number) : number
// 인수의 소수점 이하를 올림한 정수를 반환한다.

// Math.floor(number) : number
// 인수의 소수점 이하를 내림한 정수를 반환한다. Math.ceil의 반대 개념이다.

// Math.sqrt(number) : number
// 인수의 제곱근을 반환한다.

// Math.random() : number
// 임의의 부동 소수점을 반환한다.

// Math.pow(number, number) : number
// 첫번째 인수를 밑(base), 두번째 인수를 지수(exponent)로하여 거듭제곱을 반환한다.

// Math.max(…number) : number
// 인수 중에서 가장 큰 수를 반환한다.

// Math.min(…number) : number
// 인수 중에서 가장 작은 수를 반환한다.
//-------------------------------------------------------------------------------------------------

//올림
console.log( Math.ceil(3.14) );
//반올림
console.log( Math.round(3.14) );
//버림
console.log( Math.floor(3.14) );
//랜덤 숫자 출력
console.log( Math.random() );

//<test>
//random() 메소드를 이용해서 1~10까지 랜덤으로 나오게 해주세요.
let ran = Math.random();
if ( ran === 1 ) {
    ran = Math.random();
}
console.log( Math.floor(Math.random()*10)+1 );
console.log( ran );
for( let i = 0; i < 1000000; i++){
    ran = i
} 
console.log( ran );