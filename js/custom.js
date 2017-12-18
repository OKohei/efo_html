$(function(){
    $('#header .mobile_demo_box .start_chat_btn').on('click', function () {
        var iframe_chat = '<iframe class="wc-webchat" id="wc-webchat" src="http://192.168.10.10:3030/efo?connect_page_id=5a1533249a89201ada6de403"></iframe>';
        $('#header .mobile_demo_box .efo_demo').append(iframe_chat);
        setTimeout(function () {
            var wc_irame = document.getElementById("wc-webchat").contentWindow;

            wc_irame.postMessage({'new_conversation_flg' : 1}, 'http://192.168.10.10:3030');
            wc_irame.postMessage({'maximize_flg' : 1}, 'http://192.168.10.10:3030');
        }, 1000);
    });


    setTimeout(function () {
        resetPriceForm();
    }, 100);
});

$(window).resize(function () {
    setTimeout(function () {
        resetPriceForm();
    }, 100);

});

//send data to server
function postMessageToServer(data) {
    console.log('client send msg: ', data);
    var wc_irame = document.getElementById("wc-webchat").contentWindow;
    wc_irame.postMessage(data, 'http://192.168.10.10:3030');
}

function resetPriceForm() {
    var table_w = $('.bg6').find('table').innerWidth(),
        table_icon = $('.bg6').find('table .table_icon_box'),
        table_icon_w = table_icon.innerWidth();

    var left = (table_w / 2) - (table_icon_w / 2) - 5;
    table_icon.css('left', left + 'px');
}