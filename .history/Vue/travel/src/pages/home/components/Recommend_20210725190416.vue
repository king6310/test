<template>
    <div>
        <div class="recommend-title">热销推荐</div>
        <ul>
            <li class="item">
                <img class="item-img" src="http://img1.qunarzz.com/sight/p0/201402/18/32d0e0109e8ca2a6f9dec15ce32886cf.jpg_200x200_2eb90c6e.jpg">
                <div class="item-info">
                    <p class="item-title"></p>
                    <p class="item-desc"></p>
                    <button class="item-button">查看详情</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'recommend'
}
</script>

<style lang="stylus" scoped>
    .recommend-title
        margin-top .1rem
        line-height .8rem
        background #eee
        text-indent .2rem
    .item
        overflow hidden
        display flex
        height 1.9rem
        background red
        .item-img
            width 1.7rem
            height 1.7rem
            padding .1rem
</style>
