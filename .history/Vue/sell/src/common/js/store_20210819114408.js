export function saveToLocal (id, key, value) {
    let seller = localStorage.__seller__;
    if (!seller) {
        seller = {};
        seller[id] = {};
        seller[id][key] = value;
    } else {
        seller = JSON.parse(seller);
    }
    localStorage.__seller__
};

export function loadFromLocal (id, key, def) {

};
