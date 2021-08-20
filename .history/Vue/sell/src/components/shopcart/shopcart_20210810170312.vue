<template>
    <div class="shopcart">
      <div class="content">
        <div class="content-left">
          <div class="logo-wrapper"></div>
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
    .content
      display flex
      position absolute
      left 0
      bottom 0
      width 100%
      overflow hidden
      .content-left
        flex 1
      .content-right
        width 105px
        flex 0 0 105px
</style>