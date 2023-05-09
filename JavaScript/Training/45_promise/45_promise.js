
// setTimeout(function() {
//     console.log('A');
// }, 3000);

// setTimeout(function() {
//     console.log('B');
// }, 2000);

// setTimeout(function() {
//     console.log('C');
// }, 1000);

// 1. 콜백함수를 이용해서 A,B,C 순서로 콘솔에 출력해 주세요.
// console.log('콜백함수를 이용해서 A,B,C 순서');

//     setTimeout(function() {
//         console.log('A');
//         setTimeout(function() {
//             console.log('B');
//             setTimeout(function() {
//                 console.log('C');
//             }, 1);
//         }, 2);
//     }, 3);

// 2. promise를 이용해서 A,B,C 순서로 콘솔에 출력해 주세요.
// (promise 함수로 등록해서 구현)
console.log('promise를 이용해서 A,B,C 순서');

//선언부
// 변수와 함수 구분 잘하기!!
function func1() {
    return  new Promise(function(resolve, reject){
        setTimeout(function(){
            console.log('A');
            resolve(); //Promise.resolve(value) 메서드는 주어진 값으로 이행하는 Promise.then 객체를 반환
        }, 30);
    });
};

function func2() {
    return  new Promise(function(resolve, reject){
        setTimeout(function(){
            console.log('B');
            resolve();
        }, 20);
    });
};

function func3() {
    return  new Promise(function(resolve, reject){
        setTimeout(function(){
            console.log('C');
            resolve();
        }, 10);
    });
};

//실행부
func1()
.then(func2) //then() 메서드는 Promise (en-US)를 리턴하고 두 개의 콜백 함수를 인수로 받습니다
.then(func3)
// a b c

//------------------------이해를 위한 쿼리---------------------------------
// 콜백(Callback)
//  a) Sync(동기)
//      기본적으로 JavaScript는 동기적(synchronous)으로 작동하는 언어
//      이는 코드를 읽을 때, 자바스크립트의 hoisting 과정 이후 코드가 작성된 순서대로 실행된다는 의미
//      * hoisting: var 변수, function의 선언부가 몇번째 줄에 작성 되었는지와 상관없이 가장 먼저 읽혀 수행되는 것

//  b) Async(비동기)
//      동기적 처리와 반대되는 개념으로, 코드의 작성 순서와 상관없이 개발자가 순서를 지정하여 동작하는 것
        // "use strict";

        // console.log("1");
        // setTimeout(function () {
        //     console.log("2");
        // }, 1000);
        // console.log("3");

        // 1, 3, 2

        // [동작순서]
        // 1. hoisting
        // 2. console.log("1"); 실행
        // 3. setTimeout(); 실행 및 1초 카운트 시작(비동기)
        // 4. console.log("3"); 실행 (브라우저가 전달된 연산을 처리하는 동안)
        // 5. 1초가 지난 후 브라우저에 의해 콜백함수 호출 → console.log("2"); 실행 

        // "use strict";

        // console.log("1");
        // setTimeout(function () {
        // console.log("2");
        // }, 1000);
        // console.log("3");

        // // Synchronous callback
        // function printImmediately(print) {
        // print();
        // }

        // printImmediately(() => console.log("printImmediately()"));

        // 1, 3,printImmediately(), 2,Async callback
        // [동작순서]
        // 1. hoisting → printImmediately 함수의 선언문 
        // 2. console.log("1"); 실행
        // 3. setTimeout(); 실행 및 1초 카운트 시작(비동기)
        // 4. console.log("3"); 실행
        // 5. printImmediately(); 실행(동기)
        // 6. 1초가 지난 후  콜백함수 호출 → console.log("2"); 실행

