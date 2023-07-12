<!-- 템플릿 스크립트 스타일 vueinit -->
<template lang="">
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent />
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1">
        <!-- 이미지 -->
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <!-- 필터 -->
        <div class="filter-box">
            <div @click="$store.commit('changeFilter',item)" class="filter" :class="item" v-for="item in filterList" :key="item" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}">
                <span>{{ item }}</span>
            </div>
        </div>
    </div>

    <!-- 글작성 -->
    <div v-if="$store.state.tabFlg == 2" class="">
        <!-- 이미지 -->
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <!-- 글작성 -->
        <div>
            <textarea class="write-box" v-model="$store.state.content" name="$store.state.Content" id="content" placeholder="글을 입력해 주세요."></textarea>
            <!-- {{ $store.state.Content }} -->
            <!-- :rules="[v => !!v || '제목은 필수입니다.']" -->
        </div>
    </div>
</template>
<script>
import PostComponent from "./PostComponent.vue";

export default {
    name: 'ContainerComponent',
    data() {
        return{
            filterList:	[ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", 
		"inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", 
		"reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
    components: {
        PostComponent,
    }
}

</script>
<style lang="">
    
</style>