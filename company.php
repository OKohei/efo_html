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
<body class="company_page">
<header>
    <h1 class="meta-h1"><?= $meta_h1[$LANG] ?></h1>
    <div class="base">
        <a href="/?lang=<?= $LANG ?>">
            <img class="logo" src="/images/logo.png" width="235" alt="">
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
                <p>COMPANY</p>
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
        <h3>Company</h3>
    </div>
    <?php if($LANG == 'ja'): ?>
        <table>
            <tr>
                <td style="min-width: 160px">会社名</td>
                <td>株式会社wevnal</td>
            </tr>
            <tr>
                <td>代表取締役社長</td>
                <td>磯山 博文</td>
            </tr>
            <tr>
                <td>本社</td>
                <td>〒150-0002 東京都渋谷区渋谷1-11-8 渋谷パークプラザ 5F</td>
            </tr>
            <tr>
                <td>企業サイトURL</td>
                <td><a href="http://wevnal.co.jp/">http://wevnal.co.jp/</a></td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>03-5766-8877</td>
            </tr>
            <tr>
                <td>FAX番号</td>
                <td>03-5766-8878</td>
            </tr>
            <tr>
                <td>創業</td>
                <td>2011年4月</td>
            </tr>
            <tr>
                <td>資本金</td>
                <td>300万円</td>
            </tr>
            <tr>
                <td>設立</td>
                <td>2011年4月</td>
            </tr>
            <tr>
                <td>関連子会社</td>
                <td>Tokyo Mild Foundation 株式会社<br />
                    <a href="http://tokyomildfoundation.com/">http://tokyomildfoundation.com/</a><br />
                    ベトナム オフショアラボ開発 18F,<br />
                    Ladeco Building, 266 DoiCan StrBaDinh, Hanoi, Vietnam
                </td>
            </tr>
            <tr>
                <td>事業内容</td>
                <td>インターネット広告代理事業<br />
                    インターネットメディア事業<br />
                    Web制作事業<br />
                    AI・IoT事業
                </td>
            </tr>
            <tr>
                <td>役員</td>
                <td>代表取締役社長 磯山 博文<br />
                    取締役副社長兼 COO 前田 康統<br />
                    常務取締役兼 広告事業部本部長 森元 昭博<br />
                    CTO 木曽 隆<br />
                    執行役員 赤嶺 謙一郎
                </td>
            </tr>
        </table>
    <?php else: ?>
        <table>
            <tr>
                <td style="min-width: 160px">Company Name</td>
                <td>wevnal inc.</td>
            </tr>
            <tr>
                <td>Representative Director</td>
                <td>Hirofumi Isoyama</td>
            </tr>
            <tr>
                <td>Head Office</td>
                <td>1-11- 8 Shibuya, Shibuyaku, Tokyo, 150-0002,Japan<br />
                    Shibuya Park Plaza 5F</td>
            </tr>
            <tr>
                <td>Company</td>
                <td><a href="http://wevnal.co.jp/">http://wevnal.co.jp/</a></td>
            </tr>
            <tr>
                <td>TEL</td>
                <td>+81-3-5766-8877</td>
            </tr>
            <tr>
                <td>FAX</td>
                <td>+81-3-5766-8878</td>
            </tr>
            <tr>
                <td>Date of Establishment</td>
                <td>April 2011</td>
            </tr>
            <tr>
                <td>Common Stock</td>
                <td>3 Million Yens</td>
            </tr>
            <tr>
                <td>Incorporated</td>
                <td>April 2011</td>
            </tr>
            <tr>
                <td>Associated Company</td>
                <td>HUVRID Inc. http://huvrid.co.jp/<br />
                    Tokyo Mild Foundation Inc. http://tokyomildfoundation.com/<br />
                    Vietnam Offshorelab Development Web Agency<br />
                    18F, Ladeco Building, 266 DoiCan StrBaDinh, Hanoi, Vietnam

                </td>
            </tr>
            <tr>
                <td>Business Segments</td>
                <td>Internet Advertising Agency<br />
                    Internet Media &amp; Entertainment<br />
                    Web Content Agency<br />
                    AI Business<br />
                    IoT Business
                </td>
            </tr>
            <tr>
                <td>Board Members</td>
                <td>CEO : Hirofumi Isoyama<br />
                    Executive Vice President / COO : Yasunori Maeda<br />
                    Executive Managing Director / Advertising Division Director : Akihito Morimoto<br />
                    CTO : Takashi Kiso
                </td>
            </tr>
        </table>
    <?php endif; ?>
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
