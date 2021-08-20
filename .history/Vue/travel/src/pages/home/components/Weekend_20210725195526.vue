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
        imgUrl: 'http://img1.qunarzz.com/sight/source/1511/fd/0285e145e82233.jpg_r_640x214_b5f10121.jpg',
        title: '黟县旅游',
        desc: '山水相依垂柳荷田色的江南小城，探寻桃花人家，感受静谧温馨田园生活'
      }, {
        id: '0002',
        imgUrl: 'http://img1.qunarzz.com/sight/source/1511/fd/0285e145e82233.jpg_r_640x214_b5f10121.jpg',
        title: '黟县旅游',
        desc: '山水相依垂柳荷田色的江南小城，探寻桃花人家，感受静谧温馨田园生活'
      }, {
        id: '0003',
        imgUrl: 'http://img1.qunarzz.com/sight/source/1511/fd/0285e145e82233.jpg_r_640x214_b5f10121.jpg',
        title: '黟县旅游',
        desc: '山水相依垂柳荷田色的江南小城，探寻桃花人家，感受静谧温馨田园生活'
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
      overflow hidden
      height 0
      padding-bottom 33.9%
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
