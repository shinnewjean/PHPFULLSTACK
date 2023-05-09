
// 동기 처리방식
    // console.log('A');
    // console.log('B');
    // console.log('C');
    // console.log('D');

// 비동기 처리 방식(timer함수_setInterval... ,http요청_api관련에이젝스 ,이벤트 핸들러)
    // 실행을 브라우저라든가 다른것에 맡김
    // console.log('A');       //A에게 1번째 콘솔로그처리를 맡김
    // setTimeout(() => {      //B에게 콘솔로그처리를 맡김
    //     console.log('B');
    // },0);
    // console.log('C');       //A에게 2번째 콘솔로그처리를 맡김

    // const a = 2;
    // const b = 3;
    // const sum = function () {
    //     setTimeout(() => {
    //         return a+b;
    //     },0);
    // }
    // console.log(sum());         //result : undefined

    // 비동기 처리에서의 콜백 지옥(콜백헬)
    // setTimeout(() => {
    //     console.log('A');
    //     setTimeout(() => {
    //         console.log('B');
    //         setTimeout(() => {
    //             console.log('C');
    //         }, 1000);
    //     }, 2000);
    // }, 3000);

    // 로그인 콜백 지옥 체험
        // const Login = {
        //     chkInput(id ,pw ,success ,error){
        //         setTimeout(() => {
        //             if (id !== '' && pw !== '') {
        //                 success({chkId : id ,chkPw : pw})
        //             }else{
        //                 error(new Error('잘못 입력 하셨습니다.'));
        //             }
        //         }, 500);
        //     }
        //     ,loginUser(id ,pw ,success ,error){
        //         setTimeout(() => {
        //             if (id === 'php506' && pw === '506') {
        //                 success(id)
        //             }else{
        //                 error(new Error('없는 유저입니다.'));
        //             }
        //         }, 500);
        //     }
        //     ,chkAuth(id ,success ,error){
        //         setTimeout(() => {
        //             if (id === 'php506') {
        //                 success({authId : id ,auth : 'admin'})
        //             }else{
        //                 error(new Error('권한이 없습니다.'));
        //             }
        //         }, 500);
        //     }
        // }

        // const id ='php506';
        // const pw ='506';

        // Login.chkInput(
        //     id
        //     , pw
        //     , chkDate => {
        //         Login.loginUser(
        //             chkDate.chkId
        //             ,chkDate.chkPw
        //             ,loginId => {
        //                 Login.chkAuth(
        //                     loginId
        //                     ,authData => { console.log('${authData.authId}유저님 ,권한은 ${authData.auth}입니다.'); }
        //                     ,authError => { console.log(authError.message); }
        //                 )
        //             }
        //             ,loginError => { console.log(loginError.message); }
        //         )
        //     }
        //     , chkError => { console.log(chkError.message); }
        // )

        // chkInput();


    // 콜백함수
    function myCallBack(i) {
        return i + 1 + ' myCallBack 함수 ';
    }

    function printNum(fn) {
        console.log(fn(4));
    }

    printNum(myCallBack);

    