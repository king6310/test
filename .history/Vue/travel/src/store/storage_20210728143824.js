const STORAGE_KEY = 'todos-vuejs'
export default {
  fetch: function (items) {
    return items?JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]')[items]:JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]')
  },
  save: function (items) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(items))
  }
}
