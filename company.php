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
<body class="company_page">
<?php include 'header.php';?>
<div id="header" style="background-image: url(/images/<?php echo $LANG; ?>/header_image.png)">
    <div class="header_text_box">
        <div class="header_text">
            <div class="header_text_item first">
                <p><?= $company11[$LANG] ?></p>
            </div>
            <div class="header_text_item second">
                <p><?= $company12[$LANG] ?></p>
            </div>
        </div>
    </div>
    <div class="breadcumb">
        <div class="base">
            <div class="breadcumb_container">
                <div class="item">
                    <p><?= $company21[$LANG] ?></p>
                </div>
                <span class="breadcumb_right"> > </span>
                <div class="item">
                    <p><?= $company22[$LANG] ?></p>
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
                <td>株式会社HUVRID
                    <br />
                    <a href="http://huvrid.co.jp/">http://huvrid.co.jp/</a><br /><br />
                </td>
            </tr>

            <tr>
                <td>関連会社</td>
                <td>Tokyo Mild Foundation 株式会社<br />
                    <a href="http://tokyomildfoundation.com/">http://tokyomildfoundation.com/</a><br /><br />
                </td>
            </tr>

            <tr>
                <td>関連会社</td>
                <td>ベトナム オフショアラボ開発<br />
                    18F,Ladeco Building, 266 DoiCan StrBaDinh, Hanoi, Vietnam<br /><br />
                </td>
            </tr>


            <tr>
                <td>事業内容</td>
                <td>インターネット広告代理事業<br />
                    インターネットメディア事業<br />
                    Web制作事業<br />
                    AI・IoT事業<br /><br />
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

<?php include 'footer.php';?>
</body>
</html>
