<template>
    <div class="star">
        <span></span>
    </div>
</template>

<script type="text/ecmascript-6">
export default {
    name: 'star',
    computed: {
        starType () {
            return 'star-' + this.zise;
        }
    }
}
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>