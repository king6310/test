<template>
    <div class="shopcart">
      <div class="content">
        <div class="content-left"></div>
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
      ..content-r
      .content-right
        width 105
        flex 0 0 105
</style>