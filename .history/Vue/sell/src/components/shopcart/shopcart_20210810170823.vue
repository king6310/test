<template>
    <div class="shopcart">
      <div class="content">
        <div class="content-left">
          <div class="logo-wrapper">
            <div class="logo">
              <span class="icon-shopping_cart"></span>
            </div>
          </div>
          <div class="price"></div>
          <div class="desc"></div>
        </div>
        <div class="content-right"></div>
      </div>
    </div>
</template>

<script type="text/ecmascript-6">
  export default {
    name: 'shopcart'
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
  .shopcart
    position fixed
    left 0
    bottom 0
    z-index 50
    width 100%
    height 48
    background #000
    .content
      display flex
      width 100%
      height 48px
      overflow hidden
      .content-left
        flex 1
      .content-right
        width 105px
        flex 0 0 105px
</style>