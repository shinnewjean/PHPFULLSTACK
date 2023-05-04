
// DATE

// 1. 연도(year) : 1900년(00) ~ 1999년(99)

// 2. 월(month) : 1월(0) ~ 12월(11)

// 3. 일(day) : 1일(1) ~ 31일(31)

// 4. 시(hours) : 0시(0) ~ 23시(23)

// 5. 분(minutes) : 0분(0) ~ 59분(59)

// 6. 초(seconds) : 0초(0) ~ 59초(59)


// new Date()
// 인수를 전달하지 않으면 현재 날짜와 시간을 가지는 인스턴스를 반환한다.

// new Date(milliseconds)
// 인수로 숫자 타입의 밀리초를 전달하면 1970년 1월 1일 00:00(UTC)을 기점으로 인수로 전달된 밀리초만큼 경과한 날짜와 시간을 가지는 인스턴스를 반환한다.

// new Date(dateString)
// 인수로 날짜와 시간을 나타내는 문자열을 전달하면 지정된 날짜와 시간을 가지는 인스턴스를 반환한다.
// 이때 인수로 전달한 문자열은 Date.parse 메소드에 의해 해석 가능한 형식이어야 한다.

// new Date(year, month[, day, hour, minute, second, millisecond])
// 인수로 년, 월, 일, 시, 분, 초, 밀리초를 의미하는 숫자를 전달하면 지정된 날짜와 시간을 가지는 인스턴스를 반환한다.
// 이때 년, 월은 반드시 지정하여야 한다. 지정하지 않은 옵션 정보는 0 또는 1으로 초기화된다.

// year	1900년 이후의 년
// month	월을 나타내는 0 ~ 11까지의 정수 (주의: 0부터 시작, 0 = 1월)
// day	일을 나타내는 1 ~ 31까지의 정수
// hour	시를 나타내는 0 ~ 23까지의 정수
// minute	분을 나타내는 0 ~ 59까지의 정수
// second	초를 나타내는 0 ~ 59까지의 정수
// millisecond	밀리초를 나타내는 0 ~ 999까지의 정수

//-------------------------------------------------------------------------------------------------
// DATE
const NOW = new Date();
console.log( NOW );

// getFullYear() : 연도만 가져오는 메소드
console.log( "연도 : " + NOW.getFullYear() );

// getMonth() : 월을 가져오는 메소드 ( +1을 해줘야 현재 월과 같아진다. ) 
console.log( "월 : " + (NOW.getMonth() + 1 ));

// getDate() : 날짜를 가져오는 메소드
console.log( "일 : " + NOW.getDate() );

// getDay() : 요일을 가져오는 메소드 ( 일요일 = 0 ~ 토요일 = 6 )
console.log( "요일 : " + NOW.getDay() );
// console.log( "요일 : " + if(NOW.getDay() === 4){ console.log( "목요일(" + NOW.getDay() +")" )});

// getTime() : 1970/01/01 기준으로 얼마나 지났는지 몇밀리초를 가져온다.
console.log( "시간(Linux) : " + NOW.getTime() );

// getHours() : 시간을 가져오는 메소드
console.log( "시 : " + NOW.getHours() );

// getMinutes() : 분을 가져오는 메소드
console.log( "분 : " + NOW.getMinutes() );

// getSeconds() : 초을 가져오는 메소드
console.log( "초 : " + NOW.getSeconds() );

// getMilliseconds() : 밀리초을 가져오는 메소드
console.log( "밀리초 : " + NOW.getMilliseconds() );

//<test>-------------------------------------------------------------------------------------------------
console.log( "--------------------------------test start-------------------------------------------------" );
// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘부터 몇일 전인지 출력해주세요.
const NOWdate = new Date();
const OLDdate = new Date('2022/09/30/19:20:10');

console.log( NOWdate );
console.log( OLDdate );

console.log('NOWdate: ' + NOWdate.getTime());
console.log('OLDdate: ' + OLDdate.getTime());
let NOWdateTime = NOWdate.getTime();
let OLDdateTime = OLDdate.getTime();
let dateTime = NOWdateTime - OLDdateTime

let resultSeconds = Math.ceil(dateTime / 1000 );
let resultMinutes = Math.ceil(dateTime / (60*1000));
let resultHours = Math.ceil(dateTime / (60*60*1000));
let resultDay = Math.ceil(dateTime / (24*60*60*1000));
let resultMonth = Math.floor(dateTime / (30*24*60*60*1000));

console.log( resultSeconds + "초전 날짜입니다" );
console.log( resultMinutes + "분전 날짜입니다" );
console.log( resultHours + "시간전 날짜입니다" );
console.log( resultDay + "일전 날짜입니다" );
console.log( resultMonth + "개월전 날짜입니다" );

resultMonthDay = (resultDay-resultMonth*30);
resultMonthDayHours = -(resultHours-((resultMonthDay*24)+(resultMonth*30*24)))
console.log( resultMonth + "개월 " + resultMonthDay + "일 " + resultMonthDayHours + "시간" + "전 날짜입니다");