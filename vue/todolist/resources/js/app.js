require('./bootstrap');

import { createApp } from 'vue';
import App from './vue/App.vue';
import store from './store'

createApp(App).mount('#app');
// #app indexedDB.html의 div app에 있음

// webpack수정

const app = new Vue({
    el: '#app',
    data: {
    // 사용할 데이터
    },
    methods: {
    // 사용할 메서드
    }
})