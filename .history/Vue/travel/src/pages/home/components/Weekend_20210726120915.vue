<template>
    <div>
        <div class="recommend-title">周末去哪儿</div>
        <ul class="item-ul">
            <li
                class="item"
                v-for="item of list"
                :key="item.id"
            >
                <div class="item-img-wrapper">
                  <img class="item-img" :src="item.imgUrl">
                </div>
                <div class="item-info">
                    <p class="item-title">{{ item.title }}</p>
                    <p class="item-desc">{{ item.desc }}</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
  name: 'HomewWeekend',
  props: {
    list: Array
  }
}
</script>

<style lang="stylus" scoped>
    @import '~styles/mixins.styl';
    .recommend-title
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
          padding-bottom 37.09%
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
