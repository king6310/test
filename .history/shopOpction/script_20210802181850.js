var v = new Vue({
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
        QuickShip: [{
            type: 6,
            content: 'QuickShip'
        }],
        checkedItems: [], //过滤结果
        colorItems: [], //颜色系列
        pattern_key: [], //图案类型
        tile_key: [], //尺寸说明
        dataList: {
            data: [],
            start: 0
        }
    },
    methods: {
        deleteItem(index) {
            this.checkedItems.splice(index, 1);
        },
        getLinstInfo () {
            var $this = this;
            $this.dataList.start++;
                        // $.ajax({
            //     url: "./search_carpet_tile.json",
            //     data: {},
            //     type: "GET",
            //     dataType: "json",
            //     success: function (data) {
            //         var data = data.results;
            //         if(data.length > 0){
            //             $this.dataList.data = data;
            //             $this.dataList.start++;

            //             console.log( $this.dataList)
            //         }
            //     }
            // });
        }
    },
    watch: {
        checkedItems(val, oldVal) {
            console.log(val)
            var $this = this;
                $this.tile_key = [];
                $this.colorItems = [];

            val.filter(function(task){
                if(task.type == 1) {
                    $this.tile_key.push(task.content) 
                }
                else if(task.type == 2) {
                    $this.colorItems.push(task.content)
                }
            }).length;

            this.getLinstInfo();
        }
    }
});