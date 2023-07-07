<!-- 템플릿 스크립트 스타일 vueinit -->
<template lang="">
    <div class="nav">
        <a v-for="item in navList" :key="item">{{item}}</a>
        <!-- <a>{{ product1 }}</a> -->
    </div>
</template>
<script>
export default {
    name: 'Navi',
    // 상속받은값을 사용하기위한 방법
    // props: {
    //     product1 : String,
    // }
    props: {
        navList : Array,
    }
}
</script>
<style lang="">
    
</style>