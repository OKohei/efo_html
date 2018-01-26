$(function(){
    var screen_img = [
      'restoration.gif',
      'data.gif',
      'english.gif',
      'customize.gif',
      'onetag.gif'
    ];

    var connect_page_id_iframe = [
        '5a38f794059408963e1ce55d',
        '5a38ebe20594089632038ec2',
        '5a38e4cc059408963f1bb1a1',
        '5a5352400594084a262aa15b',
        '5a38eec6059408963e1ce55c',
        '5a38de8f0594089634261853'
    ];

    var efo_server = 'https://admin.botchan.chat:3030';


    //frame header
    $('#header .mobile_demo_box .start_chat_btn').on('click', function () {
        $(this).remove();
        var iframe_chat = '<iframe class="wc-webchat" id="wc-webchat-main" src="' + efo_server + '/efo?refresh_log_flg=1&preview_flg=1&connect_page_id=5a38f794059408963e1ce55d"></iframe>';
        $('#header .mobile_demo_box .efo_demo').html(iframe_chat);
		var windown_w = $(window).width();
        if(windown_w <= 440) {
			var mobile_demo_box_w = $('#header .mobile_demo_box #mobile_demo').width();
			var mobile_demo_box_h = $('#header .mobile_demo_box #mobile_demo').height();		
			var width_view = 4*0.39*$('#header .mobile_demo_box #mobile_demo').width()/3;				
			var height_buton = 0.85*mobile_demo_box_h*4/3;
			var margin_left = 0.36*mobile_demo_box_w;
			var margin_right = 0.242*mobile_demo_box_w;
			var margin_top = 0.15*mobile_demo_box_h;
		
			$('#wc-webchat-main').css('width',width_view);
			$('#wc-webchat-main').css('height',height_buton);
			$('#wc-webchat-main').css('right',2);
			$('#wc-webchat-main').css('left',2);
			$('#wc-webchat-main').css('top',margin_top);
			$('.efo_demo').css('height',mobile_demo_box_h);
			$('.efo_demo').css('left',margin_left);
		}
    });

    //frame device
	$('.service_view_input_search').on('change', function () {
		console.log($(this).val());
		var iframe_pc_input = '<iframe class="wc-webchat2" id="wc-webchat4" src="'+$(this).val()+'"></iframe>';
        $('#bg3 .service_view .wc-webchat-web-pc').html(iframe_pc_input);
	});
    $(document).on('click', '#bg3 .bg3_item li', function () {
        var iframe_index = $(this).attr('data-iframe_index');
        $('#bg3 .bg3_item li').removeClass('active');
        $(this).addClass('active');

        if (iframe_index && connect_page_id_iframe[iframe_index] != void 0) {
            var connect_page_id = connect_page_id_iframe[iframe_index];

            var iframe_mobile = '<iframe class="wc-webchat2" id="wc-webchat2" src="' + efo_server + '/efo?refresh_log_flg=1&preview_flg=1&connect_page_id=' + connect_page_id + '"></iframe>';
            var iframe_pc = '<iframe class="wc-webchat3" id="wc-webchat3" src="' + efo_server + '/efo?refresh_log_flg=1&preview_flg=1&connect_page_id=' + connect_page_id + '"></iframe>';
            $('#bg3 .service_view .efo_demo_mobile').html(iframe_mobile);
            $('#bg3 .service_view .wc-webchat-view-pc').html(iframe_pc);
        }
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

    $('#openBotchanEfo').on('click', function () {
        var title = $(".wc-cmd.minimize_box").attr("title");
        if(title == "Maximize"){
            $(".wc-cmd.minimize_box").click();
        }
        $('.wc-webchat-ctn').show();
    });

    setSizeBg1();
    resetHeader();
    setSixeDemoBg4();
    setDemoOption();
    resetPriceForm();


    //click to menu
    $("#header_nav li a").on('click', function (e) {
        e.preventDefault();
        var sec_id      = $(this).data('sec'),
            box_content = $('#' + sec_id);
        if($('body').hasClass('index_page')) {
            if(box_content.length > 0) {
                var topPos  = $('#' + sec_id).offset().top;
                if($("body > header").innerHeight()) {
                    topPos -= $("body > header").innerHeight();
                }
                $('html, body').animate({ scrollTop: topPos }, 400);
            }
        } else {
            window.location.href = '/' + '#' + sec_id;
        }
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


    $('#pagetop').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 720) {
            $('#pagetop').fadeIn();
        } else {
            $('#pagetop').fadeOut();
        }
    });

    $("#pagetop").on('click', function (e) {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

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
    setTimeout(function () {
        var table_w = $('.bg6').find('table').innerWidth(),
            table_icon = $('.bg6').find('table .table_icon_box'),
            // table_icon_w = table_icon.innerWidth();
            table_icon_w = 63;

        //width td
        $('.bg6 table tr').not('.item_img').find('td').css('width', Math.floor(table_w / 2) - 4);
        //icon
        var left = (table_w / 2) - (table_icon_w / 2) - 2;
        table_icon.css('left', left + 'px');

    }, 100);
}
function resetHeader() {
    //set magrin top chat demo box
    var windown_w = $(window).width();
    if(windown_w <= 760) {
        
		//tuan edit
		//tuan edit
		var mobile_demo_box_w = $('#header .mobile_demo_box #mobile_demo').width();
		var mobile_demo_box_h = $('#header .mobile_demo_box #mobile_demo').height();
		var height_buton = 33*$('#header .mobile_demo_box #mobile_demo').width()/620;
		
		var width_buton = 0.28*mobile_demo_box_w;
		var margin_bottom = 0.056*mobile_demo_box_h;
		var left = 0.43*mobile_demo_box_w;
		$('#header .start_chat_btn').css('left', left);
		$('#header .start_chat_btn').css('width', width_buton);
		$('#header .start_chat_btn').css('height', height_buton);
		$('#header .start_chat_btn').css('line-height', height_buton+'px');
		$('#header .start_chat_btn').css('padding', 0);
		$('#header .start_chat_btn').css('bottom', margin_bottom);
		if(windown_w<400){
			
			
			
		}else{
			var mobile_demo_box_w = $('#header .mobile_demo_box').width();
			var header_demo_w = $('#header .header_demo').innerWidth();
			$('#header .header_demo').css('right', (mobile_demo_box_w - header_demo_w + 45) / 2);
			$('#header .start_chat_btn').css('right', (header_demo_w - 280 ));
		}
        
    } else {
        $('#header .header_demo').attr('style', null);
        $('#header .start_chat_btn').attr('style', null);
    }
}

function setDemoOption() {
    var windown_w = $(window).width();
    var iframe_pc = $('#bg3 .efo_demo_pc');
    var iframe_mobile = $('#bg3 .efo_demo_mobile');
	var phone4 = $('#phone4');
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
        iframe_mobile.css('left', (((windown_w - frame_img_w/2) / 2) - 33)+ 'px');
		phone4.css('left', (((windown_w - frame_img_w) / 2)+10)+ 'px');
		
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


function setSnsShare(shareUrl, description) {
    setTwitterLink(".twitter_back a", shareUrl, description);
    setFacebookLink(".facebook_back a", shareUrl, description);
    setGooglePlusLink(".google_back a", shareUrl, description);
    setHatebuLink(".hatena_back a", shareUrl, description);
    setLineLink(".line_back a", shareUrl, description);
}


function setTwitterLink(shareSelector, shareUrl, description) {
    $(shareSelector).attr("href", "https://twitter.com/share?shareUrl=" + shareUrl + "&text=" + encodeURIComponent(description));
    setShareEvent(shareSelector, 'Twitter', shareUrl);
}

function setFacebookLink(shareSelector, shareUrl, description) {
    $(shareSelector).attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + shareUrl + "&t=" + encodeURIComponent(description));
    setShareEvent(shareSelector, 'Facebook', shareUrl);
}

function setGooglePlusLink(shareSelector, shareUrl, description) {
    $(shareSelector).attr("href", "https://plus.google.com/share?shareUrl=" + shareUrl);
    setShareEvent(shareSelector, 'Google+', shareUrl);
}

function setHatebuLink(shareSelector, shareUrl, description) {
    $(shareSelector).attr("href", "https://b.hatena.ne.jp/add?mode=confirm&shareUrl=" + shareUrl + "&description=" + encodeURIComponent(description));
    setShareEvent(shareSelector, 'Hatena Bookmark', shareUrl);
}

function setLineLink(shareSelector, shareUrl, description) {
    $(shareSelector).attr("href", "http://line.me/R/msg/text/?" + encodeURIComponent(description + " " + shareUrl));
    setShareEvent(shareSelector, 'LINE', shareUrl);
}

function setShareEvent(selector, snsName, shareUrl) {
    $(selector).on('click', function(e){
        var current = this;
        ga('send', 'social', snsName, 'share', shareUrl, {
            'nonInteraction': 1
        });
        window.open(current.href, '_blank', 'width=600, height=600, menubar=no, toolbar=no, scrollbars=yes');
        e.preventDefault();
    });
}