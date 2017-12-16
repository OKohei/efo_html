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

    <head>
<body>
<header class="black">
  <div class="base">
    <a href="/?lang=<?php echo $LANG?>">
      <img class="logo_white" src="/images/logo_white.png" width="200" alt="">
      <img class="logo_black" src="/images/logo_black.png" width="200" alt="">
    </a>
    <ul id="header_nav">
      <li><a href="/?lang=<?php echo $LANG?>#what"><?= $menu1[$LANG] ?></a></li>
      <li><a href="/?lang=<?php echo $LANG?>#feature"><?= $menu2[$LANG] ?></a></li>
      <li><a href="/?lang=<?php echo $LANG?>#usecase"><?= $menu3[$LANG] ?></a></li>
      <li><a href="/?lang=<?php echo $LANG?>#flow"><?= $menu4[$LANG] ?></a></li>
      <li><a href="/?lang=<?php echo $LANG?>#contact"><?= $menu5[$LANG] ?></a></li>
      <li><a href="./contact.php?lang=<?= ($LANG == 'en')? 'ja' : 'en' ?>">
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
<div class="contact_base">
  <div class="contact_header">
    <img src="/images/<?php echo $LANG; ?>/contact/form_header.png" width="200" alt="">
  </div>
  <form action="./thanks.php?lang=<?= $LANG; ?>" method="post">
    <dl class="contact_form">
      <dt>
        <?= $contact_f1[$LANG] ?>
      </dt>
      <dd>
      </dd>
      <dt>
        <?= $contact_f2[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="company" value="" required />
      </dd>
      <dt>
        <?= $contact_f3[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="person_name" value="" required />
      </dd>
      <dt>
        <?= $contact_f4[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="tel" value="" required />
      </dd>
      <dt>
        <?= $contact_f5[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="mail" value="" required />
      </dd>
      <dt>
        <?= $contact_f6[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="department" value="" />
      </dd>
      <dt>
        <?= $contact_f7[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="address" value="" />
      </dd>
      <dt>
        <?= $contact_f8[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="url" value="" required />
      </dd>
      <dt>
        <?= $contact_f9[$LANG] ?>
      </dt>
      <dd>
        <select name="employee" id="" required>
          <option value="<?= $contact_f10['ja'] ?>"><?= $contact_f10[$LANG] ?></option>
          <option value="<?= $contact_f11['ja'] ?>"><?= $contact_f11[$LANG] ?></option>
          <option value="<?= $contact_f12['ja'] ?>"><?= $contact_f12[$LANG] ?></option>
          <option value="<?= $contact_f13['ja'] ?>"><?= $contact_f13[$LANG] ?></option>
          <option value="<?= $contact_f14['ja'] ?>"><?= $contact_f14[$LANG] ?></option>
        </select>
      </dd>
      <dt>
        <?= $contact_f15[$LANG] ?>
      </dt>
      <dd>
        <input type="text" name="purpose" value="" />
      </dd>
      <dt>
        <?= $contact_f16[$LANG] ?>
      </dt>
      <dd>
        <select name="jungle" id="">
          <option value="<?= $contact_f17['ja'] ?>"><?= $contact_f17[$LANG] ?></option>
          <option value="<?= $contact_f18['ja'] ?>"><?= $contact_f18[$LANG] ?></option>
        </select>
      </dd>
      <dt>
        <?= $contact_f19[$LANG] ?>
      </dt>
      <dd>
        <select name="introduction" id="">
          <option value="<?= $contact_f20['ja'] ?>"><?= $contact_f20[$LANG] ?></option>
          <option value="<?= $contact_f21['ja'] ?>"><?= $contact_f21[$LANG] ?></option>
          <option value="<?= $contact_f22['ja'] ?>"><?= $contact_f22[$LANG] ?></option>
          <option value="<?= $contact_f23['ja'] ?>"><?= $contact_f23[$LANG] ?></option>
          <option value="<?= $contact_f24['ja'] ?>"><?= $contact_f24[$LANG] ?></option>
        </select>
      </dd>
      <dt>
        <?= $contact_f25[$LANG] ?>
      </dt>
      <dd>
        <input type="checkbox" name="interface[]" id="line" value="LINE"> <?= $contact_f26[$LANG] ?>
        <input type="checkbox" name="interface[]" id="facebook" value="Facebook"> <?= $contact_f27[$LANG] ?>
        <input type="checkbox" name="interface[]" id="web" value="WEBチャット"> <?= $contact_f28[$LANG] ?>
        <input type="checkbox" name="interface[]" id="no" value="未定"> <?= $contact_f29[$LANG] ?>
      </dd>
      <dt>
        <?= $contact_f30[$LANG] ?>
      </dt>
      <dd>
        <textarea name="bot" id="" cols="30" rows="10"></textarea>
      </dd>
    </dl>
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
