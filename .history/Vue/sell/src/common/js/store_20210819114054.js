export function saveToLocal (id, key, value) {
    let seller = localStorage._seller_;
    if (!seller) {
        seller = {};
        seller[id] = {};
        seller[id][key]
    }

};

export function loadFromLocal (id, key, def) {

};
