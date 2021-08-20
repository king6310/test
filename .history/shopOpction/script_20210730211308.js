new Vue({
    el: '#app',
    data: {
        size: [{
            type:1,
            content: '25cm X 1m',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }, {
            type:1,
            content: '50cm X 50m',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-50cm.jpg'
        }, {
            type:1,
            content: '7.25in X 48in',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }, {
            type:1,
            content: '18in X 18in',
            img: 'https://demo.interface.cn/template/en/static/images/images/pd_size-25cm-1m.jpg'
        }],

        ColourFamily: {
            Ctpf: [{
                type:2,
                content: 'Black/黑色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-black.jpg'
            }, {
                type:2,
                content: 'Blue/蓝色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-blue.jpg'
            }, {
                type:2,
                content: 'Brown/Tan褐色/茶色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-brown-tan.jpg'
            }, {
                type:2,
                content: 'Cream/Beige乳白色/米色',
                contentEn: 'cream_beige',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-cream-beige.jpg'
            }, {
                type:2,
                content: 'Green/绿色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-green.jpg'
            }, {
                type:2,
                content: 'Grey/灰色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-grey.jpg'
            }, {
                type:2,
                content: 'Orange/Rust橙色/铁锈色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-orange-rust.jpg'
            }, {
                type:2,
                content: 'Purple/紫色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-purple.jpg'
            }, {
                type:2,
                content: 'Red/Pink红色/粉色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-red-pink.jpg'
            }, {
                type:2,
                content: 'Teal/青色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-teal.jpg'
            }, {
                type:2,
                content: 'Yellow/Gold黄色/金色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-yellow-gold.jpg'
            }],
            lvt: [{
                type:2,
                content: 'Yellow/Gold黄色/金色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-yellow-gold.jpg'
            }, {
                type:2,
                content: '红色/粉色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-red-pink.jpg'
            }, {
                type:2,
                content: 'Purple/紫色',
                img: 'https://demo.interface .cn/template/en/static/images/images/pd_color-purple.jpg'
            }, {
                type:2,
                content: 'Orange/Rust橙色/铁锈色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-orange-rust.jpg'
            }, {
                type:2,
                content: 'Grey/灰色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-grey.jpg'
            }, {
                type:2,
                content: 'Green/绿色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-green.jpg'
            }, {
                type:2,
                content: 'Cream/Beige乳白色/米色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-cream-beige.jpg'
            }, {
                type:2,
                content: 'Brown/Tan褐色/茶色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-brown-tan.jpg'
            }, {
                type:2,
                content: 'Teal/青色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-teal.jpg'
            }, {
                type:2,
                content: 'Black/黑色',
                img: 'https://demo.interface.cn/template/en/static/images/images/pd_color-black.jpg'
            }]
        },
        Pattern: [{
            type: 3,
            content: '混凝土'
        }, {
            type: 3,
            content: '编织'
        }, {
            type: 3,
            content: '木材'
        }, {
            type: 3,
            content: '石纹'
        }, {
            type: 3,
            content: '纯色'
        }, {
            type: 3,
            content: '金属'
        }],
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
        ischeck: 0
        // textItems: '',
        // colorItems: [], //颜色系列
        // searchTermAll: [],
        // searchTerm: '', //搜索和颜色
        // quickship: '',
        // pattern_key: [], //图案类型
        // tile_key: [], //尺寸说明
    },
    methods: {
        deleteItem(index) {
            this.checkedItems.splice(index, 1);
        }
    },
    watch: {
        checkedItems(val, oldVal) {
            console.log(val)
            var size = [];
            var ctpf = [];
            val.filter(function(task){
                if(task.type == 1) {
                    size.push(task.content) 
                }
                else if(task.type == 2) {
                    ctpf.push(task.content)
                }
            }).length;

            console.log(size)
            console.log(ctpf)
        }
    }
});