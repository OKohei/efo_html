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
<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
  /* <![CDATA[ */
  var yahoo_conversion_id = 1000276976;
  var yahoo_conversion_label = "2UvYCNms8X4Q6Y3svQM";
  var yahoo_conversion_value = 0;
  /* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1000276976/?value=0&label=2UvYCNms8X4Q6Y3svQM&guid=ON&script=0&disvt=true"/>
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
