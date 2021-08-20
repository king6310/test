<template>
    <div>
        <div class="recommend-title">周末去哪儿</div>
        <ul class="item-ul">
            <li
                class="item"
                v-for="item of recommendList"
                :key="item.id"
            >
                <div class="item-img-wrapper">
                  <img class="item-img" :src="item.imgUrl">
                </div>
                <div class="item-info">
                    <p class="item-title">{{ item.title }}</p>
                    <p class="item-desc">{{ item.desc }}}</p>
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
    .item-ul
      background #eee
      .item
        margin-bottom .1rem
        background #fff
        .item-img-wrapper
          overflow hidden
          height 0
          padding-bottom 33.9%
          .item-img
              width 100%
        .item-info
            padding: .14rem .2rem .2rem;
            .item-title
                padding-right 1.4rem
                line-height .48rem
                font-size .28rem
                color #212121
                ellipsis()
            .item-desc
                padding-right 1.4rem
                line-height .42rem
                font-size .24rem
                color #616161
                ellipsis()
</style>
