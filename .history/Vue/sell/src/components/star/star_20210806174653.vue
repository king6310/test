<template>
    <div class="star" :class="starType">
</span>
    </div>
</template>

<script type="text/ecmascript-6">
export default {
    name: 'star',
    props: {
        zise: {
            type: Number
        },
        score: {
            type: Number
        }
    },
    computed: {
        starType () {
            return 'star-' + this.zise;
        }
    }
}
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>