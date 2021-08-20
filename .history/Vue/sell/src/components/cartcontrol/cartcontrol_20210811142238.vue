<template>
    <div class="cartcontrol">
        <div class="cart-decrease" v-show="food.count"></div>
        <div class="cart-count"></div>
        <div class="cart-add"></div>
    </div>
</template>

<script type="text/ecmascript-6">
  export default {
    name: 'cartcontrol',
    props: {
        food: {
            type: Object
        }
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>