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

$person_name = isset($_POST['person_name']) ? $_POST['person_name']: '';
$tel = isset($_POST['tel']) ? $_POST['tel']: '';
$mail = isset($_POST['mail']) ? $_POST['mail']: '';
$content = isset($_POST['content']) ? $_POST['content']: '';

mb_language("Japanese");
mb_internal_encoding("UTF-8");

//$to      = 'botchan@wevnal.co.jp';
$to      = 'vu.thi.my.linh@miyatsu.vn';
$subject = 'お問い合わせがありました';
$message = '';
$message .= 'お名前: ' . $person_name . "\n";
$message .= 'メールアドレス: ' . $mail . "\n";
$message .= '電話番号: ' . $tel . "\n";
$message .= 'お問い合わせ内容: ' . $content . "\n";
$headers = 'From: vu.thi.my.linh@miyatsu.vn' . "\r\n";

mail($to, $subject, $message, $headers);

?>
<html>
<?php include 'head.php';?>
<body>
<?php include 'header.php';?>
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
