import Vue from 'vue'
import Vuex from 'vuex'
import State from 'state'

Vue.use(Vuex)

export default new Vuex.Store({
  state: State
  mutations: {
    changeCity (state, city) {
      state.city = city
      Storage.save(state)
    }
  }
})
