<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
  <h1>App.vue</h1>
  
  <!-- 기존의 방식 -->
  <!-- <ContainerComponent v-if="flg" /> -->
  <PostComponent :propsTest="1" />
  <!-- <button @click="flg = !flg"></button> -->

  <br><h1>{{ data.name }}</h1>
  <br> <button @click="data.name = '김김김'">김김김</button>
  <br><h1>{{ test }}</h1>
  <br><button @click="data.name = '김김김'">김김김</button>
  <br><br>

  <br><h1>{{ data2.name }}</h1>
  <br><button @click="data2.name = '김김김'">김김김</button>
  <br><br>

  <router-link to="/">홈으로</router-link>
  <br><router-link to="/post">POST</router-link>

  <router-view :test="222"></router-view>
  <!-- <router-view>
    <span>222</span>
  </router-view> -->

</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
// import ContainerComponent from "./components/ContainerComponent.vue";
import PostComponent from "./components/PostComponent.vue";
import { ref,reactive } from "vue";



export default {
  name: 'App',
  
  data() {
      return {
        flg:true,
      }
    },

  components: {
    // HelloWorld
    // ContainerComponent,
    PostComponent,
  },

  setup() {
        // let data =ref(['aa']);
        let data =ref({name:'홍길동',age:30});
        let data2 =reactive({name:'철수',age:5});

        let test = 'aaa';

        return{test,data,data2};
    },
}

// laravel route와 vue에서의 라우트 차이점?
// laravel
// Route::getComputedStyle('/sds',function() { return view })
// vue
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
