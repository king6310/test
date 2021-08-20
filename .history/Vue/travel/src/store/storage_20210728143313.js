const STORAGE_KEY = 'todos-vuejs'
export default {
  fetch: function (items) {
    return JSON.parse(localStorage.getItem(STORAGE_KEY)[items] || '[]')
  },
  save: function (items) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(items))
  }
}
