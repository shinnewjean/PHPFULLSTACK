
// event

// 인라인 이벤트 등록
// html 11행,13행 참조
onclick

// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function(){
    location.href = "http://www.google.com";
}

// addEventLiustner(eventType, function)방식
const btn2 = document.querySelector('#btn2'); //원본데이터가 중복되지않게 const로 설정
// const btn2 = document.getElementById('btn2');

// 현재창으로 열기
// btn2.addEventListener('click',()=>{ //화살표 함수를 사용할때는 앞쪽 괄호를 비워놓는다
//     location.href = 'http://www.daum.net'
// });

// 팝업창으로 열기
let newWindow = null;
btn2.addEventListener('click',()=>{
    newWindow = open('http://www.daum.net','','width=500 height=500');
});

// 팝업창 닫기
const btn3 = document.getElementById('btn3');
// btn3.addEventListener('click',()=>{
//     newWindow.close();
// });
// btn3.addEventListener('click',popUpClose(newWindow));

// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventListener()로 등록한 이벤트의 인자(or인수)와 같은 인자(or인수)를 셋팅해야 삭제됩니다.
// btn3.removeEventListener('click',()=>{
//     newWindow.close();
// });
// btn3.removeEventListener('click',popUpClose(newWindow));

// function popUpClose(win){
//     win.close();
// }

// 이벤트 타입
// 1. 마우스 이벤트
const div1 = document.querySelector('.div1'); //사용시 주의 할점 querySelector는 제일 첫번째 요소만 가져옵니다.
div1.addEventListener('mousedown',()=>alert('div 클릭'));
// div1.addEventListener('mouseenter',()=>alert('div 진입'));


