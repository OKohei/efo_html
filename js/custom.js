$(function(){
    setTimeout(function () {
        resetPriceForm();
    }, 100);
});

$(window).resize(function () {
    setTimeout(function () {
        resetPriceForm();
    }, 100);

});

function resetPriceForm() {
    var table_w = $('.bg6').find('table').innerWidth(),
        table_icon = $('.bg6').find('table .table_icon_box'),
        table_icon_w = table_icon.innerWidth();

    var left = (table_w / 2) - (table_icon_w / 2) - 5;
    table_icon.css('left', left + 'px');
}