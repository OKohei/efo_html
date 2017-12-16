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

$company = isset($_POST['company']) ? $_POST['company']: '';
$person_name = isset($_POST['person_name']) ? $_POST['person_name']: '';
$tel = isset($_POST['tel']) ? $_POST['tel']: '';
$mail = isset($_POST['mail']) ? $_POST['mail']: '';
$department = isset($_POST['department']) ? $_POST['department']: '';
$address = isset($_POST['address']) ? $_POST['address']: '';
$url = isset($_POST['url']) ? $_POST['url']: '';
$employee = isset($_POST['employee']) ? $_POST['employee']: '';
$purpose = isset($_POST['purpose']) ? $_POST['purpose']: '';
$jungle = isset($_POST['jungle']) ? $_POST['jungle']: '';
$introduction = isset($_POST['introduction']) ? $_POST['introduction']: '';
$bot = isset($_POST['bot']) ? $_POST['bot']: '';
$interface = isset($_POST['interface']) ? $_POST['interface']: [];

mb_language("Japanese");
mb_internal_encoding("UTF-8");

//$to      = 'botchan@wevnal.co.jp';
$to      = 'tungnk.hn@gmail.com';
$subject = 'お問い合わせがありました';
$message = '';
$message .= '会社名: ' . $company . "\n";
$message .= 'ご担当者名: ' . $person_name . "\n";
$message .= '電話番号: ' . $tel . "\n";
$message .= 'メールアドレス: ' . $mail . "\n";
$message .= '部署名: ' . $department . "\n";
$message .= '所在地(都道府県): ' . $address . "\n";
$message .= 'ホームページURL: ' . $url . "\n";
$message .= '従業員数: ' . $employee . "\n";
$message .= '使用用途: ' . $purpose . "\n";
$message .= 'ジャンル: ' . $jungle . "\n";
$message .= '導入時期: ' . $introduction . "\n";
$message .= 'インターフェース: ' . join($interface, ',') . "\n";
$message .= '具体的なBOT内容: ' . $bot . "\n";
$headers = 'From: botchan@wevnal.co.jp' . "\r\n";

mail($to, $subject, $message, $headers);

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
<body>
<header class="black">
  <div class="base">
    <a href="/?lang=<?= $LANG ?>">
      <img class="logo" src="/images/logo.png" width="200" alt="">
    </a>
    <ul id="header_nav">
      <li><a href="/#what"><?= $menu1[$LANG] ?></a></li>
      <li><a href="/#feature"><?= $menu2[$LANG] ?></a></li>
      <li><a href="/#usecase"><?= $menu3[$LANG] ?></a></li>
      <li><a href="/#flow"><?= $menu4[$LANG] ?></a></li>
      <li><a href="/#contact"><?= $menu5[$LANG] ?></a></li>
      <li><a href="./privacy.php?lang=<?= ($LANG == 'en')? 'ja' : 'en' ?>">
          <img class="en_white" src="/images/<?php echo $LANG; ?>/header_en_white.png" width="100" alt="">
          <img class="en_black" src="/images/<?php echo $LANG; ?>/header_en_black.png" width="100" alt="">
        </a></li>
    </ul>
  </div>
  <button type="button" id="hmenu" class="tcon tcon-menu--xcross" aria-label="toggle menu">
    <span class="tcon-menu__lines" aria-hidden="true"></span>
    <span class="tcon-visuallyhidden">toggle menu</span>
  </button>
</header>
<div class="thanks_base">
  <?php if($LANG == 'ja'): ?>
    <h1>お問い合わせありがとうございました。</h1>
  <?php else: ?>
    <h1>Thank you for your inquiry.</h1>
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
