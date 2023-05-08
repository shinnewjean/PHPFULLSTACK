// 타이머 함수

// 1. setTimeout()/clearTimeout()
// setTimeout(함수/코드[, 지연시간, 파라미터1, 파라미터2, ...])
// const timeOut = setTimeout(()=> console.log('A') , 2000); //타이머 셋팅
// clearTimeout(timeOut); //타이머 제거

// 2. setInterval()/clearInterval()
// const myInterval = setInterval(()=> console.log('A') , 1000); //인터벌 셋팅
// clearTimeout(myInterval); //인터벌 제거


// 1~5를 1초마다 콘솔에 출력해주세요.
// 1
// 2
// 3
// 4
// 5
// const testTimeOut1 = setTimeout(() => console.log("1초 후에 실행됨"), 1000);
// const testTimeOut2 = setTimeout(() => console.log("2초 후에 실행됨"), 2000);
// const testTimeOut3 = setTimeout(() => console.log("3초 후에 실행됨"), 3000);
// const testTimeOut4 = setTimeout(() => console.log("4초 후에 실행됨"), 4000);
// const testTimeOut5 = setTimeout(() => console.log("5초 후에 실행됨"), 5000);

//-------------setInterval() 함수를 사용하여 콘솔에 현재 시간을 2초마다 출력-------------
// setInterval(() => console.log(new Date()), 2000);

//-------------0과 9 사이의 수를 무작위로 생성하여 2초마다 출력-------------
// setInterval(() => console.log(Math.floor(Math.random() * 10)), 2000);

//-------------숫자를 변수에 저장해놓고 1초 마다 1씩 증가-------------
// let count = 0;
// setInterval1(() => console.log(++count), 2000);

//-------------<TEST> 1초 마다 1씩 증가 5까지-------------
let count = 1;
//() => //함수표시입니다.
// const myInterval = setInterval(function () {
//     console.log(count++);
//     if ( count === 6 ) {
//         clearInterval(test1);
//     }
// },1000);

let i = 1;
// const Interval1 = setInterval(() => {
//     console.log(i);
//     if ( i++ === 5 ) {
//         clearInterval(Interval1);
//     }
// },1000);






