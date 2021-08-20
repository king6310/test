<template>
    <div class="ratingselect">
        我是ratings
    </div>
</template>

<script type="text/ecmascript-6">
  const POSITIVE = 
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
          type: Number
        }
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>