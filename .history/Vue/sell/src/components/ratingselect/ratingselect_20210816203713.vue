<template>
    <div class="ratingselect">
      <div class="rating-type">
        <span>{{desc.all}}</span>
        <span>{{desc.positive}}</span>
        <span>{{desc.negative}}</span>
      </div>
      <div class="switch">
        <span class="icon-check_circle"></span>
        <span class="text">只看有内容的评价</span>
      </div>
    </div>
</template>

<script type="text/ecmascript-6">
  const ALL = 2;
  
  export default {
    name: 'ratingselect',
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>