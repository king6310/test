new Vue({
    el: '#app',
    data: {
        filters: [{
            id: 1,
            title: 'Size',
            content: ['One-Size', 'XS', 'S', 'M', 'L', 'XL', 'XXL']
        },
        {
            id: 2,
            title: 'Color',
            content: ['White', 'Black', 'Grey', 'Purple', 'Blue', 'Green', 'Yellow', 'Orange', 'Red', 'Pink', 'Brown', 'Multicolor'],
        },
        {
            id: 3,
            title: 'Material',
            content: ['Cotton', 'Polyester', 'Rayon', 'Satin', 'Acrylic', 'Nylon', 'Velvet', 'Viscose', 'Crochet', 'Glitter', 'Lace', 'Corduroy', 'Linen', 'Metallic']
        },
        {
            id: 4,
            title: 'Price',
            content: ['']
        }
    ],
        checkedItems: []
    },
    methods: {
        deleteItem(index) {
            this.checkedItems.splice(index, 1);
        }
    },
    watch: {
        checkedItems(val, oldVal) {
          console.log(this.checkedItems)
        }
    }
});