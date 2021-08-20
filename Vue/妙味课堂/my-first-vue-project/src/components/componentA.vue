<template>
  <div class="componentA">
    <h1>{{ msg }}</h1>
    <h1>{{ msgfromfather }}</h1>
    <button @click="onClickMe">open mouse!</button>
  </div>
</template>

<script>
export default {
  name: 'componentA',
  data () {
    return {
      msg: 'hello from component a!'
    }
  },
  props: ['msgfromfather'],
  methods: {
    onClickMe () {
      //console.log(this.msgfromfather);
      this.$emit('child-tell-me-something', this.msg);
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
</style>
