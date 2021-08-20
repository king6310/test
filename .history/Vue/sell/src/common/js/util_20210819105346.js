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
    //['?id=12345', '&a=b']
    if (arr) {
        arr.forEach((item) => {

        });
    }
};
