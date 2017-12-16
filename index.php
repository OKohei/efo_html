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
            });
        </script>
    </head>
<body>
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
    <div class="mobile_demo_box">
        <img id="mobile_demo" src="/images/mobile_demo.png" alt="">
    </div>
    <div class="header_text_box">
        <div class="header_text">
            <div class="header_text_item first">
                <p>ad jasds jdajd asld sdfd</p>
                <p>ad jasds jdajd asld sdfd</p>
            </div>
            <div class="header_text_item second">
                <p>ad jasds jdajd asld sdfd</p>
                <p>ad jasds jdajd asld sdfd sdfsd</p>
                <p>ad jasds jdajd asld sdf dd</p>
            </div>
        </div>
    </div>
</div>

<div class="section bg1" id="feature">
    <div class="text-1-wrapper base">
        <p>asdas dasdsd asd asdsdasdsdsd</p>
    </div>
    <div class="text-2-wrapper base">
        <div class="box_container">
            <div class="box_item">
                <p>asdas dasdsd asd asdsdasdsdsd</p>
            </div>
            <div class="box_item">
                <p>asdas dasdsd asd asdsdasdsdsd</p>
            </div>
            <div class="box_item">
                <p>asdas dasdsd asd asdsdasdsdsd</p>
            </div>
        </div>
    </div>
    <div class="text-3-wrapper base">
        <p>asdas dasdsd asd asds dasd sdas dasd asasdd asdasdsdsd</p>
    </div>
</div>

<div class="section bg2" id="flow">
    <div class="text-1-box base">
        <div class="text-1-content">
            <p>BOTCHAN EFO fsd fs fsdfsd dfsdf</p>
        </div>
        <div class="text-2-content">
            <p>CVR sdf sfsdf sdfsdfsd sdf</p>
            <p>BOTCHAN EFO fsd fs fsdfsd dfsd sdf sdfsdsdfsd fsdff</p>
        </div>
    </div>
    <div class="bg1_item_box base">
        <ul class="bg1_item base">
            <li>
                <h2>sds gfgdfg dfgdfg dfgdf</h2>
                <img src="/images/bg2/item1.png" alt="">
                <p><?= $flow2[$LANG] ?></p>
            </li>
            <li>
                <h2>sds gfgdfg dfgdfg dfgdf</h2>
                <img src="/images/bg2/item2.png" alt="">
                <p><?= $flow4[$LANG] ?></p>
            </li>
            <li>
                <h2>sds gfgdfg dfgdfg dfgdf</h2>
                <img src="/images/bg2/item3.png" alt="">
                <p><?= $flow6[$LANG] ?></p>
            </li>
        </ul>
    </div>
</div>


<div class="section" id="price">
    <div class="header">
        <img src="/images/<?php echo $LANG; ?>/price/price_ttl_header.png" alt="料金プラン">
    </div>
    <div class="price_initialcost base">
        <p class="price_initialcost_ttl"><img src="/images/<?php echo $LANG; ?>/price/price_initialcost_ttl.png" alt="初期導入費"></p>
        <div class="price_initialcost_txtWrapper">
            <p class="price_initialcost_txt">
                <img src="/images/<?php echo $LANG; ?>/price/price_initialcost_txt.png" alt="通常100,000円のところ期間限定で無料！" class="disp-pc">
                <img src="/images/<?php echo $LANG; ?>/price/price_initialcost_txt_sp.png" alt="通常100,000円のところ期間限定で無料！" class="disp-sp">
            </p>
            <p class="price_initialcost_period"><?= $price1[$LANG] ?></p>
        </div>
    </div>
    <div class="price_plan base">
        <p class="price_plan_cont">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_free.png" alt="フリープラン" class="disp-pc">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_free_sp.png" alt="フリープラン" class="disp-sp">
        </p>
        <p class="price_plan_cont">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_minimum.png" alt="ミニマムプラン" class="disp-pc">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_minimum_sp.png" alt="ミニマムプラン" class="disp-sp">
        </p>
        <p class="price_plan_cont">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_standard.png" alt="スタンダードプラン" class="disp-pc">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_standard_sp.png" alt="スタンダードプラン" class="disp-sp">
        </p>
        <p class="price_plan_cont">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_wagamama.png" alt="ワガママプラン" class="disp-pc">
            <img src="/images/<?php echo $LANG; ?>/price/price_plan_wagamama_sp.png" alt="ワガママプラン" class="disp-sp">
        </p>
    </div>
    <div class="price_entry">
        <p class="price_entry_btn"><a href="https://admin.botchan.chat/auth/register/?lang=<?= $LANG; ?>">
                <img src="/images/<?php echo $LANG; ?>/price/price_entry_btn.png" alt="無料アカウント登録" class="disp-pc">
                <img src="/images/<?php echo $LANG; ?>/price/price_entry_btn_sp.png" alt="無料アカウント登録" class="disp-sp">
            </a></p>
        <p class="price_entry_txt"><?= $price2[$LANG] ?></p>
    </div>
    <div class="price_option base">
        <p class="price_option_ttl"><img src="/images/<?php echo $LANG; ?>/price/price_ttl_option.png" alt="オプション"></p>
        <p class="price_option_txt"><?= $price3[$LANG] ?></p>
        <ul class="price_option_list">
            <li class="price_option_item">
                <p class="price_option_item_ttl"><?= $price4[$LANG] ?></p>
                <p class="price_option_item_txt"><?= $price5[$LANG] ?></p>
            </li>
            <li class="price_option_item">
                <p class="price_option_item_ttl"><?= $price6[$LANG] ?></p>
                <p class="price_option_item_txt"><?= $price7[$LANG] ?></p>
            </li>
            <li class="price_option_item">
                <p class="price_option_item_ttl"><?= $price8[$LANG] ?></p>
                <p class="price_option_item_txt"><?= $price9[$LANG] ?></p>
            </li>
            <li class="price_option_item">
                <p class="price_option_item_ttl"><?= $price10[$LANG] ?></p>
                <p class="price_option_item_txt"><?= $price11[$LANG] ?></p>
            </li>
            <li class="price_option_item">
                <p class="price_option_item_ttl"><?= $price12[$LANG] ?></p>
                <p class="price_option_item_txt"><?= $price13[$LANG] ?></p>
            </li>
        </ul>
    </div>

</div>


<div class="section" id="contact">
    <div class="header">
        <img src="/images/<?php echo $LANG; ?>/contact/header.png" width="200" alt="">
    </div>
    <p class="text-6-text"><?= $contact1[$LANG] ?></p>
    <div class="text-6-images">
        <img class="left" src="/images/<?php echo $LANG; ?>/contact/left.png" width="30%" alt="">
        <a href="./contact.php?lang=<?= $LANG; ?>">
            <img src="/images/<?php echo $LANG; ?>/contact/right.png" width="30%" alt="">
        </a>
    </div>
</div>

<div class="section bg1">
    <div class="header">
        <img src="/images/<?php echo $LANG; ?>/faq/header.png" width="200" alt="">
        <?php if ($LANG=='ja'){ ?>
            <div class="header2">

                <img src="/images/<?php echo $LANG; ?>/faq/faq.png" width="100" alt="">

            </div>
        <?php } ?>
    </div>
    <div>
        <ul class="text-6-list base">
            <li>
                <div class="q">
                    <?= $faq1[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq2[$LANG] ?>
                </div>
            </li>

            <li>
                <div class="q">
                    <?= $faq3[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq4[$LANG] ?>
                </div>
            </li>

            <li>
                <div class="q">
                    <?= $faq5[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq6[$LANG] ?>
                </div>
            </li>

            <li>
                <div class="q">
                    <?= $faq7[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq8[$LANG] ?>
                </div>
            </li>

            <li>
                <div class="q">
                    <?= $faq9[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq10[$LANG] ?>
                </div>
            </li>


            <li>
                <div class="q">
                    <?= $faq11[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq12[$LANG] ?>
                </div>
            </li>

            <li>
                <div class="q">
                    <?= $faq13[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq14[$LANG] ?>
                </div>
            </li>

            <li>
                <div class="q">
                    <?= $faq15[$LANG] ?>
                </div>
                <div class="a">
                    <?= $faq16[$LANG] ?>
                </div>
            </li>

        </ul>
    </div>
    <div class="faq_link">
        <p class="sign_up fc-black">
            <a href="https://admin.botchan.chat/auth/register/?lang=<?= $LANG; ?>"><?= $btn_sign_up[$LANG] ?></a>
        </p>
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

<!-- SKELETON -->

<!-- END.SKELETON -->

</body>
</html>
