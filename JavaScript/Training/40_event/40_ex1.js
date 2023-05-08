// 1. 버튼 클릭시 아래 내용의 알러트가 나옵니다.
//     "안녕하세요."
//     "숨어있는 div를 찾아보세요."

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다.
//     "두근두근"

// 3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타납니다.

// 4. 3번의 상태에서 다시 한번더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보이게 됩니다.
//     "다시 숨는다"

const hiddenButton = document.getElementById('hiddenButton');
const clearbtn = document.getElementById('clearbtn');
const result = document.getElementById('result');

function btn(sample){  
    alert(sample + "\n안녕하세요.\n숨어있는 div를 찾아보세요."); 
} 

//---------------------------아무곳이나 / click / 다시!---------------------------
// document.addEventListener("click", changeColor, false);

function changeColor() {
    // document.body.style.backgroundColor = "#FFC926";
    alert("다시!");
}

//---------------------------숨겨진 박스 / mouseenter / 두근두근---------------------------
// hiddenButton.addEventListener('mouseenter',()=>alert('두근두근'));

hiddenButton.addEventListener("mouseenter", mouseenter, false);

function mouseenter() {
    alert("두근두근두근!");
}

//---------------------------숨겨진 박스 / mouseleave / 잘가---------------------------
// hiddenButton.addEventListener('mouseleave',()=>alert('잘가'));

// hiddenButton.addEventListener("mouseleave", mouseleave, false);

function mouseleave() {
    alert("잘가!");
}

//---------------------------숨겨진 박스 / click / 들켰다---------------------------
// hiddenButton.addEventListener('click',()=>alert('div 클릭'));

hiddenButton.addEventListener("click", () => {
    boxclick();
});

function boxclick() {
    if(hiddenButton.className === "off" ){
        hiddenButton.classList.replace("off","on");
        alert("들켰다!");
        hiddenButton.removeEventListener("mouseenter", mouseenter, false)
    }
    else if( hiddenButton.className === "on" ){
        hiddenButton.classList.replace("on","off");
        alert("다시 숨는다!");
        hiddenButton.addEventListener("mouseenter", mouseenter, false);
    }
}


// if () {
    
// } else {
    
// }













