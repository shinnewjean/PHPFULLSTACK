<template>
  <!-- <img alt="Vue logo" src="./assets/a.jpg"> -->
  <!-- <v-img v-for="(item,i) in uploadimageurl" :key="i" :src="item.url"
            contain height="150px" width="200px" style="border: 2px solid black; margin-left:100px;"/> -->

  <!-- 컴포넌트 필요없다 -->
  <!-- <HelloWorld msg="안녕이다Welcome to Your Vue.js App"/> -->

  <!-- 네비게이션 -->
  <Navi :navList="navList" />
  <!-- <Navi></Navi> -->

  <!-- <div class="nav"
  > -->
  <!-- contain height="150px" width="200px" style="border: 2px solid black; margin-left:100px;"> -->
    <!-- <a>홈</a>
    <a>상품</a>
    <a>기타</a>
  </div> -->
  <div class="discount" v-if="flg">
    <p>지금 당장 구매하시면, {{ discountprice }}할인</p>
  </div>
  <button @click="hookTest = !hookTest">훅테스트</button>
  {{ hookTest }}

  <!-- 검색창 -->
  <br>
  <!-- <input type="text" @input="inputTest = $event.target.value"> -->
  <input type="text" v-model="inputTest">
  <br>
  <span>{{ inputTest }}</span>
  <br>

  <ProductList 
  @openModal="modalFlg=true; productNum=i" 
  :modalFlg="modalFlg" 
  :product="product" 
  v-for="(product,i) in products" 
  :key="i" />

  <!-- 모달 -->
  <!-- @plus="plus(productNum)"  -->
  <!-- @minus="minus(productNum)"  -->
  <!-- <div class="startTransition" :class="{endTransition : modalFlg}">
    <ModalView 
      @closeModal="modalFlg=!modalFlg;" 
      :modalFlg="modalFlg" 
      :productNum = "productNum" 
      :product="products"
    />
  </div> -->
  <Transition name="modalTransition">
    <ModalView 
      @closeModal="modalFlg=!modalFlg;" 
      :modalFlg="modalFlg" 
      :productNum = "productNum" 
      :product="products"
    />
  </Transition>

  <!-- <div class="bg_bl" v-if="modalFlg">
    <div class="bg_wh">
      <button class="Xbut" @click="modalFlg=false; products[productNum].acount='0';">X</button>
      <h1>상품 정보</h1> -->
      <!-- 사진 -->
      <!-- <img  @click="modalFlg=!modalFlg; products[productNum].acount='0';" :src="products[productNum].img"> -->
      <!-- 상품명 -->
      <!-- <h4>{{ products[productNum].name }}</h4> -->
      <!-- 설명 -->
      <!-- <p>{{ products[productNum].content }}</p> -->
      <!-- 가격 -->
      <!-- <p>total : ${{ products[productNum].acount*products[productNum].price }}</p> -->
      <!-- 갯수 -->
      <!-- <button @click="plus(productNum)">+</button>
      <span>&nbsp;&nbsp;{{ products[productNum].acount }}&nbsp;&nbsp;</span>
      <button @click="minus(productNum)">-</button>
      <hr>

      <button @click="modalFlg=false; products[productNum].acount='0';">닫기</button>
    </div>
  </div> -->

  <!-- 상품리스트 -->
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
  <!-- <div v-for="(item,i) in products" :key="i"> -->

    <!-- 각각의 이미지 추가 -->
    <!-- <img @click="modalFlg=true; productNum = i;" :src="item.img" alt=""> -->

    <!-- <h4 @click="modalFlg=true; productNum = i;">{{ item.name }}</h4> -->
    <!-- <p>${{ item.price }}</p> -->
    <!-- <button v-on:click="count++">수량 증가</button> -->

    <!-- 이벤트 핸들러 -->
    <!-- <button @click="item.acount++">+</button>
    <span>{{ item.acount }}</span>
    <button @click="item.acount--">-</button> -->

    <!-- <button @click="plus(i)">+</button>
    <span>&nbsp;&nbsp;{{ item.acount }}&nbsp;&nbsp;</span>
    <button @click="minus(i)">-</button> -->


    <!-- <span>{{ item.acount }}</span> -->
    <!-- <span>{{ item.acount }}</span> -->

    <!-- <hr> -->
  <!-- </div> -->

  <!-- if문 테스트 230707 new -->
  <!-- <p v-if="1 == 1">if문 테스트</p> -->

  <!-- 이벤트 핸들러 -->
</template>

<script>
import data from "./assets/js/data.js";

import Navi from "./components/Navi.vue";

import ProductList from "./components/ProductList.vue";

import ModalView from "./components/ModalView.vue";

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
      discountprice : 20,
      flg: false,
      hookTest: true,

      inputTest:'',

      // import를 위해 사용
      products: data,

      // 모달창을 각각 띄우기위해
      productNum : 0,

      // products1: ['T-shirt','pants','점퍼'],

      // products: 
      //[
      //   {name: '티셔츠', price : '3,800', acount: 0 , img : require('@/assets/tshirt.jpg')}
      //   ,{name: '바지', price : '5,000', acount: 0 , img : require('@/assets/baji.png')}
        // ,{name: '점퍼', price : '10,000', acount: 0 , img : require('@/assets/jp.jpg')}
      // ],

      // prices: ['3','4','5'],

      // product1: 'T-shirt',
      // price1: '3,800',
      // product2: '바지사장',
      // price2: '4',

      // styleR: 'color:red', //css글자색 바꿀때

      modalFlg :false,
      // modalFlg :true,

      navList:['홈','상품','기타리스트'],

    }
  },
  
  updated() {
    this.flg = true;
  },

  mounted() {
    setInterval(() => {
      if (this.discountprice <= 0) {
        this.discountprice=0;
      } else {
        this.discountprice--;
      }
      
      }, 100) //1초마다 반복
  },

  watch: { // 실시간 감시 함수 정의 영역
    inputTest(input) {
      if( input == 3 ) {
        alert('니는 3 을 입력한 것이여');
        this.inputTest = '';
      }
    }
  },

  methods: { // 함수를 설정하는 영역
    plus(i) {
      // this.products[i].acount++;
      if (this.products[i].acount<10) {
        this.products[i].acount++;
      }
      else{
        this.products[i].acount=10;
      }
    },

    minus(i) {
      // this.products[i].acount--;
      if (this.products[i].acount>0) {
        this.products[i].acount--;
      }
      else{
        this.products[i].acount=0;
      }
    },

    // discountprice(i) { 
    //   if (i>0) {
    //     this.discountprice=0;
    //   }
    // },

    // totalprice(i) {
    //    ttprice = this.products[i].acount * this.products[i].price
    // },
  },

  components: { // 컴포넌트 정의
    Navi,
    ProductList,
    ModalView,
  },
}
</script>

<style>
/* assets스타일 가져오기 */
@import url("./assets/css/app.css");

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

/* .nav { 
  background-color:  #2c3e50;
  padding: 15px;
  border-radius: 10px;
}

.nav a {
  color: white;
  padding: 10px;
} */
</style>
