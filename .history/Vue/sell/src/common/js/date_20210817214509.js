export function formatDate(date, fmt) {
    if (/(y+)/.test(fmt)) {
        console.log(/(y+)/.test(fmt));
        fmt = fmt.replace(RegExp.$1, (date.getFullYear() + '').substr(4 - RegExp.$1.length));
    }
};
