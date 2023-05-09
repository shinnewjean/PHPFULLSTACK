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

//-------------현재 시각 오전 9:48:12 를 html로 표현하기-------------
function fncnowtime() {
const date = new Date();

const hours = date.getHours();
const minutes = date.getMinutes();
const seconds = date.getSeconds();
const milliseconds = date.getMilliseconds();

// console.log('time: ' + date.toLocaleTimeString('ko-kr'));

const timecon = date.toLocaleTimeString('ko-kr')

let nowtime = document.getElementById('nowtime'); //변수담기
nowtime.innerHTML = timecon; //html에 사용가능하게 만들기
}

let myInterval = setInterval(fncnowtime,1000);

// 멈춤버튼
function stopbut() {
    const now = new Date();
    document.getElementById('clock').innerHTML = now.toLocaleTimeString();
}

// 재시작 버튼

//-------------스톱워치 만들기-------------
var time = 0;
var starFlag = true;
$(document).ready(function(){
  buttonEvt();
});

function init(){
  document.getElementById("time").innerHTML = "00:00:00";
}

function buttonEvt(){
  var hour = 0;
  var min = 0;
  var sec = 0;
  var timer;

  // start btn
  $("#startbtn").click(function(){

    if(starFlag){
      $(".fa").css("color","#FAED7D")
      this.style.color = "#4C4C4C";
      starFlag = false;

      if(time == 0){
        init();
      }

      timer = setInterval(function(){
        time++;

        min = Math.floor(time/60);
        hour = Math.floor(min/60);
        sec = time%60;
        min = min%60;

        var th = hour;
        var tm = min;
        var ts = sec;
        if(th<10){
        th = "0" + hour;
        }
        if(tm < 10){
        tm = "0" + min;
        }
        if(ts < 10){
        ts = "0" + sec;
        }

        document.getElementById("time").innerHTML = th + ":" + tm + ":" + ts;
      }, 1000);
    }
  });

  // pause btn
  $("#pausebtn").click(function(){
    if(time != 0){
      $(".fa").css("color","#FAED7D")
      this.style.color = "#4C4C4C";
      clearInterval(timer);
      starFlag = true;
    }
  });

  // stop btn
  $("#stopbtn").click(function(){
    if(time != 0){
      $(".fa").css("color","#FAED7D")
      this.style.color = "#4C4C4C";
      clearInterval(timer);
      starFlag = true;
      time = 0;
      init();
    }
  });
}





