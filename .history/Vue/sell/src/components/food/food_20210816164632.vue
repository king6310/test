<template>
    <div
        class="food" 
        v-show="showFlag"
        transition="move"
    >
        <div class="food-content">
            <div class="image-header">
                <img :src="food.image">
                <div
                    class="back"
                    @click="hide"
                >
                    <i class="icon-arrow_lift"></i>
                </div>
            </div>
            <div class="content">
                <div class="title">{{food.name}}</div>
                <div class="detail">
                    <span class="sell-count">月售{{food.sellCount}}份</span>
                    <span class="rating">好评率{{food.rating}}%</span>
                </div>
                <div class="price">
                    <span class="now">￥{{food.price}}</span>
                    <span class="old" v-show="food.oldPrice">￥{{food.oldPrice}}</span>
                </div>
            </div>
        </div>
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
        },
        hide () {
            this.showFlag = false;
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
        &.move-transition
            transition all 0.2s linear
            transform translate3d(0, 0, 0)
        &.move-enter, &.move-leave
            transform translate3d(100%, 0, 0)
        .image-header
            position relative
            width 100%
            height 0
            padding-top 100%
            img
                position absolute
                top 0
                left 0
                width 100%
                height 100%
            .back
                position absolute
                top 10px
                left 0
                .icon-arrow_lift
                    display block
                    padding 10px
                    font-size 20px
                    color #fff
        .content
            padding 18px
            .title
                line-height 14px
                margin-bottom 8px
                font-size 14px
                font-weight 700
                color rgb(7, 17, 27)
            .detail
                margin-bottom 18px
                line-height 10px
                height 10px
                font-size 0
                .sell-count, .rating
                    font-size 10px
                    color rgb(147, 153, 139)
                .sell-count
                    margin-right 12px
            .price
                line-height 24px
                .now
                    margin-right 8px
                    font-size 14px
                     font-weight 700
                    color rgb(240, 20, 20)
                .old
                    text-decoration line-through
                    font-size 10px
                    color rgb(147, 153, 159)
</style>