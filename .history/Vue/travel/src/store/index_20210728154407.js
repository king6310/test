import Vue from 'vue'
import Vuex from 'vuex'
import store from './store'
import state from './state'
import mutations from './mutations'

Vue.use(Vuex)

export default new Vuex.Store({
  store,
  state,
  mutations
})
