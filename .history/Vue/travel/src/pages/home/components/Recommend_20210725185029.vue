<template>
    <div>
        <div class="recommend-title">热销推荐</div>
        <ul>
            <li class="item">
                <div class="item-img-wrapper">
                    <img src="item-img" alt="">
                </div>
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
</style>
