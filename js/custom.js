$(function(){
    var screen_img = [
      'restoration.gif',
      'data.gif',
      'english.gif',
      'customize.gif',
      'onetag.gif'
    ];

    //frame header
    $('#header .mobile_demo_box .start_chat_btn').on('click', function () {
        var iframe_chat = '<iframe class="wc-webchat" src="http://192.168.10.10:3030/efo?connect_page_id=5a1533249a89201ada6de403"></iframe>';
        $('#header .mobile_demo_box .efo_demo').append(iframe_chat);
        setTimeout(function () {
            var wc_irame = document.getElementById("wc-webchat").contentWindow;

            wc_irame.postMessage({'new_conversation_flg' : 1}, 'http://192.168.10.10:3030');
            wc_irame.postMessage({'maximize_flg' : 1}, 'http://192.168.10.10:3030');
        }, 1000);
    });

    //frame device
    $('#bg3 .bg3_item li').on('click', function () {
        var iframe_chat = '<iframe class="wc-webchat1" id="wc-webchat1" src="http://192.168.10.10:3030/efo?connect_page_id=5a1533249a89201ada6de403"></iframe>';
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

    resetHeader();
    setSixeDemoBg4();
    setDemoOption();



    setTimeout(function () {
        resetPriceForm();
    }, 100);
});

$(window).resize(function () {
    setTimeout(function () {
        var windown_w = $(document).width();
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
    if(windown_w <= 760 ) {
        if($('#bg3 .bg3_item_box').length <= 1) {
            var bg3_item_box = $('#bg3 .bg3_item_box').clone();
            bg3_item_box.find('.bg3_item.left').remove();
            $('#bg3').append(bg3_item_box);

            $('#bg3 .bg3_item_box').first().find('.bg3_item.right').hide();
        }
    } else {
        $('#bg3 .bg3_item_box').first().find('.bg3_item.right').show();
        if($('#bg3 .bg3_item_box').length > 1) {
            $('#bg3 .bg3_item_box').last().remove();
        }
    }
}