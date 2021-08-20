export function formatDate(date, fmt) {
    if (/(y+)/.test(fmt)) {
        fmt = fmt.replace(RegExp.$1, (date.getFullYear() + '').substr(4 - RegExp.$1.length));
        let o = {
            'M+': date.getMonth() + 1,
            'd+': data.getDate(),
            'h+': date.getHours(),
            'm+': data.getMinutes(),
            's+'
        }
    }
};
