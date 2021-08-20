<template>
    <div class="ratingselect">
      <div class="rating-type border-1px">
        <span class="block positive">
          {{desc.all}}<small class="count">57</small>
        </span>
        <span class="block positive">
          {{desc.positive}}<small class="count">57</small>
        </span>
        <span class="block negative">
          {{desc.negative}}<small class="count">57</small>
        </span>
      </div>
      <div class="switch">
        <span class="icon-check_circle"></span>
        <span class="text">只看有内容的评价</span>
      </div>
    </div>
</template>

<script type="text/ecmascript-6">
  // const POSITIVE = 0;
  // const NEGATIVE = 1;
  const ALL = 2;
  
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
          type: Number,
          default: ALL
        },
        onlyContent: {
          type: Boolean,
          default: false
        },
        desc: {
          type: Object,
          default () {
            return {
              all: '全部',
              positive: '满意',
              negative: '不满意'
            };
          }
        }
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
  @import '~common/stylus/mixin';

  .ratingselect
    .rating-type
      padding 18px 0
      margin 0 18px
      border-1px(rgba(7, 17, 27, 0.1))
      font-size 0
      .block
        display inline-block
        padding 8px 12px
        margin-right 8px
        border-radius 1px
        font-size 12px
        color rgb(77, 85 93)
        .count
          margin-left 2px
          line-height 16px
          font-size 8px
                      color #fff
        &.positive
          background rgba(0, 160, 220, 0.2)
          &.active
            background rgba(0, 160, 220, 1)
        &.negative
          background rgba(77, 85, 93, 0.2) 
</style>