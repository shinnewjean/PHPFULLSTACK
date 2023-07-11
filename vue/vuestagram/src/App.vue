<template>
  <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
  <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->

  <!-- store 사용법 : 파일명.영역.변수명 -->
  <!-- {{ $store.state.test }} -->

  <!-- 헤더 -->
  <div class="header">
    <ul>
      <li v-if="$store.state.tabFlg != 0" @click="$store.commit('changeTabFlg',0); $store.commit('clearState');" class="header-button header-button-left">X</li>
      <li @click="$store.commit('changeTabFlg',0)"><img class="logo" alt="logo" src="./assets/instalogobl.png"></li>
      <li v-if="$store.state.tabFlg == 1" @click="$store.commit('changeTabFlg',2)" class="header-button header-button-right">다음</li>
      <li v-if="$store.state.tabFlg == 2" @click="$store.commit('changeTabFlg',0)" class="header-button header-button-right">공유</li>
    </ul>
  </div>

  <!-- {{ $store.state.lastId }} // lastID 데이터 확인용 -->

  <!-- ContainerComponent -->
  <ContainerComponent />
  
  <!-- 더보기버튼 추가 -->
  <button v-if="$store.state.tabFlg == 0 && $store.state.addBtnFlg" @click="$store.dispatch('getMoreList')">더보기</button>

  <!-- 푸터 -->
  <div class="footer">
    <div v-if="$store.state.tabFlg == 0" class="footer-button-store">
      <label for="file" class="label-store">+</label>
      <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
    </div>
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import ContainerComponent from "./components/ContainerComponent.vue";

export default {
  name: 'App',
  components: {
    // HelloWorld
    ContainerComponent
  },
  methods: {
    updateImg(e) {
      let file = e.target.files;  // 이벤트가 발생했을때 파일 저장
      console.log(e);
      console.log(e.target.value);
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl' ,imgUrl);  // 뮤테이션 함수 
      this.$store.commit('changeTabFlg' ,1);
      e.target.value = '';
    }
  },
  created() {
    this.$store.dispatch('getMainList');  // 액션스는 디스페치로 연결
  },
}
</script>

<style>
@import url('./assets/css/common.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
