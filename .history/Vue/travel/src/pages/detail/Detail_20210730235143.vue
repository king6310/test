<template>
  <div>
      <DetailBanner />
      <DetailHeader />
      <div class="content">
        <DetailList />
      </div>
  </div>
</template>

<script>
import DetailBanner from './components/Banner'
import DetailHeader from './components/Header'
import DetailList from './components/List.vue'
export default {
  name: 'Detail',
  components: {
    DetailBanner,
    DetailHeader,
    DetailList
  }
}
</script>

<style lang="stylus" scoped>
  .content
    height 50rem
</style>
