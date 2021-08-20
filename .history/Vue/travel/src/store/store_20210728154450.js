const STORAGE_KEY = 'todos-vuejs'
export default {
  fetch: function () {
    try {
      return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]')
    } catch (e) {}
  },
  save: function (items) {
    try {
      localStorage.setItem(STORAGE_KEY, JSON.stringify(items))
    } catch (e) {}
  }
}
