$(function(){
    var screen_img = [
      'restoration.gif',
      'data.gif',
      'english.gif',
      'customize.gif',
      'onetag.gif'
    ];
    $('#header .mobile_demo_box .start_chat_btn').on('click', function () {
        var iframe_chat = '<iframe class="wc-webchat" id="wc-webchat" src="http://192.168.10.10:3030/efo?connect_page_id=5a1533249a89201ada6de403"></iframe>';
        $('#header .mobile_demo_box .efo_demo').append(iframe_chat);
        setTimeout(function () {
            var wc_irame = document.getElementById("wc-webchat").contentWindow;

            wc_irame.postMessage({'new_conversation_flg' : 1}, 'http://192.168.10.10:3030');
            wc_irame.postMessage({'maximize_flg' : 1}, 'http://192.168.10.10:3030');
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

    var windown_w = $(document).width();
    resetHeader(windown_w);
    setSixeDemoBg4();



    setTimeout(function () {
        resetPriceForm();
    }, 100);
});

$(window).resize(function () {
    setTimeout(function () {
        var windown_w = $(document).width();
        resetPriceForm();
        resetHeader(windown_w);
        setSixeDemoBg4();
    }, 100);

});

function setSixeDemoBg4() {
    // var screen_device_w = $('.bg4_item_cotainer .screen_device').innerWidth();
    // var screen_device_h = $('.bg4_item_cotainer .screen_device').innerHeight();
    // $('.bg4_item_cotainer .screen_img').css({
    //     'width' : (screen_device_w - 50) + 'px',
    //     'height' : (screen_device_h - 50) + 'px',
    // });
}

function resetPriceForm() {
    var table_w = $('.bg6').find('table').innerWidth(),
        table_icon = $('.bg6').find('table .table_icon_box'),
        table_icon_w = table_icon.innerWidth();

    var left = (table_w / 2) - (table_icon_w / 2) - 5;
    table_icon.css('left', left + 'px');
}

function resetHeader(windown_w) {
    //set magrin top chat demo box
    if(windown_w <= 760) {
        var mobile_demo_box_w = $('#header .mobile_demo_box').innerWidth();
        var header_demo_w = $('#header .header_demo').innerWidth();
        $('#header .header_demo').css('right', (mobile_demo_box_w - header_demo_w) / 2);
        $('#header .start_chat_btn').css('right', (mobile_demo_box_w - header_demo_w ) / 2);
    } else {
        $('#header .header_demo').attr('style', null);
        $('#header .start_chat_btn').attr('style', null);
    }
}