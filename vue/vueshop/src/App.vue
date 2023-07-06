<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- 컴포넌트 필요없다 -->
  <!-- <HelloWorld msg="안녕이다Welcome to Your Vue.js App"/> -->
  <!-- <div>
    <h4>티셔츠{{ product1 }}</h4>
    <p>${{ price1 }}</p>
  </div>
  <div> -->
    <!-- <h4><p id="yangmar"></p></h4> -->
    <!-- <h4 style="color:blue">{{ product2 }}</h4>
    <p :style="styleR">${{ price2 }}</p>
  </div> -->

  <!-- 반복문으로 교체 -->
  <!-- <div> -->
    <!-- <h4 v-for="name in products1" :key="name">{{ name }}</h4> -->
    <!-- <h4 v-for="(name,i) in products1" :key="i">{{ i }}</h4> -->
    <!-- <p v-for="price in prices" :key="price">${{ price }}</p> -->
  <!-- </div> -->

  <!-- 배열안에 배열 -->
  <div  v-for="(item,i) in products" :key="i">
    <h4>{{ item.name }}</h4>
    <p>${{ item.price }}</p>
  </div>

</template>

<script>
// 예전방식 -> 왜 빈화면이 되는걸까?
// let p = document.getElementById("yangmar");
// p.innerHTML = '양말';

// import HelloWorld from './components/HelloWorld.vue'

// 객체
export default {
  name: 'App',
  // components: {
  //   HelloWorld
  // }
  data() { // 데이터 바인딩
    return{
      // products1: ['T-shirt','pants','점퍼'],
      products: [
        {name: '티셔츠', price : '3,800'}
        ,{name: '바지', price : '5,000'}
        ,{name: '점퍼', price : '10,000'}
      ],
      prices: ['3','4','5'],
      product1: 'T-shirt',
      price1: '3,800',
      product2: '바지사장',
      price2: '4',
      styleR: 'color:red', //css글자색 바꿀때
    }
  },
}
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
