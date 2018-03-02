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
<?php include 'head.php';?>
<body>
<!-- Google Code for BOTCHAN Conversion Page -->
<script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 947605038;
  var google_conversion_label = "TaZlCIWo5H0QrpztwwM";
  var google_remarketing_only = false;
  /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/947605038/?label=TaZlCIWo5H0QrpztwwM&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>
<div class="thanks_base">
  <?php if($LANG == 'ja'): ?>
    <h1>お問い合わせありがとうございました。</h1>
  <?php else: ?>
    <h1>Thank you for your inquiry.</h1>
  <?php endif; ?>
</div>
<?php include 'footer.php';?>
</body>
</html>
