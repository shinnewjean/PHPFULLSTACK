<template lang="">
    <!-- 데이터 확인용 -->
    <!-- {{ $store.state.boardData }} -->

    <div class="post" v-for="(item,i) in $store.state.boardData" :key="i">
        <!-- 이미지 -->
        <div class="post-img" :class="item.filter" :style="{backgroundImage : `url('${item.img}')`}">
            <!-- <img :src="item.img"> -->
        </div>

        <div class="post-content">
        <a class="header-button-left">🤍</a>
        <a class="header-button-left">💬</a>
        <a class="header-button-left">📝</a>
        <a class="header-button-right">📌</a>
        <br>
        </div>

        <div class="post-content">
            <p>yujin__s97님 외 0명이 좋아합니다.</p>
            <p>댓글 3개 모두 보기</p>
            <!-- 이름 -->
            <p>{{ item.name }}_{{ item.id }} {{ item.content }}</p>
            <p>{{ item.created_at }}</p>
        </div>
    </div>
</template>
<script>
export default {
    name : 'PostComponent',
}
</script>
<style lang="">
    
</style>