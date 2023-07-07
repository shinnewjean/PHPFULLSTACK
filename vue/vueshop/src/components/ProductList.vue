<!-- 템플릿 스크립트 스타일 vueinit -->
<template lang="">
    <div>
        <img :src="product.img" @click="$emit('openModal');">
        <p>name : {{product.name}}</p>
        <p>info : {{product.content}}</p>
        <p>price : ${{product.price}}</p>
    </div>
</template>
<script>
export default {
    name: 'ProductList',
    props: {
        product : Object,
    }
}
</script>
<style lang="">
    
</style>