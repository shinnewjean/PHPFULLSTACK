// Ajax란?
// Ajax란 Asynchronous JavaScript and XML의 약자입니다.
// Ajax는 빠르게 동작하는 동적인 웹 페이지를 만들기 위한 개발 기법의 하나입니다.


// Ajax의 장점
// Ajax를 이용하면 다음과 같은 장점이 있습니다.
// 1. 웹 페이지 전체를 다시 로딩하지 않고도, 웹 페이지의 일부분만을 갱신할 수 있습니다.
// 2. 웹 페이지가 로드된 후에 서버로 데이터 요청을 보낼 수 있습니다.
// 3. 웹 페이지가 로드된 후에 서버로부터 데이터를 받을 수 있습니다.
// 4. 백그라운드 영역에서 서버로 데이터를 보낼 수 있습니다.

// API란?
// 

/*
1. HTTP ( Hypertext Transfer Protocol) 란?
	어떻게 Hypertext를 주고 받을지 규약한 프로토콜로
	클라이언트가 서버에 데이터를 request(요청)을 하고,
	서버가 해당 request에 따라 response(응답)을 클라이언트에 보내주는 방식입니다.
	Hypertext는 웹사이트에서 이용되는 하이퍼 링크나 리소스, 문서, 이미지 등을 모두 포함합니다.

2. AJAX ( Asynchronous JavaScript And XML) 이란?
	웹페이지에서 비동기 방식으로 서버에게 데이터를 request하고,
	서버의 response를 받아 동적으로 웹페이지를 갱신하는 프로그래밍 방식입니다.
	즉, 웹 페이지 전체를 다시 로딩하지 않고도 일부분만을 갱신 할 수 있습니다.
	대표적으로 XMLHttpRequest 방식과 Fetch Api 방식이 있습니다.

3. JSON ( JavaScript Object Notation ) 이란?
	JavaSctipt의 Object에 큰 영감을 받아 만들어진 서버 간의 HTTP 통신을 위한 텍스트 데이터 포맷입니다.
	장점은 다음과 같습니다.
		- 데이터를 주고 받을 때 쓸 수 있는 가장 간단한 파일 포맷
		- 가벼운 텍스트를 기반
		- 가독성이 좋음
		- Key와 Value가 짝을 이루고 있음
		- 데이터를 서버와 주고 받을 때 직렬화(Serialization)[*1 참조]하기 위해 사용
		- 프로그래밍 언어나 플랫폼에 상관없이 사용 가능

	JSON.stringify( obj ) : Object를 JSON 포맷의 String으로 변환(Serializing)해주는 메소드
	JSON.parse( json ) : JSON 포맷의 String을 Object로 변환(Deserializing)해주는 메소드

*/

// const url = "https://picsum.photos/v2/list?page=1&limit=3"
// const url = document.getElementById('inputUrl').value; //.value = inputUrl값만 가져오기
const imgBox = document.getElementById('imgBox');
const inputButton = document.getElementById('inputButton');
const delButton = document.getElementById('delButton');
const inputUrl = document.getElementById('inputUrl');

inputButton.addEventListener('click',buttonFun);
delButton.addEventListener('click',delButtonFun);

function buttonFun() {
    // var url = document.getElementById('inputUrl').value; 
    // fetch(url)
    // .then(res => {return res.json()})
    // .then(data => makeList(data))
    // .catch(console.log);

    if ( inputUrl.value.length === 0 ) {
        alert("url을 입력해주세요");
    } else {
        var url = document.getElementById('inputUrl').value; 
        fetch(url)
        .then(res => {return res.json()})
        .then(data => makeList(data))
        .catch(console.log);
    }
}

function delButtonFun() {
    // location.reload();
    imgBox.replaceChildren();
    inputUrl.value = '';
}
       
function makeList(data) { //함수를 만들어서
    imgBox.replaceChildren();
    data.forEach(item => { //아이템을 돌려서 배열을 만들어
        console.log(item);
        const imgTagCreate = document.createElement('img'); //img를 만들어주고
        imgTagCreate.setAttribute('src', item.download_url );
        // imgTagCreate.setAttribute('height', 200 + 'px');
        // imgTagCreate.style.height = 200 + 'px';
        imgTagCreate.classList.add("resizePic");
        imgBox.appendChild(imgTagCreate);
    });
}


