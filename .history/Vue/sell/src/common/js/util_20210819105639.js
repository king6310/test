/**
 * 解析url参数
 * @example ?id=12345&a=b
 * @returns Object {id : 12345, a : b}
*/
export function urlParse(date, fmt) {
    let url = window.location.search;
    let obj = {};
    let reg = /[?&][^?&]+=[^?&]+/g;
    let arr = url.match(reg);
    // ['?id=12345', '&a=b']
    if (arr) {
        arr.forEach((item) => {
            let tempArr = item.substring(1).split('=');
            let key = decodeURIComponent(tempArr[0]);
            let val = (tempArr[1]);
        });
    }
};
