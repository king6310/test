const STORAGE_KEY = 'todos-vuejs'
export default {
  fetch: function (items) {
    var s = JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]')
    return items ? s[items] : s
  },
  save: function (items) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(items))
  }
}
