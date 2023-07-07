<!-- 템플릿 스크립트 스타일 vueinit -->
<template lang="">
    ModalView
    <!-- <div class="modal" v-if="modalFlg"> -->
    <div class="bg_bl" v-if="modalFlg">
    <div class="bg_wh">
        <!-- <div class="overlay" @click="$emit('close-modal');"></div>
        <div class="modal-card"></div> -->
        <button @click="$emit('closeModal');">닫기</button>
    </div>
    </div>
</template>
<script>
// import { ModelRadio } from 'vue';

export default {
    name: 'ModalView',
    props: {
        modalFlg:Boolean,
    }
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