
// 특정 영역을 선택하기

// 1. 요소를 선택하는 방법
//  1-1. ID로 요소를 선택하는 방법
const title = document.getElementById('title');

// html의 id=title인곳의 색을 바꿔줍니다.
// title.style.color = 'blue';
// title.style.color = '#000';

//  1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');
// li.style.Color = 'white';
// li[0].style.backgroundColor = 'red';
// li[1].style.backgroundColor = 'yellow';
// li[2].style.backgroundColor = 'blue';

for (i = 0; i < 10; i++) {
    if (i === 0) {
        li[i].style.backgroundColor = 'red';
    }
    else if ( ( i % 2 === 0 ) ) {
        li[i].style.backgroundColor = 'orange';
    }
    else {
        li[i].style.backgroundColor = 'yellow';
    }
}

//  1-3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none-li');

//  1-4. CSS 선택자로 요소를 선택하는 방법
// document.querySelector('#h1');

//  querySelector(): 복수의 요소가 있다면 가장 첫번째 것만 선택
// const title2 = document.querySelector('#title');
// const li2 = document.querySelector('.none-li ');

//  querySelectorAll(): 복수의 요소 전부 선택
const title2 = document.querySelectorAll('#title');
const li3 = document.querySelectorAll('.none-li ');


// 2. 요소를 조작하는 방법
//  2-1. 콘텐츠를 조작하는 방법
//      title.textContent : 순수한 텍스트 데이터를 전달, 이전의 태그들은 모두 제거
title.textContent = '<span>textContent</span>';

//      title.innerHTML : 태그는 태그로 인식해서 전달, 이전의 태그들은 모두 제거
title.innerHTML = '<span>innerHTML</span>';

// 요소에 속성을 추가
// const it = document.querySelector('#it ');
const it = document.getElementById('it');
it.setAttribute('placeholder','셋어트리뷰트로 삽입');

const aa = document.getElementById('aa');
aa.setAttribute('href','http://www.naver.com');

// 요소의 속성을 제거
it.removeAttribute('placeholder');

it.addEventListener('mouseenter', function name() {
        it.setAttribute('placeholder','셋어트리뷰트로 삽입')
});
it.addEventListener('mouseleave', function name() {
    it.setAttribute('placeholder','셋어트리뷰트로 삽입')
});

// 요소의 스타일링
// 인라인으로 스타일 추가
// aa.style.textDecoration = 'none';
// aa.style.color = 'skyblue';

// 클래스로 스타일 추가
aa.classList.add('aa1','aa2','aa3');

// 새러운 요소 만륵리
const cli = document.createElement('li');
cli.innerHTML = '잠온다';

// 요소를 자식요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');

// 해당 요소를 지우는 방법
cli.remove();

//요소를 특정 위치에 삽입하는 방법
// const zzam = document.getElementsByClassName('none-li');
// console.log(zzam[2]);

const kkan = document.querySelector('li:nth-child(6)');
const zab = document.createElement('li');
zab.innerHTML = '잡채밥';
const dong = document.createElement('li');
dong.innerHTML = '동파육';
ul[0].insertBefore(zab,kkan);
ul[0].insertBefore(dong,kkan);







