import Vue from 'vue'
import Vuex from 'vuex'
import storage from './storage'
import state from './state'
import mutations from './mutations'

Vue.use(Vuex)

export default new Vuex.Store({
  storage,
  state,
  mutations
})
