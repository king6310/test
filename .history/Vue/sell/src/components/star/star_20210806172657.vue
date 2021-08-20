<template>
    <div class="star" :class="starType">
        <span
            class="star-item"
            v-for="(itemClass, index) in itemClasses"
            :key="index"
            :class="itemClass"

        >
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
    }
    ,
}
</script>

<style lang="stylus" rel="stylesheet/stylus">

</style>