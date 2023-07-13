<template lang="">
    <div>
        <h1>App.vue</h1>
        <table>
            <!-- 테이블 헤더 -->
            <thead>
            <tr>
                <th class="id">ID</th>
                <th class="comment">내용</th>
                <th class="state">상태</th>
                <th class="button">-</th>
            </tr>
            </thead>

            <tbody>
            <!-- [1] 여기에 <tr>을 사용해서 Todo 요소를 반복 출력 -->
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: 'App',
    
}
</script>
<style lang="">
    
</style>