<?php
include('language.php');
$LANG = 'en';
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
                !function(n,r){"function"==typeof define&&define.amd?define(r):"object"==typeof exports?module.exports=r():n.transformicons=r()}(this||window,function(){"use strict";var n={},r="tcon-transform",t={transform:["click"],revert:["click"]},e=function(n){return"string"==typeof n?Array.prototype.slice.call(document.querySelectorAll(n)):"undefined"==typeof n||n instanceof Array?n:[n]},o=function(n){return"string"==typeof n?n.toLowerCase().split(" "):n},f=function(n,r,f){var c=(f?"remove":"add")+"EventListener",u=e(n),s=u.length,a={};for(var l in t)a[l]=r&&r[l]?o(r[l]):t[l];for(;s--;)for(var d in a)for(var v=a[d].length;v--;)u[s][c](a[d][v],i)},i=function(r){n.toggle(r.currentTarget)};return n.add=function(r,t){return f(r,t),n},n.remove=function(r,t){return f(r,t,!0),n},n.transform=function(t){return e(t).forEach(function(n){n.classList.add(r)}),n},n.revert=function(t){return e(t).forEach(function(n){n.classList.remove(r)}),n},n.toggle=function(t){return e(t).forEach(function(t){n[t.classList.contains(r)?"revert":"transform"](t)}),n},n});
                transformicons.add(".tcon");
            });
        </script>
    </head>
<body class="contact_page">
<header>
    <h1 class="meta-h1"><?= $meta_h1[$LANG] ?></h1>
    <div class="base">
        <a href="/?lang=<?= $LANG ?>">
            <img class="logo" src="/images/logo.png" width="200" alt="">
        </a>
        <ul id="header_nav">
            <li><a href="#what"><?= $menu1[$LANG] ?></a></li>
            <li><a href="#feature"><?= $menu2[$LANG] ?></a></li>
            <li><a href="#usecase"><?= $menu3[$LANG] ?></a></li>
            <li><a href="#flow"><?= $menu4[$LANG] ?></a></li>
            <li><a href="#price"><?= $menu5[$LANG] ?></a></li>
            <li><a href="#contact"><?= $menu6[$LANG] ?></a></li>
            <li><a href="https://admin.botchan.chat/?lang=<?= $LANG; ?>"><?= $menu7[$LANG] ?></a></li>
            <li><a href="./?lang=<?= ($LANG == 'en')? 'ja' : 'en' ?>">
                    <img class="en_white" src="/images/<?php echo $LANG; ?>/header_en_white.png" width="100" alt="">
                    <img class="en_black" src="/images/<?php echo $LANG; ?>/header_en_black.png" width="100" alt="">
                </a>
            </li>
        </ul>
    </div>
    <button type="button" id="hmenu" class="tcon tcon-menu--xcross" aria-label="toggle menu">
        <span class="tcon-menu__lines" aria-hidden="true"></span>
        <span class="tcon-visuallyhidden">toggle menu</span>
    </button>
</header>
<div id="header" style="background-image: url(/images/<?php echo $LANG; ?>/header_image.png)">
    <div class="header_text_box">
        <div class="header_text">
            <div class="header_text_item first">
                <p>ad jasds jdajd </p>
            </div>
            <div class="header_text_item second">
                <p>Contact</p>
            </div>
        </div>
    </div>
    <div class="breadcumb">
        <div class="base">
            <div class="breadcumb_container">
                <div class="item">
                    <p>sdf sfsdf sdfs</p>
                </div>
                <span class="breadcumb_right"> > </span>
                <div class="item">
                    <p>sdf sfsdf</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact_base base">
    <div class="contact_title">
        <h3>Contact</h3>
    </div>
    <form action="./thanks.php?lang=<?= $LANG; ?>" method="post">
        <table class="table">
            <tbody>
            <tr class="item1">
                <td>
                    <p><?= $contact_f2[$LANG] ?></p>
                    <span class="require">hj gh</span>
                </td>
                <td><input type="text" name="company" value="" placeholder="sdfsfsd dgf dsd đf" required /></td>
            </tr>
            <tr class="item2">
                <td>
                    <p><?= $contact_f3[$LANG] ?></p>
                    <span class="require">hj gh</span>
                </td>
                <td><input type="text" name="company" value="" placeholder="sdfsfsd dgf dsd đf" required /></td>
            </tr>
            <tr class="item3">
                <td>
                    <p><?= $contact_f4[$LANG] ?></p>
                    <span class="require">hj gh</span>
                </td>
                <td><input type="text" name="company" value="" placeholder="sdfsfsd dgf dsd đf" required /></td>
            </tr>
            <tr class="item4">
                <td>
                    <p><?= $contact_f5[$LANG] ?></p>
                </td>
                <td><input type="text" name="company" value="" placeholder="sdfsfsd dgf dsd đf" /></td>
            </tr>
            <tr class="item5">
                <td>
                    <p><?= $contact_f5[$LANG] ?></p>
                    <span class="require">hj gh</span>
                </td>
                <td><textarea name="bot" id="" cols="30" rows="10" placeholder="sdfsfsd dgf dsd đf" ></textarea></td>
            </tr>
            </tbody>
        </table>
        <div class="submit">
            <input type="submit" value="<?= $contact_f31[$LANG] ?>">
        </div>
    </form>
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
