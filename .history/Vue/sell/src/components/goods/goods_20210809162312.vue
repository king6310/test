<template>
    <div class="goods">
      <div class="menu-wrapper"></div>
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
    created () {
      this.$http.get('/api/goods').then((response) => {
       response = response.body;
       if (response.errno === ERR_OK) {
         this.seller = response.data;
       }
      });
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
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
    .foods-wrapper
      flex 1
</style>