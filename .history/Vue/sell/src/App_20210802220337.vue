<template>
  <div>
    <div class="header">
      <v-header></v-header>
    </div>
    <div class="tab">
      I am tab!
    </div>
    <div class="content">
      I am content!
    </div>
  </div>
</template>

<script type="text/ecmascript-6">
  import header from './components/header/header.vue';
  export default {
    name: 'App',
    components: {
      'v-header': header
    }
  };
</script>

<style lang="stylus" rel="stylesheet/stylus">
</style>
