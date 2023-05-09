
// Promise 객체는 비동기 작업이 맞이할 미래의 완료 또는 실패와 그 결과 값을 나타냅니다.
    // resolve 성공시 실행 & resolve 에러 처리시 실행
    const promise1 = new Promise((resolve, reject) => {
        const data = true; // true or false
        if (data) {
            resolve('성공');
        }else{
            reject('error');
        }
    });

    // const promise1 = new Promise((resolve, reject) => {
    //     const data = true; // true or false
    //     setTimeout(() => {
    //         console.log
    //         if (data) {
    //             resolve('성공');
    //         }else{
    //             reject('error');
    //         }
    //     }, 5000);
    // });

    // promise1
    // .then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드
    // .catch(error => {console.log(error);}) // 실패했을때 실행되는 코드
    // .finally(() => {console.log('finally');}) //성공하든 실패하든 항상 실행되는 코드

// 함수로 등록해서 promise로 사용
    // function myPromise() {
    //     return new Promise((resolve, reject) => {
    //         const data = true; // true or false
    //         if (data) {
    //             resolve('성공');
    //         }else{
    //             reject('error');
    //         }
    //     });
    // }
    // myPromise()
    // .then(data => {console.log(data);}) // 성공적으로 수행했을 때 실행되는 코드
    // .catch(error => {console.log(error);}) // 실패했을때 실행되는 코드
    // .finally(() => {console.log('finally');}) //성공하든 실패하든 항상 실행되는 코드


// 로그인 콜백 지옥 체험 -> promise로 구현
    const Login = {
        chkInput(id ,pw){
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    if (id !== '' && pw !== '') {
                        resolve({chkId : id ,chkPw : pw})
                    }else{
                        reject(new Error('잘못 입력 하셨습니다.'));
                    }
                }, 500);
            });
        }
        ,loginUser(id ,pw){
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    if (id === 'php506' && pw === '506') {
                        resolve(id)
                    }else{
                        reject(new Error('없는 유저입니다.'));
                    }
                }, 500);
            });
        }
        ,chkAuth(id){
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    if (id === 'php506') {
                        resolve({authId : id ,auth : 'admin'})
                    }else{
                        reject(new Error('권한이 없습니다.'));
                    }
                }, 500);
            });
        }
    }

    const id ='php506';
    const pw ='506';

    Login.chkInput(id,pw)
    .then(chkData => Login.loginUser(chkData.chkId, chkData.chkPw))
    .then(loginid => Login.chkAuth(loginid))
    .then(authData => {console.log(`${authData.authId}유저님, ${authData.authId}권한 입니다.`);})
    .catch(error => {console.log(error.message);})



