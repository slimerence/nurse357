window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

// 导入 bulma 所需的Plugin
import '../../../assets/js/bulma/accordion';

// 导入 Slideout 库
import Slideout from 'slideout';

// 导入 fastclick 库
import fastclick from 'fastclick';

// 导入FancyBox库
require('!style-loader!css-loader!@fancyapps/fancybox/dist/jquery.fancybox.css')
require('@fancyapps/fancybox');

// 导入 videojs 库
require('!style-loader!css-loader!video.js/dist/video-js.css');
import videojs from 'video.js';



window.Vue = require('vue');
// 加载Element UI 库
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
// import { Loading } from 'element-ui';
Vue.use(ElementUI);

// 导入子定义的 vue js editor组件
Vue.component('CatalogViewer', require('../../../assets/js/components/catalog-viewer/catalogviewer.vue'));
Vue.component('VuejsSlider', require('../../../assets/js/components/vuejs-slider/VuejsSlider.vue'));
Vue.component('StripePayment', require('../../../assets/js/components/payments/stripe/StripePayment.vue'));

fastclick.attach(document.body);

/**
 * 全局可用的通知函数
 * @param vm
 * @param type
 * @param title
 * @param msg
 * @private
 */


window._notify = function(vm, type, title, msg){
    // 显示弹出消息的方法
    vm.$notify({title:title,message:msg,type:type,position:'bottom-right'});
    return;
}

// 导航菜单的应用
let naviAppEl = document.getElementById('navigation-app');
if(naviAppEl){
    let NavigationApp = new Vue({
        el: '#navigation-app',
        data(){
            return {
                searchKeyword: '',
                result:[]
            }
        },
        methods:{
            handleSelect(item){
                window.location.href = item.uri;
            },
            querySearchAsync(queryString, cb){
                if(queryString.length < 2){
                    return;
                }
                axios.post(
                    '/api/page/search_ajax',
                    {q:queryString}
                ).then(res=>{
                    if(res.status==200 && res.data.error_no == 100){
                        // 表示找到了结果
                        cb(res.data.data.result)
                    }
                });
            }
        }
    });
}

if(document.getElementById('menu')){
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
    });

    document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
    });
}

// 模仿京东的目录浏览控件
if(document.getElementById('catalog-viewer-app')){
    let catalogViewerApp = new Vue({
        el: '#catalog-viewer-app',
        data(){
            return {

            }
        }
    });
}

$(document).ready(function(){
    // 联系我们功能
    if($('#submit-contact-us-btn').length > 0){
        let theSubmitButton = $('#submit-contact-us-btn');
        theSubmitButton.on('click',function(e){
            e.preventDefault();
            let inputs = $('input');
            let names = [];
            let values = [];
            $.each(inputs, function(idx, input){
                let theInput = $(input);
                if(theInput.attr('name')){
                    names.push(theInput.attr('name'));
                    values.push(theInput.val());
                }
            });

            theSubmitButton.addClass('is-loading');
            axios.post('/contact-us',{
                lead:{
                    name: $('#input-name').val(),
                    email: $('#input-email').val(),
                    phone: $('#input-phone').val(),
                    message: $('#input-message').val()
                }
            }).then(function(res){
                if(res.data.error_no == 100){
                    // 成功
                    $('#txt-on-success').css('display','block');
                    theSubmitButton.css('display','none');
                }else{
                    $('#txt-on-fail').css('display','block');
                }
                theSubmitButton.removeClass('is-loading');
                // 检查是否需要把最新的留言放到Testimonials中
                if($('.testimonials-list').length > 0){
                    let testimonials = $('.testimonials-list');
                    let h = '<p><span class="has-text-link">' +$('#input-name').val()+ ':</span> ' + $('#input-message').val() + '</p>';
                    testimonials.prepend($(h));
                }
            })
        });
    }
    if($('.count').length > 0 ){
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }

    if($('.slick-img').length > 0) {
        $('.slick-img').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows:false,
            focusOnSelect:true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }



});
