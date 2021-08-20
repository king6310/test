import Vue from 'vue'
import Vuex from 'vuex'
import Storage from './storage'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    city: Storage.fetch() || '上海'
  },
  mutations: {
    changeCity (state, city) {
      state.city = city
      Storage.save(state)
    }
  }
})
