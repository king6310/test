export function saveToLocal (id, key, value) {
    let seller = localStorage.__seller__;
    if (!seller) {
        seller = {};
        seller[id] = {};
        seller[id][key] = value;
    }

};

export function loadFromLocal (id, key, def) {

};
