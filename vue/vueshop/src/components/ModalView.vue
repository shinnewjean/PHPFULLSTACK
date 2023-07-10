<!-- 템플릿 스크립트 스타일 vueinit -->
<template lang="">
    <!-- <div class="modal" v-if="modalFlg"> -->
    <div class="bg_bl" v-if="modalFlg">
        <div class="bg_wh">
            <img  @click="$emit('closeModal');" :src="product[productNum].img">
            <h4>{{ product[productNum].name }}</h4>
            <p>{{ product[productNum].content }}</p>
            <!-- 수량 버튼 -->
            <!-- <p>
                <button @click="$emit('plus')">+</button>
                {{ product[productNum].acount }}개
                <button @click="$emit('minus')">-</button>
            </p> -->

            <!-- 텍스트 수량 입력버튼 -->
            <!-- <p><input type="text" v-model="product[productNum].count">개</p> -->
            <input type="number" v-model="Acount" placeholder="숫자만 입력해주세요.">
            <!-- <br> -->
            <!-- <span>{{ product[productNum].count }}</span> -->

            <p>총가격 : ${{ Acount * product[productNum].price }}</p>

            <!-- {{product}} -->
            <br>
            <button @click="$emit('closeModal');">닫기</button>
        </div>
    </div>
</template>
<script>
// import { ModelRadio } from 'vue';

export default {
    name: 'ModalView',

    data() {
        return{
            Acount:'',
        }
    },

    props: {
        modalFlg : Boolean,
        product : Object,
        productNum : Number,
    },

    watch: { // 실시간 감시 함수 정의 영역
        Acount(input) {
            if( input > 10 ) {
                alert('10개 초과 주문 불가');
                this.Acount = '';
            }
            else{
                if ( input < 0 ) {
                alert('0이하의 갯수는 입력불가');
                this.Acount = '';
                } 
                // else {
                //     if( input >= 10 ) {
                //     alert('10개 이상 주문 불가');
                //     this.Acount = '';
                //     }
                // }
            }
        }
    },

    // methods: { // 함수를 설정하는 영역
    //     Acount()

    // }
}

</script>
<style lang="">
    /* .modal,
    .overlay{
        width:100%;
        height:100%;
        position:fixed;
        left:0;
        top:0;
    }
    .overlay{
        opacity:0.5;
        background-color:black;
    }
    .modal-card{
        position:relative;
    }
     */
</style>