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
<body class="contact_page">
<?php include 'header.php';?>
<div id="header" style="background-image: url(/images/<?php echo $LANG; ?>/header_image.png)">
    <div class="header_text_box">
        <div class="header_text">
            <div class="header_text_item first">
                <p><?= $contact11[$LANG] ?></p>
            </div>
            <div class="header_text_item second">
                <p><?= $contact12[$LANG] ?></p>
            </div>
        </div>
    </div>
    <div class="breadcumb">
        <div class="base">
            <div class="breadcumb_container">
                <div class="item">
                    <p><?= $contact13[$LANG] ?></p>
                </div>
                <span class="breadcumb_right"> > </span>
                <div class="item">
                    <p><?= $contact14[$LANG] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact_base base">
    <div class="contact_title">
        <h3><?= $contact11[$LANG] ?></h3>
    </div>
    <form action="./thanks.php" method="post">
        <table class="table">
            <tbody>
            <tr class="item1">
                <td>
                    <p><?= $contact21[$LANG] ?></p>
                    <span class="require"><?= $contact20[$LANG] ?></span>
                </td>
                <td><input type="text" name="person_name" value="" placeholder="<?= $contact211[$LANG] ?>" required /></td>
            </tr>
            <tr class="item2">
                <td>
                    <p><?= $contact22[$LANG] ?></p>
                    <span class="require"><?= $contact20[$LANG] ?></span>
                </td>
                <td><input type="email" name="mail" value="" placeholder="<?= $contact221[$LANG] ?>" required /></td>
            </tr>
            <tr class="item3">
                <td>
                    <p><?= $contact23[$LANG] ?></p>
                    <span class="require"><?= $contact20[$LANG] ?></span>
                </td>
                <td><input type="email" name="mail_confirm" value="" placeholder="<?= $contact231[$LANG] ?>" required /></td>
            </tr>
            <tr class="item4">
                <td>
                    <p><?= $contact24[$LANG] ?></p>
                </td>
                <td><input type="tel" name="tel" value="" placeholder="<?= $contact241[$LANG] ?>" /></td>
            </tr>
            <tr class="item5">
                <td>
                    <p><?= $contact25[$LANG] ?></p>
                    <span class="require"><?= $contact20[$LANG] ?></span>
                </td>
                <td><textarea name="content" id="" cols="30" rows="10" placeholder="<?= $contact251[$LANG] ?>" required></textarea></td>
            </tr>
            </tbody>
        </table>
        <div class="submit">
            <input type="submit" value="<?= $contact26[$LANG] ?>">
        </div>
    </form>
</div>
<?php include 'footer.php';?>
</body>
</html>
