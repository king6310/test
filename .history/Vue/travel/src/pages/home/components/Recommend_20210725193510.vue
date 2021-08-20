<template>
    <div>
        <div class="recommend-title">热销推荐</div>
        <ul>
            <li class="item border-bottom">
                <img class="item-img" src="https://imgs.qunarzz.com/vs_ceph_b2c_001/cf2f39a2-95b3-4375-a28c-9154abfd5273.jpg_r_480x320x95_78337e83.jpg">
                <div class="item-info">
                    <p class="item-title">杭州-兰州 8天跟团游</p>
                    <p class="item-desc">8人纯玩小团丨西北甘青五湖8日🌸吉乃尔湖💧莫高窟⭐青海茶卡湖💦沙漠露营</p>
                    <button class="item-button">查看详情</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'recommend',
  data () {
    return {
      recommendList: [{
        id: '0001',
        imgUrl: 'https://imgs.qunarzz.com/vs_ceph_b2c_001/cf2f39a2-95b3-4375-a28c-9154abfd5273.jpg_r_480x320x95_78337e83.jpg',
        tite: '杭州-兰州 8天跟团游',
        desc: '8人纯玩小团丨西北甘青五湖8日🌸吉乃尔湖💧莫高窟⭐青海茶卡湖💦沙漠露营'
      }]
    }
  }
}
</script>

<style lang="stylus" scoped>
    @import '~styles/mixins.styl';
    .recommend-title
        margin-top .1rem
        line-height .8rem
        background #eee
        text-indent .2rem
    .item
        overflow hidden
        display flex
        height 1.9rem
        .item-img
            width 2.7rem
            height 1.7rem
            padding .1rem
        .item-info
            flex 1
            padding .1rem
            min-width 0
            .item-title
                line-height .54rem
                font-size .32rem
                ellipsis()
            .item-desc
                line-height .4rem
                color #ccc
                ellipsis()
            .item-button
                line-height .44rem
                margin-top .16rem
                background #ff9300
                padding 0 .2rem
                border-radius .06rem
                color #fff
</style>
