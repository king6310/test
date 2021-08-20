<template>
    <div class="star" :class="starType">
        <spanv-for="(itemClass, index) in itemClasses" :key="index" :class="itemClass" ></spanv-for=>
    </div>
</template>

<script type="text/ecmascript-6">
export default {
    name: 'star'
}
</script>

<style lang="stylus" rel="stylesheet/stylus">

</style>