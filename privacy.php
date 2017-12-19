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
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="./js/lib.js"></script>
        <script src="./js/custom.js"></script>
    </head>
<body class="privacy_page">
<?php include 'header.php';?>
<div id="header" style="background-image: url(/images/<?php echo $LANG; ?>/header_image.png)">
  <div class="header_text_box">
    <div class="header_text">
      <div class="header_text_item first">
          <p><?= $privacy11[$LANG] ?></p>
      </div>
      <div class="header_text_item second">
          <p><?= $privacy12[$LANG] ?></p>
      </div>
    </div>
  </div>
    <div class="breadcumb">
        <div class="base">
            <div class="breadcumb_container">
                <div class="item">
                    <p><?= $privacy21[$LANG] ?></p>
                </div>
                <span class="breadcumb_right"> > </span>
                <div class="item">
                    <p><?= $privacy22[$LANG] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact_base base">
    <div class="contact_title">
        <h3><?= $privacy22[$LANG] ?></h3>
    </div>
    <div class="privacy_content">
        <?php if($LANG == 'ja'): ?>

            <h4>プライバシーポリシー</h4>
            <p>株式会社wevnal（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、
                全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>

            <h5>個人情報の管理</h5>
            <p>当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、
                セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。</p>

            <h5>個人情報の利用目的</h5>
            <p>お客さまからお預かりした個人情報は、
                当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>

            <h5>個人情報の第三者への開示・提供の禁止</h5>
            <p>当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br />
            <ul>
                <li>お客さまの同意がある場合</li>
                <li>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
                <li>個人を識別することができない状態で開示・提供する場合</li>
                <li>合併、会社分割、営業譲渡その他の事由によって事業が承継される場合</li>
                <li>法令に基づき開示することが必要である場合</li>
            </ul>
            </p>

            <h5>個人情報の安全対策</h5>
            <p>当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>

            <h5>ご本人の照会</h5>

            <p>お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、
                ご本人であることを確認の上、対応させていただきます。</p>

            <h5>苦情及び相談への対応</h5>

            <p>個人情報の取扱いに関する苦情、相談、問い合わせ等には誠実かつ迅速に対応するよう努めます。</p>

            <h5>法令、規範の遵守と見直し</h5>
            <p>当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、
                本ポリシーの内容を適宜見直し、その改善に努めます。</p>

            <h5>お問い合せ</h5>

            <p>当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>

            <p>〒150-0002 東京都渋谷区渋谷1-11-8 渋谷パークプラザ5F<br />
                株式会社wevnal<br />
                代表取締役社長 磯山博文<br />
                TEL:03-5766-8877 FAX:03-5766-8878</p>


        <?php else: ?>

            <h4>Privacy Policy</h4>

            <p>wevnal Inc. (our company below), to comply with the Code and other laws and regulations
                regarding personal information,and care is taken to ensure the protection of important personal information of our customers.</p>

            <h5>Management of personal information</h5>
            <p>Our company keeps customers' personal information updated precisely, take necessary measurements for management of security systems, arrangement of an administrative structure, in-depth education for employees and manage personal information in a very strict way with protection measurements so that we can prohibit illegal accesses, losses, curruption, falsification and divulgation of personal information.</p>

            <h5>Purpose of using personal information</h5>

            <p>Personal information which we collect from customers are used only when we send e-mails or pamphlets to contact them, to announce notices or to reply inquiries.</p>

            <h5>Prohibition of disclosure or share of personal information to others</h5>

            <p>Our company manage personal information which we collect from customers in a proper way and never disclose personal information except for the following cases.</p>
            <p>
            <ol>
                <li>When customers agree with the disclosure</li>
                <li>When our company discloses personal informations to outsourcing contractors in order to provide services to customers after they order the services.</li>
                <li>When disclosure of personal information is required by law.</li>
                <li>When our company discloses personal informations in the state of indistinguishable data.</li>
                <li>When our company at amalgamation or asset purchase or company split or any other causes to inherit our business to other companies.</li>
            </ol>
            </p>

            <h5>Safety measures for personal information</h5>
            <p>Our Company takes all
                possible measures to ensure security of personal information for safety and accuracy.</p>

            <h5>Inquiry of Customers</h5>
            <p>When our customers request their personal information to be inquired, revised, or deleted, they must show their ID.</p>
            <p>We work hard and shall attend claims and consult with customers.<br />
                Our Company complies with norms which is applicable to the protection of
                personal information such as laws, regulations and guidelines regulated by
                the government for the handling of personal information.
                Our Company also arrange the conformity of our management rules of personal information with these norms.<br />
                - Continuous review and improvement<br />
                - Continuous evaluation and improvement<br /></p>

            <h5>[Contact Center for complaints and inquiries about our personal information handling]</h5>
            <p>Contact us at below for inquiries about our personal information handling.</p>
            <p>Shibuya Park Plaza 5F, 1-11-8 Shibuya, Shibuyaku, Tokyo 150-0002<br />
                wevnal Inc.<br />
                Representative President : Hirofumi Isoyama<br />
                TEL : +81-3-5766-8877 FAX:+81-3-5766-8878</p>

        <?php endif; ?>
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
