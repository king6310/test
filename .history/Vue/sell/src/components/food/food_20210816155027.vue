<template>
    <div
        class="food" 
        v-show="showFlag"
        transition="fade"
    >
    
    </div>
</template>

<script type="text/ecmascript-6">
  export default {
    name: 'food',
    props: {
        food: {
            type: Object
        }
    },
    data () {
        return {
           showFlag: false
        };
    },
    methods: {
        show () {
            this.showFlag = true;
        }
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
    .food
        position fixed
        left 0
        top 0
        bottom 48px
        z-index 30
        width 100%
        background #fff
        &.fade-transition
            opacity 0
        &.fade-enter &.fade
</style>