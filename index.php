<?php
include('language.php');
$LANG = 'ja';
if(isset($_GET['lang'])) {
    if($_GET['lang'] == 'vn') {
        $LANG = 'vn';
    } else if($_GET['lang'] == 'ja') {
        $LANG = 'ja';
    }
}

?>
<html>
<head>
    <title><?= $meta_ttl[$LANG] ?></title>
    <meta name="description" content="<?= $meta_desc[$LANG] ?>">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta property="og:title" content="<?= $meta_ttl[$LANG] ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="BOTCHAN EFO" />
        <meta property="og:description" content="<?= $meta_desc[$LANG] ?>" />

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css">
        <link rel="stylesheet" href="./css/index.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="./js/lib.js"></script>
        <script src="./js/custom.js"></script>
        <script>
            $(function(){
                $(document).scroll(function(){

                });

                $('a[href^=#]').click(function() {
                    var speed = 400;
                    var href= $(this).attr("href");
                    var target = $(href == "#" || href == "" ? 'html' : href);
                    var position = target.offset().top - $('header').height();
                    $('body,html').animate({scrollTop:position}, speed, 'swing');
                    return false;
                });

                $('#hmenu').on('click', function(){
                    if($(this).hasClass('tcon-transform')){
                        $('#header_nav').hide();
                    } else {
                        $('#header_nav').show();
                    }
                });
                $('#header_nav li').on('click', function(){
                    $('#header_nav').hide();
                    $('#hmenu').removeClass('tcon-transform');
                });
                !function(n,r){"function"==typeof define&&define.amd?define(r):"object"==typeof exports?module.exports=r():n.transformicons=r()}(this||window,function(){"use strict";var n={},r="tcon-transform",t={transform:["click"],revert:["click"]},e=function(n){return"string"==typeof n?Array.prototype.slice.call(document.querySelectorAll(n)):"undefined"==typeof n||n instanceof Array?n:[n]},o=function(n){return"string"==typeof n?n.toLowerCase().split(" "):n},f=function(n,r,f){var c=(f?"remove":"add")+"EventListener",u=e(n),s=u.length,a={};for(var l in t)a[l]=r&&r[l]?o(r[l]):t[l];for(;s--;)for(var d in a)for(var v=a[d].length;v--;)u[s][c](a[d][v],i)},i=function(r){n.toggle(r.currentTarget)};return n.add=function(r,t){return f(r,t),n},n.remove=function(r,t){return f(r,t,!0),n},n.transform=function(t){return e(t).forEach(function(n){n.classList.add(r)}),n},n.revert=function(t){return e(t).forEach(function(n){n.classList.remove(r)}),n},n.toggle=function(t){return e(t).forEach(function(t){n[t.classList.contains(r)?"revert":"transform"](t)}),n},n});
                transformicons.add(".tcon");
            });
        </script>
    </head>
<body>
<?php include 'header.php';?>
<div id="what">
    <div id="header" style="background-image: url(/images/<?php echo $LANG; ?>/header_image.png)">
        <div class="mobile_demo_box">
            <div class="header_demo">
                <img id="mobile_demo" src="/images/mobile_demo.png" alt="">
                <p class="start_chat_btn"></p>
                <div class="efo_demo"></div>
            </div>
        </div>
        <div class="header_text_box">
            <div class="header_text">
                <div class="header_text_item first">
                    <p><?= $main1[$LANG] ?></p>
                    <p><?= $main2[$LANG] ?></p>
                </div>
                <div class="header_text_item second">
                    <p><?= $main3[$LANG] ?></p>
                    <p><?= $main4[$LANG] ?></p>
                    <p><?= $main5[$LANG] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="what">
    <div class="section bg1" id="feature">
        <div class="text-1-wrapper base">
            <p><?= $context1[$LANG] ?></p>
        </div>
        <div class="text-2-wrapper base">
            <div class="box_container">
                <div class="box_item">
                    <p><?= $context2[$LANG] ?></p>
                </div>
                <div class="box_item">
                    <p><?php echo $context31[$LANG] ?> <br />
                        <?php echo $context32[$LANG] ?>
                    </p>
                </div>
                <div class="box_item">
                    <p><?= $context41[$LANG] ?><br /><?= $context42[$LANG] ?></p>
                </div>
            </div>
        </div>
        <div class="text-3-wrapper base">
            <p><?= $context5[$LANG] ?></p>
        </div>
    </div>
</div>

<div class="section bg2" id="flow">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $context6[$LANG] ?></p>
            </div>
            <div class="text-2-content">
                <p><?= $context7[$LANG] ?></p>
                <p><?= $context8[$LANG] ?></p>
            </div>
        </div>
        <div class="bg2_item_box base">
            <div class="bg2_item_cotainer">
                <ul class="bg2_item">
                    <li class="item1">
                        <h2><?= $context9[$LANG] ?></h2>
                        <img src="/images/bg2/item1.png" alt="">
                        <p><?= $context91[$LANG] ?></p>
                    </li>
                    <li class="item2">
                        <h2><?= $context10[$LANG] ?></h2>
                        <img src="/images/bg2/item2.png" alt="">
                        <p><?= $context101[$LANG] ?></p>
                    </li>
                    <li class="item3">
                        <h2><?= $context11[$LANG] ?></h2>
                        <img src="/images/bg2/item3.png" alt="">
                        <p><?= $context111[$LANG] ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<div class="section bg3" id="bg3">
    <div class="text-1-box base">
        <div class="text-1-content">
            <p><?= $block31[$LANG] ?></p>
        </div>
        <div class="text-2-content">
            <p><?= $block32[$LANG] ?></p>
        </div>
    </div>
    <div class="bg3_item_box base">
        <div class="bg3_item_cotainer">
            <ul class="bg3_item left">
                <li class="item1">
                    <p><?= $block33[$LANG] ?></p>
                </li>
                <li class="item2">
                    <p><?= $block34[$LANG] ?></p>
                </li>
                <li class="item3">
                    <p><?= $block35[$LANG] ?></p>
                </li>
            </ul>
            <ul class="bg3_item right">
                <li class="item1 left">
                    <p><?= $block36[$LANG] ?></p>
                </li>
                <li class="item2">
                    <p><?= $block37[$LANG] ?></p>
                </li>
                <li class="item3">
                    <p><?= $block38[$LANG] ?></p>
                </li>
            </ul>
        </div>
    </div>
    <div class="service_view base">
        <div class="service_item service_pc">
            <img src="/images/bg3/pc.png" alt="">
            <div class="efo_demo_pc"></div>
        </div>
        <div class="service_item service_mobile">
            <img src="/images/bg3/phone.png" alt="">
            <div class="efo_demo_mobile"></div>
        </div>
    </div>
</div>

<div class="section bg4" id="bg4">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block41[$LANG] ?></p>
            </div>
        </div>
        <div class="bg4_item_box base">
            <div class="bg4_item_cotainer">
                <ul class="bg4_item left">
                    <li class="item1 active">
                        <p><?= $block42[$LANG] ?></p>
                    </li>
                    <li class="item2">
                        <p><?= $block43[$LANG] ?></p>
                    </li>
                    <li class="item3">
                        <p><?= $block44[$LANG] ?></p>
                    </li>
                    <li class="item4">
                        <p><?= $block45[$LANG] ?></p>
                    </li>
                    <li class="item5">
                        <p><?= $block46[$LANG] ?></p>
                    </li>
                </ul>
                <div class="info_item">
                <span>
                     <p><?= $block47[$LANG] ?></p>
                </span>
                </div>
                <div class="service_item">
                    <img class="screen_device" src="/images/bg4/phone.png" alt="">
                    <img class="screen_img" src="/images/bg4/restoration.gif" alt="">
                </div>
            </div>
        </div>
    </div>

<div id="usecase">
    <div class="section bg5" id="bg5">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block51[$LANG] ?></p>
            </div>
        </div>
        <div class="bg5_item_box base">
            <div class="bg5_item_cotainer">
                <ul class="bg5_item">
                    <li class="item1">
                        <div class="step_content">
                            <div class="step_title">
                                <p class="label1">Step 1</p>
                                <p class="label2"><?= $block52[$LANG] ?></p>
                            </div>
                            <div class="step_image">
                                <img class="step_img" src="/images/bg5/step3.png" alt="">
                            </div>
                            <p class="label3"><?= $block53[$LANG] ?></p>
                        </div>
                    </li>
                    <li class="item2">
                        <div class="step_content">
                            <p class="label1"><?= $block54[$LANG] ?></p>
                            <div class="step_image next">
                                <img src="/images/bg5/arow_next.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="item3">
                        <div class="step_content">
                            <div class="step_title">
                                <p class="label1">Step 2</p>
                                <p class="label2"><?= $block55[$LANG] ?></p>
                            </div>
                            <div class="step_image">
                                <img class="step_img" src="/images/bg5/step2.png" alt="">
                            </div>
                            <p class="label3"><?= $block56[$LANG] ?></p>
                        </div>
                    </li>
                    <li class="item4">
                        <div class="step_content">
                            <p class="label1"><?= $block57[$LANG] ?></p>
                            <div class="step_image next">
                                <img src="/images/bg5/arow_next.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="item5">
                        <div class="step_content">
                            <div class="step_title">
                                <p class="label1">Step 3</p>
                                <p class="label2"><?= $block58[$LANG] ?></p>
                            </div>
                            <div class="step_image">
                                <img class="step_img" src="/images/bg5/step3.png" alt="">
                            </div>
                            <p class="label3"><?= $block59[$LANG] ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="price">
    <div class="section bg6" id="bg6">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block61[$LANG] ?></p>
            </div>
        </div>
        <div class="bg6_box base">
            <div class="bg6_cotainer">
                <table class="table">
                    <tbody>
                    <tr class="item1">
                        <td><?= $block62[$LANG] ?></td>
                        <td><?= $block621[$LANG] ?></td>
                    </tr>
                    <tr class="item_img">
                        <td colspan="2">
                            <div class="table_icon_box">
                                <img src="/images/bg6/table_icon.png" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr class="item2">
                        <td><?= $block63[$LANG] ?></td>
                        <td><?= $block631[$LANG] ?></td>
                    </tr>
                    <tr class="item3">
                        <td><?= $block64[$LANG] ?></td>
                        <td><?= $block641[$LANG] ?></td>
                    </tr>
                    <tr class="item4">
                        <td><?= $block65[$LANG] ?></td>
                        <td><?= $block651[$LANG] ?></td>
                    </tr>
                    <tr class="item5">
                        <td><?= $block66[$LANG] ?></td>
                        <td><?= $block661[$LANG] ?></td>
                    </tr>
                    </tbody>
                </table>
                <div class="title_bottom_box">
                    <p class="title_bottom"><?= $block67[$LANG] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact">
    <div class="section bg7" id="bg7">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block71[$LANG] ?></p>
            </div>
        </div>
        <div class="bg7_item_box base">
            <div class="bg7_item_cotainer">
                <ul class="bg7_item">
                    <li class="item1">
                        <div class="contact_content">
                            <div class="title">
                                <p><img src="/images/bg7/icon1.png" alt=""><?= $block72[$LANG] ?></p>
                            </div>
                            <div class="content">
                                <p class="phone"><?= $block721[$LANG] ?></p>
                                <p class="subtitle"><?= $block722[$LANG] ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="item2">
                        <div class="contact_content">
                            <div class="title">
                                <p><img src="/images/bg7/icon2.png" alt=""><?= $block73[$LANG] ?></p>
                            </div>
                            <div class="content">
                                <p><a class="contact" href="./contact.php?lang=<?= $LANG; ?>"><?= $block731[$LANG] ?></a></p>
                            </div>
                        </div>
                    </li>
                    <li class="item3">
                        <div class="contact_content">
                            <div class="title">
                                <p><img src="/images/bg7/icon3.png" alt=""><?= $block74[$LANG] ?></p>
                            </div>
                            <div class="content">
                                <p><?= $block741[$LANG] ?></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <ul>
        <li><a href="./contact.php?lang=<?= $LANG; ?>"><?= $footer1[$LANG] ?></a></li>
        <li><a href="./privacy.php?lang=<?= $LANG; ?>"><?= $footer2[$LANG] ?></a></li>
        <li><a href="./company.php?lang=<?= $LANG; ?>"><?= $footer3[$LANG] ?></a></li>
    </ul>

    <div class="copyright">&copy;2017 wevnal Inc. All Rights Reserved.</div>
</div>
</body>
</html>
