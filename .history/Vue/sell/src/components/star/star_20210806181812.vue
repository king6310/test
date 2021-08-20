<template>
    <div class="star" :class="starType">
        <span
            class="star-item"
            v-for="(itemClass, index) in itemClasses"
            :key="index"
            :class="itemClass"
        >
        </span>
    </div>
</template>

<script type="text/ecmascript-6">
export default {
    name: 'star',
    props: {
        zise: {
            type: Number
        },
        score: {
            type: Number
        }
    },
    computed: {
        starType () {
            return 'star-' + this.zise;
        }
    }
};
</script>

<style lang="stylus" rel="stylesheet/stylus">
    .star
        font-size 0
        .star-item
            display inline-block
            background-repeat no-repeat 
        &.star-48
            .star-item
                width 20px
                height 20px
                margin-right 22px
                background-size 20px 20px
                &.on
                    bg-image('star48_on')
                &.half
                    bg-image('star48_half')
                &.off
                    b
        &.star-36
        &.star-24
</style>