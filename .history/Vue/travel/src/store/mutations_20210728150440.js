import Storage from 'storage'

export default {
  changeCity (state, city) {
    state.city = city
    Storage.save(state)
  }
}
