<template>
    <div class="header">
        城市选择
        <div class="iconfont heder-back">&#xe624;</div>
    </div>
</template>

<script>
export default {
  name: 'CityHeader'
}
</script>

<style lang="stylus" scoped>
    @import '~styles/varibles.styl'
    .header
        position relative
        overflow hidden
        height .86rem
        line-height .86rem
        text-align center
        color #fff
        background $bgColor
        font-size .32rem
        .heder-back
            position absolute
            top 0
            left 0
            width .64rem
            text-align center
            font-size .4rem
</style>
