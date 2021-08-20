<template>
    <div class="ratingselect">
        我是ratings
    </div>
</template>

<script type="text/ecmascript-6">
  const POSITIVE = 0;
  const NEGATIVE = 1;
  const ALL = 0;
  
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