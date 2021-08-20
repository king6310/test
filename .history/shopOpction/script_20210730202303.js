new Vue({
    el: '#app',
    data: {
        size: [{
            content: '25cm X 1m',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }, {
            content: '50cm X 50m',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-50cm.jpg'
        }, {
            content: '7.25in X 48in',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }, {
            content: '18in X 18in',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }],

        ColourFamily: {
            Ctpf: [{
                content: 'Black/黑色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-black.jpg'
            }, {
                content: 'Blue/蓝色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-blue.jpg'
            }, {
                content: 'Brown/Tan褐色/茶色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-brown-tan.jpg'
            }, {
                content: 'Cream/Beige乳白色/米色',
                contentEn: 'cream_beige',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-cream-beige.jpg'
            }, {
                content: 'Green/绿色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-green.jpg'
            }, {
                content: 'Grey/灰色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-grey.jpg'
            }, {
                content: 'Orange/Rust橙色/铁锈色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-orange-rust.jpg'
            }, {
                content: 'Purple/紫色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-purple.jpg'
            }, {
                content: 'Red/Pink红色/粉色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-red-pink.jpg'
            }, {
                content: 'Teal/青色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-teal.jpg'
            }, {
                content: 'Yellow/Gold黄色/金色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-yellow-gold.jpg'
            }],
            lvt: [{
                content: 'Yellow/Gold黄色/金色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-yellow-gold.jpg'
            }, {
                content: '红色/粉色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-red-pink.jpg'
            }, {
                content: 'Purple/紫色',
                img: 'https://demo.interface .cn/template/en/static/images/images/pd_color-purple.jpg'
            }, {
                content: 'Orange/Rust橙色/铁锈色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-orange-rust.jpg'
            }, {
                content: 'Grey/灰色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-grey.jpg'
            }, {
                content: 'Green/绿色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-green.jpg'
            }, {
                content: 'Cream/Beige乳白色/米色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-cream-beige.jpg'
            }, {
                content: 'Brown/Tan褐色/茶色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-brown-tan.jpg'
            }, {
                content: 'Teal/青色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-teal.jpg'
            }, {
                content: 'Black/黑色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-black.jpg'
            }]
        },
        Pattern: ['混凝土', '编织', '木材', '石纹', '纯色', '金属'],
        PatternType: [{
            content: '立体图案',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_pattern-solid.jpg'
        }, {
            content: '线性图案',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_pattern-stripes.jpg'
        }, {
            content: '天然图案',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_pattern-organic.jpg'
        }, {
            content: '纹理图案',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_pattern-textured.jpg'
        }, {
            content: '几何图案',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_pattern-geometric.jpg'
        }],
        SizeDescription: [{
            content: '50cm X 50cm',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-50cm.jpg'
        }, {
            content: '1m X 1m',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-1m.jpg'
        }, {
            content: '25cm x 1m',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }],

        checkedItems: [], //过滤结果

        textItems: '',

        colorItems: [], //颜色系列

        searchTermAll: [],

        searchTerm: '', //搜索和颜色

        quickship: '',

        pattern_key: [], //图案类型

        tile_key: [], //尺寸说明

        i2: '',
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