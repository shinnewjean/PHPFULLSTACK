import { createStore } from 'vuex'  //powershell에 npm install vuex --save
import axios from 'axios'

const store = createStore({
    state() {
        return {
            ListData: [],
        }
    },
    mutations: {
        // 초기 데이터 세팅용
        createListData(state, data) {
            state.ListData = data;
        },
        // 작성글 데이터 셋팅용
        addWriteData(state, data) {
            state.ListData.unshift(data);
        }
    }, 
    actions: {
        getMainList(context) {
            axios.get('http://localhost:8000/api/items')
            .then(res => { 
                context.commit('createListData', res.data);
            })
            .catch( err => {
                console.log(err);
            })
        },
        writeContent(context) {
            let text = document.getElementById('text');
            const data = {
                "item": {
                    "content": text.value,
                }
            }
            console.log(data);
            axios.post('http://localhost:8000/api/items', data)
            .then(res => {
                console.log(res);
                context.commit('addWriteData', res.data);
                text.value = '';
            })
            .catch( err => {
                console.log(err);
            })
        }
    }
})

export default store