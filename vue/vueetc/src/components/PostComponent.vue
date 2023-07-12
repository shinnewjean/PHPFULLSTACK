<template lang="">
    <div>
        <h1>PostComponent.vue</h1>
        <!-- <p>{{ test }}</p> -->
        <p>{{ propsTest }}</p>
    </div>
    <!-- <div class="">
        <slot></slot>
    </div> -->
</template>
<script>
import { ref , toRefs } from "vue";

export default {
    name: 'PostComponent',
    // props: {
    //     test:Number,
    // },

    setup(props) {
        let data = ref({propsTest});
        let { propsTest } = toRefs(props);

        return{ propsTest }; 
    }
}
</script>
<style lang="">
    
</style>