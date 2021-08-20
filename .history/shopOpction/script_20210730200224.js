new Vue({
    el: '#app',
    data: {
        filters: [{
            id: 1,
            title: 'Size',
            content: ['One-Size', 'XS', 'S', 'M', 'L', 'XL', 'XXL'],
        },
        {
            id: 2,
            title: 'Color',
            content: ['White', 'Black', 'Grey', 'Purple', 'Blue', 'Green', 'Yellow', 'Orange', 'Red', 'Pink', 'Brown', 'Multicolor'],
            color: ['linear-gradient(45deg, rgba(247,250,255,1) 0%, rgba(255,255,255,1) 50%)', '#292c36', '#929abe', '#8667f7','#5c9dff', '#9bec3e', '#ffe761', '#ffbc58', '#ff6f6f', '#ff74c0', '#c59864', ' linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%)']
        },
        {
            id: 3,
            title: 'Material',
            content: ['Cotton', 'Polyester', 'Rayon', 'Satin', 'Acrylic', 'Nylon', 'Velvet', 'Viscose', 'Crochet', 'Glitter', 'Lace', 'Corduroy', 'Linen', 'Metallic'],
        },
        {
            id: 4,
            title: 'Price'
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