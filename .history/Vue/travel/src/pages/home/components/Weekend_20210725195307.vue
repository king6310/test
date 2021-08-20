<template>
    <div>
        <div class="recommend-title">周末去哪儿</div>
        <ul>
            <li
                class="item border-bottom"
                v-for="item of recommendList"
                :key="item.id"
            >
                <div class="item-img-wapper">
                  <img class="item-img" :src="item.imgUrl">
                </div>
                <div class="item-info">
                    <p class="item-title">{{ item.title }}</p>
                    <p class="item-desc">{{ item.desc }}}</p>
                    <button class="item-button">查看详情</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'HomewWeekend',
  data () {
    return {
      recommendList: [{
        id: '0001',
        imgUrl: 'http://img1.qunarzz.com/sight/p0/201403/10/bb969032edeb3c1726704bf38b920e51.jpg_200x200_5622b783.jpg',
        title: '天水涧漂流',
        desc: '8人纯玩小团丨西北甘青五湖8日🌸吉乃尔湖💧莫高窟⭐青海茶卡湖💦沙漠露营'
      }, {
        id: '0002',
        imgUrl: 'http://img1.qunarzz.com/sight/p0/201403/10/bb969032edeb3c1726704bf38b920e51.jpg_200x200_5622b783.jpg',
        title: '天水涧漂流',
        desc: '8人纯玩小团丨西北甘青五湖8日🌸吉乃尔湖💧莫高窟⭐青海茶卡湖💦沙漠露营'
      }, {
        id: '0003',
        imgUrl: 'http://img1.qunarzz.com/sight/p0/201403/10/bb969032edeb3c1726704bf38b920e51.jpg_200x200_5622b783.jpg',
        title: '天水涧漂流',
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
    .item-img-wrapper

    .item-img
        width 1.7rem
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
