// store 암묵적인 약속 : 데이터를 저장할때 모두 여기다가 저장함
// 초기 데이터 created(옵션 API) 단계에 넣는
import { createStore } from 'vuex'
import axios from "axios";

const store = createStore({
    // 데이터를 저장하는 영역
    state() {
        return{
            // test : '테스트'
            boardData: [], // 게시글 데이터
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg: true, // 더보기 버튼 표시용 플래그
            tabFlg: 0, // 탭 UI flg (0:main ,1:fillter ,2:write)
            imgUrl:'', // 이미지 url
            filter:'', // 필터명
        }
    },

    // 뮤테인스 액션스
    // mutations 일반적인 js함수...
    // mutations 사용하려면 this.commit(함수명,)
    // 변경해서 저장하는
    mutations: {
        // 초기 데이터 셋팅용
        createBoardData(state ,data) {
            // 배열안의 객체가 오는값
            state.boardData = data;
            this.commit('changeLastId', data[data.length-1].id)
        },

        // 더보기 데이터 셋팅용
        addBoardData(state ,data) {
            // 객체 하나만 오는 값
            state.boardData.push(data);
            this.commit('changeLastId', data.id)
        },
        
        // lastId 변경
        changeLastId(state ,id) {
            state.lastId = id;
        },

        // 탭 UI flg 변경
        changeTabFlg(state ,num) {
            state.tabFlg = num;
        },

        // 이미지 URL 변경 changeImgUrl
        changeImgUrl(state ,imgUrl) {
            state.imgUrl = imgUrl;
        },

        // 필터 변경
        changeFilter(state ,filter) {
            state.filter = filter;
        },

        // 취소버튼 눌렀을시 초기화
        clearState(state) {
            state.filter = '';
            state.imgUrl = '';
        },
    },

    // actions 에이젝스 비동기 처리등 시간이 오래걸리는 것...
    actions: {
        // 최초의 _ context현업에서 많이 사용하는 store을 가르키는 말
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards') // 데이터 가져올곳
            .then(res => {  // 레스폰스를 가져와서
                // console.log(res.data);   // 디버깅을 위해 콘솔로그
                context.commit('createBoardData',res.data);
                // context.boardData = res.data;    // 가능은 하지만 현업에서 사용안함. 10번줄 boardData[] 와 17.18번줄 뮤테이션 사용
            })
            .catch( err => {
                console.log(err);
            })
        },

        // 더보기 함수 axios이용하여 만들기
        getMoreList(context) {
                // 'http://192.168.0.66/api/boards/2'
                axios.get('http://192.168.0.66/api/boards/'+ context.state.lastId)
                .then(res => {
                    if (res.data) {
                        context.commit('addBoardData', res.data);
                    }
                    else{
                        context.state.addBtnFlg = false; // 더 사용할 곳이 없으므로 뮤테이션의 함수로 바꾸는것은 하지않음.
                        alert('더 표시할 게시물이 없습니다.');

                    }
                })
                .catch( err => {
                    console.log(err);
                })
        },
    },
})

export default store