<template>
    <div class="star" :class="starType">
        <span
            class="star-item"
            v-for="(itemClass, index) in itemClasses"
            :key="index"
            :class="itemClass"
        >
        {{}}it
        </span>
    </div>
</template>

<script type="text/ecmascript-6">
// const LENGTH = 5;
// const CLS_ON = 'on';
// const CLS_HALF = 'half';
// const CLS_OFF = 'off';

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
        },
        itemClasses () {
            let result = [0, 1];
            return result;
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
            &:last-child
                margin-right 0
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
                    bg-image('star48_off')
        &.star-36
            .star-item
                width 15px
                height 15px
                margin-right 16px
                background-size 15px 15px
                &.on
                    bg-image('star36_on')
                &.half
                    bg-image('star36_half')
                &.off
                    bg-image('star36_off')
        &.star-24
            .star-item
                width 10px
                height 10px
                margin-right 3px
                background-size 10px 10px
                &.on
                    bg-image('star24_on')
                &.half
                    bg-image('star24_half')
                &.off
                    bg-image('star24_off')
</style>