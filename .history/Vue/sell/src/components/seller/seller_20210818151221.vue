<template>
    <div class="seller">
      <div class="seller-content">
        <div class="overview">
          <h1 class="title">{{seller.name}}</h1>
          <div class="desc">
            <star :size="36" :score="seller.score"></star>
            <span class="text">({{seller.ratingCount}})</span>
          </div>
        </div>
      </div>
    </div>
</template>

<script type="text/ecmascript-6">
  import star from 'components/star/star';

  export default {
    name: 'seller',
    props: {
      seller: {
        type: Object
      }
    },
    components: {
      star
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
  .seller
    position absolute
</style>