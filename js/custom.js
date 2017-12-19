$(function(){
    var screen_img = [
      'restoration.gif',
      'data.gif',
      'english.gif',
      'customize.gif',
      'onetag.gif'
    ];

    var connect_page_id_iframe = [
        '5a38ebe20594089632038ec2',
        '5a38e4cc059408963f1bb1a1',
        '5a38de8f0594089634261853',
        '5a38de8f0594089634261853',
        '5a38de8f0594089634261853',
        '5a38de8f0594089634261853'
    ];

    var efo_server = 'https://admin.botchan.chat:3030';

    //frame header
    $('#header .mobile_demo_box .start_chat_btn').on('click', function () {
        var iframe_chat = '<iframe class="wc-webchat" id="wc-webchat" src="' + efo_server + '/efo?connect_page_id=5a38f794059408963e1ce55d"></iframe>';
        $('#header .mobile_demo_box .efo_demo').html(iframe_chat);
        setTimeout(function () {
            var wc_irame = document.getElementById("wc-webchat").contentWindow;

            wc_irame.postMessage({'new_conversation_flg' : 1}, efo_server);
            wc_irame.postMessage({'maximize_flg' : 1}, efo_server);
        }, 1000);
    });

    //frame device
    $('#bg3 .bg3_item li').on('click', function () {
        $('#bg3 .bg3_item li').removeClass('active');
        $(this).addClass('active');

        var connect_page_id = connect_page_id_iframe[$(this).index()];

        // var iframe_pc = '<iframe class="wc-webchat1" id="wc-webchat1" src="http://192.168.10.10:3030/efo?connect_page_id=5a1533249a89201ada6de403"></iframe>';
        // $('#bg3 .service_view .efo_demo_pc').append(iframe_pc);

        var iframe_mobile = '<iframe class="wc-webchat2" id="wc-webchat2" src="' + efo_server + '/efo?connect_page_id=' + connect_page_id + '"></iframe>';
        $('#bg3 .service_view .efo_demo_mobile').html(iframe_mobile);

        setTimeout(function () {
            console.log($("#wc-webchat2"));
            var wc_irame2 = document.getElementById("wc-webchat2").contentWindow;

            wc_irame2.postMessage({'new_conversation_flg' : 1}, efo_server);
            wc_irame2.postMessage({'maximize_flg' : 1}, efo_server);
        }, 1000);
    });

    $('.section.bg4 .bg4_item.left li p').on('click', function () {
        $('.section.bg4 .bg4_item.left li').removeClass('active');
        var info_item = $(this).parents('.bg4_item_cotainer').find('.info_item');

        $('.section.bg4 .screen_img').attr('src', '/images/bg4/' + screen_img[$(this).parent().index()]);
        if($(this).parent().index() == 0) {
            info_item.show();
        } else {
            info_item.hide();
        }
        $(this).parent().addClass('active');
    });

    setSizeBg1();
    resetHeader();
    setSixeDemoBg4();
    setDemoOption();



    setTimeout(function () {
        resetPriceForm();
    }, 100);


    $('a[href^=#]').click(function() {
        var speed = 400;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - $('header').height();
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });

    $('#hmenu').on('click', function(){
        if($('#header_nav').css('display') == 'none') {
            $('#header_nav').show();
        } else {
            $('#header_nav').hide();
        }
    });
    $('#header_nav li').on('click', function(){
        var windown_w = $(window).width();
        if(windown_w <= 760) {
            $('#header_nav').hide();
        }
    });

    // $('#hmenu').on('click', function(){
    //     if($(this).hasClass('tcon-transform')){
    //         $('#header_nav').hide();
    //     } else {
    //         $('#header_nav').show();
    //     }
    // });
    !function(n,r){"function"==typeof define&&define.amd?define(r):"object"==typeof exports?module.exports=r():n.transformicons=r()}(this||window,function(){"use strict";var n={},r="tcon-transform",t={transform:["click"],revert:["click"]},e=function(n){return"string"==typeof n?Array.prototype.slice.call(document.querySelectorAll(n)):"undefined"==typeof n||n instanceof Array?n:[n]},o=function(n){return"string"==typeof n?n.toLowerCase().split(" "):n},f=function(n,r,f){var c=(f?"remove":"add")+"EventListener",u=e(n),s=u.length,a={};for(var l in t)a[l]=r&&r[l]?o(r[l]):t[l];for(;s--;)for(var d in a)for(var v=a[d].length;v--;)u[s][c](a[d][v],i)},i=function(r){n.toggle(r.currentTarget)};return n.add=function(r,t){return f(r,t),n},n.remove=function(r,t){return f(r,t,!0),n},n.transform=function(t){return e(t).forEach(function(n){n.classList.add(r)}),n},n.revert=function(t){return e(t).forEach(function(n){n.classList.remove(r)}),n},n.toggle=function(t){return e(t).forEach(function(t){n[t.classList.contains(r)?"revert":"transform"](t)}),n},n});
    transformicons.add(".tcon");
});

$(window).resize(function () {
    setTimeout(function () {
        var windown_w = $(document).width();
        if(windown_w > 760) {
            $('#header_nav').show();
        }
        setSizeBg1();
        resetPriceForm();
        resetHeader();
        setSixeDemoBg4();
        setDemoOption();
    }, 100);

});

function setSixeDemoBg4() {
    setTimeout(function () {
        var windown_w = $(window).width();
        if(windown_w <= 760) {
            var screen_device_w = $('.bg4_item_cotainer .screen_device').innerWidth();

            $('.bg4_item_cotainer .screen_img').css({
                'right' : ((windown_w - screen_device_w + 35) / 2) + 'px'
            });
            // set interface bg5
            $('.section.bg5 .next img').attr("src", '/images/bg5/arrow_down.png');
            $('.section.bg5 img.step_img').css("width", '60%');
        } else {
            $('.bg4_item_cotainer .screen_img').attr('style', null);
        }
    }, 300);
}

function resetPriceForm() {
    var table_w = $('.bg6').find('table').innerWidth(),
        table_icon = $('.bg6').find('table .table_icon_box'),
        table_icon_w = table_icon.innerWidth();

    var left = (table_w / 2) - (table_icon_w / 2) - 5;
    table_icon.css('left', left + 'px');
}

function resetHeader() {
    //set magrin top chat demo box
    var windown_w = $(window).width();
    if(windown_w <= 760) {
        var mobile_demo_box_w = $('#header .mobile_demo_box').width();
        var header_demo_w = $('#header .header_demo').innerWidth();
        $('#header .header_demo').css('right', (mobile_demo_box_w - header_demo_w + 45) / 2);
        $('#header .start_chat_btn').css('right', (header_demo_w - 280 ));
    } else {
        $('#header .header_demo').attr('style', null);
        $('#header .start_chat_btn').attr('style', null);
    }
}

function setDemoOption() {
    var windown_w = $(window).width();
    var iframe_pc = $('#bg3 .efo_demo_pc');
    var iframe_mobile = $('#bg3 .efo_demo_mobile');

    if(windown_w <= 760 ) {
        if($('#bg3 .bg3_item_box').length <= 1) {
            //move element
            var bg3_item_box = $('#bg3 .bg3_item_box').clone();
            bg3_item_box.find('.bg3_item.left').remove();
            $('#bg3').append(bg3_item_box);

            $('#bg3 .bg3_item_box').first().find('.bg3_item.right').hide();
        }
        //set space iframe
        var frame_img_w = $('#bg3 .service_mobile img').innerWidth();
        iframe_mobile.css('right', (((windown_w - frame_img_w) / 2) + 11)+ 'px');
    } else {
        $('#bg3 .bg3_item_box').first().find('.bg3_item.right').show();
        if($('#bg3 .bg3_item_box').length > 1) {
            $('#bg3 .bg3_item_box').last().remove();
        }
        //iframe
        iframe_pc.attr('style', null);
        iframe_mobile.attr('style', null);
    }
}

function setSizeBg1() {
    var box_container_w = $('.section.bg1 .box_container').width();
    $('.section.bg1 .box_container .box_item').css('width', Math.floor(box_container_w / 3) - 14);

    var windown_w = $(window).width();
    if(windown_w <= 760 ) {
        var box_item_max_h = null;
        $('.section.bg1 .box_container .box_item').each(function(i, e) {
            if(!box_item_max_h || box_item_max_h < $(this).innerHeight()) {
                box_item_max_h = $(this).innerHeight();
            }
        });
        if(box_item_max_h) {
            $('.section.bg1 .box_container .box_item p').css('height', box_item_max_h);
        }
    } else {
        $('.section.bg1 .box_container .box_item p').attr('style', null);
    }
}