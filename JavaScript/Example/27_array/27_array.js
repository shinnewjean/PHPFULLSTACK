
let arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// 배열에 값 추가
//$arr[] = 1;
// arr[12] = 1; //arr <br> (14) [1, 2, 3, 4, 5, 비어 있음 × 7, 1, 6]

// // push() 메소드 : 배열에 값 추가
// arr.push(6);

// // Delete : 배열의 값 삭제 (인덱스는 남아있다.)
// delete arr[5];

// // splice() 메소드 : 배열의 요소를 삭제 또는 교체
// arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// arr.splice(2,1); //3을 삭제
// arr.splice(2,1,3); //3을 대입
// arr.splice(2,1,10,20,30,40,50,60); //3번째 매개변수부터는 가변 파라미터로 모든 값을 추가

// <test>
// let testarr = [1, 2, 3, 4, 5];
// //제일앞에 0추가
// testarr = [0, 1, 2, 3, 4, 5];
// // testarr.splice(0,0,0);
// //제일뒤에 6추가
// testarr.push(6);
// // testarr.splice(arr.length, 0 , length);
// console.log( testarr );

//indexOf() 메소드 : 배열에서 특정요소를 찾는데 사용
let arr2 = [1 , 2 , 3 , 4 , 5];
arr2 = [9 ,1 ,8 ,2 ,7 ,3 ,4 ,6 ,5 ,1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9];
arr2.indexOf(1);
arr2.lastIndexOf(1);

// <test>
// let filename = 'javascript.log.php';
// let filename = 'java신유진script.천재의log.php이올시다';
let filename = 'java신유진script.1번째의log.php이올시다';
// let filename = 'java신유진123script.1123번째의log.php이올시다!!';
// 아래처럼 콘솔에 출력해 주세요
// javascript
// log
// php
filename.indexOf('.');
// var filename1 = filename.splice(filename.length - filename.indexOf('.'), 1);
var filename1 = filename.slice(0 , filename.indexOf('.'));
// var filename2 = filename.slice(filename.indexOf('.')+1, filename.indexOf('.')-filename.lastIndexOf('.'));
let filename2 = filename.slice(filename.indexOf('.')+1, filename.lastIndexOf('.'));
const filename3 = filename.slice(filename.lastIndexOf('.')+1);
// let과 var의 차이 ?? let 중복불가능 /var 중복가능

console.log( filename );
console.log( filename1 );
console.log( filename2 );
console.log( filename3 );


// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
let arrCon1 = [1,2,3];
let arrCon2 = [10,20,30];
let arrCon3 = [100,200,300];
let arrConAll = arrCon1.concat( arrCon2 , arrCon3);
// let arrConAll = arrCon1.concat( arrCon2 , arrCon3 , [A ,B ,C]);
console.log( arrConAll );

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별
let arrInc = [1,2,3];
let arrIncAll = arrCon1.concat( arrCon2 , arrCon3);
console.log( arrIncAll.includes(10) );

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrSort = [5,65,43,21,34,68,798,7,65,65,7,4,5,6,2,32,43,574];
// const arrSort = [5,65,43,21,34,68,798,7,65,65,7,4,5,6,2,32,43,574,a,s,df,trf,ws]; //에러발생
// -------------------지멋대로 정렬
// arrSort.sort();
// (18) [2, 21, 32, 34, 4, 43, 43, 5, 5, 574, 6, 65, 65, 65, 68, 7, 7, 798] //앞글자별로 정렬
// -------------------생각대로 정령
arrSort.sort(
    function (a,b) {
        return a-b
    }
);
// -------------------
arrSort.sort((a,b) => a-b); //오름차순
arrSort.sort(function (a,b) {return a-b});
arrSort.sort((a,b) => b-a); //내림차순
arrSort.sort(function (a,b) {return b-a});

// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만들어 줍니다.
// PHP 인플로드? 특정문자열을 주고 그문자열로 합치는것
const arrJoin = ["신","유","진","★","X","100"];
arrJoinResult = arrJoin.join('/');
console.log( arrJoinResult );
// '신/유/진/★/X/100'

// every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는지 판별
const arrEvery = [1,2,3,4];
let arrEveryResult = arrEvery.every(function (val) {
    return val <=5;
});
console.log( arrEveryResult );


// <test>
// 모든 요소의 2로 나눈 나머지가 0인지 판별해주세요.
const testArrEvery = [1,2,3,4];
let testArrEveryResult = testArrEvery.every(
    (val) => (val % 2) === 0
);
console.log( testArrEveryResult );


// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [1,2,3,4,5];
let result2 = arrSome.some(val => val >= 6);
console.log(result2);

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1,2,3,4,5];
let result3 = arrFilter.filter(val => val >= 3);
console.log(result3);






















// 1. 배열 생성하기

// 배열을 생성하는데는 예전 방식인 new 명령을 사용하는 방법과 리터럴 표기법(literal notation) 을 사용하여 생성하는 방식이 있습니다.

// 길이가 0인 예전 방식의 배열 생성
// var myArray1 = new Array();

// 길이가 10인 예전 방식의 배열 생성
// 10개의 자리에는 아무것도 들어 있지 않습니다.
// var myArray2 = new Array(10);

// 길이가 0인 literal notation 방식의 배열 생성
// var myArray3 = [];

// 예전 방식의 생성과 동시에 초기화
// var myArray4 = new Array(1, 2, 3,"홍길동", "아무개");

// literal notation 방식의 생성과 동시에 초기화
// var myArray5 = [1, 2, 3, "홍길동", "아무개"];


// 6. 배열을 연결 합니다.

// var array1 = [1,2,3];
// var array2 = [4,5,6];
// var array3 = [7,8,9];

// // 두 배열을 연결 합니다.
// var array3 = array1.conat(array2);
// console.log(array3); // 1,2,3,4,5,6
 
// // 여러개의 배열을 연결 합니다.
// var array4 = array1.concat(array2, array3);
// console.log(array4); // 1,2,3,4,5,6,7,8,9