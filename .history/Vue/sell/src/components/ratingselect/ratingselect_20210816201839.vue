<template>
    <div class="ratingselect">
        我是ratings
    </div>
</template>

<script type="text/ecmascript-6">
  export default {
    name: 'ratingselect',
    props: {
        ratings: {
          type: Array,
          default () {
            return [];
          }
        },
        selectType: {
          
        }
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>