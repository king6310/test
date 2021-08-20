<template>
  <div id="app">
    <h1 v-html="title"></h1>
    <input v-model="newItem" @keyup.enter="addNew"><br/>
    <ul style="display: inline-block;">
      <li v-for="v in items" :key="v.id" :class="{finished:v.isFinished}" @click="toggleFinish(v)">
        {{v.label}}
      </li>
    </ul>
    <p>child tells me: {{ childWords }}</p>
    <ComponentA msgfromfather='you die!' v-on:child-tell-me-something='listenToMyBoy'  />
  </div>
</template>

<script>
import Store from './store';
import ComponentA from './components/componentA';

export default {
  name: 'App',
  data () {
    return {
      title: '<font color="red">this is a todo list</font>',
      items: Store.fetch(),
      newItem: '',
      childWords: ''
   }
  },
  components: {
    ComponentA
  },
  watch: {
    items: {
      handler (items) {
        Store.save(items);
      },
      deep: true
    }
  },
  methods: {
    toggleFinish (item) {
      item.isFinished = !item.isFinished
    },
    addNew () {
      this.items.push({
        label: this.newItem,
        isFinished: false
      })
      this.newItem='';
    },
    listenToMyBoy (msg) {
      // console.log(msg);
      this.childWords = msg;
    }
  }
  
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.finished{
  color: red;
}
</style>
