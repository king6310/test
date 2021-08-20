<template>
    <div class="goods">
      <div class="menu-wrapper">
        <ul>
          <li
            class="menu-item"
            v-for="($index, item) in goods"
            :key="$index"
            track-by="$index"
          >
            <span class="text">
              <span v-show="item.type>0" class="icon" :class="classMap[item.type]"></span>{{item.name}}
            </span>
          </li>
        </ul>
      </div>
      <div class="foods-wrapper"></div>
    </div>
</template>

<script type="text/ecmascript-6">
  const ERR_OK = 0;

  export default {
    name: 'goods',
    props: {
      seller: {
        type: Object
      }
    },
    data() {
      return {
        goods: []
      };
    },
    created () {
      this.classMap = ['decrease', 'discount', 'special', 'invoice', 'guarantee'];
      this.$http.get('/api/goods').then((response) => {
        response = response.body;
        if (response.errno === ERR_OK) {
          this.goods = response.data;
        }
      });
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
  @import '~common/stylus/mixin';
  .goods
    display flex
    position absolute
    top 174px
    bottom 46px
    width 100%
    overflow hidden
    .menu-wrapper
      flex 0 0 80px
      width 80px
      background #f3f5f7
      .menu-item
        display table
        height 54px
        width 56px
        line-height 14px
        .icon
          vertical-align: top;
          display inline-block
          width 12px
          height 12px
          margin-right 4px
          background-size 12px 12px
          background-repeat no-repeat
          &.decrease
            bg-image('decrease_1')
          &.discount
            bg-image('discount_1')
          &.guarantee
            bg-image('guarantee_1')
          &.invoice
            bg-image('invoice_1')
          &.special
            bg-image('special_1')
    .foods-wrapper
      flex 1
</style>