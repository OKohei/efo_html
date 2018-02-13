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
<body class="index_page">
<?php include 'header.php';?>
<div id="what">
    <div class="top-page-header" id="header" style="background-image: url(/images/<?php echo $LANG; ?>/header_image.png)">
        <div class="mobile_demo_box">
            <div class="header_demo">
                <img id="mobile_demo" src="/images/mobile_demo_nobutton.png" alt="">
                <p class="start_chat_btn">Start Chat</p>
                <div class="efo_demo"></div>
            </div>
        </div>
        <div class="header_text_box">
            <div class="header_text">
                <div class="header_text_item first">
                    <p><?= $main1[$LANG] ?></p>
                    <p><?= $main2[$LANG] ?></p>
                </div>
                <div class="header_text_item second">
                    <p class="header_item_price"><?= $main3[$LANG] ?></p>
                    <p><?= $main4[$LANG] ?></p>
                    <p><?= $main5[$LANG] ?></p>
                    <p class="title_comment"><?= $main6[$LANG] ?></p>
                </div>
                <p class="header_text_img">
                    <img src="/images/advantages3.png" alt="">
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section bg1">
    <ul class="circle_group clearfix">
        <li>
            <div class="sns_icon fb-like" data-href="http://efo.botchan.chat" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>

        </li>
        <li>
            <div class="sns_icon twitter_back"> <a class="twitter-share-button" href="http://efo.botchan.chat" data-dnt="true"></a></div>
        </li>
        <li>
            <div class="sns_icon hatena_back">
                <a href="http://efo.botchan.chat" class="hatena-bookmark-button" data-hatena-bookmark-title="Botchan EFO" data-hatena-bookmark-layout="simple-balloon" data-hatena-bookmark-lang="ja" title="chatbotがエントリーフォームと連携！新しいカタチのエントリーフォームとしてCVRを向上させるウェブ接客ツールです。"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="chatbotがエントリーフォームと連携！新しいカタチのエントリーフォームとしてCVRを向上させるウェブ接客ツールです。" width="20" height="20" style="border: none;" /></a></a>
            </div>
        </li>
        <li>
            <div class="sns_icon">
                <div class="line-it-button" data-lang="ja" data-type="share-a" data-url="http://efo.botchan.chat" style="display: none;"></div>
            </div>

            <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        </li>
    </ul>


        <div class="text-1-wrapper base">
            <p><?= $context1[$LANG] ?></p>
        </div>
        <div class="text-2-wrapper base">
            <div class="box_container">
                <div class="box_item">
                    <p><?= $context2[$LANG] ?></p>
                </div>
                <div class="box_item">
                    <p><?php echo $context31[$LANG] ?> <br />
                        <?php echo $context32[$LANG] ?>
                    </p>
                </div>
                <div class="box_item">
                    <p><?= $context41[$LANG] ?><br /><?= $context42[$LANG] ?></p>
                </div>
            </div>
        </div>
        <div class="text-3-wrapper base">
            <p><?= $context5[$LANG] ?></p>
        </div>
    </div>

<div id="feature">
    <div class="section bg2" id="flow">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $context6[$LANG] ?></p>
            </div>
            <div class="text-2-content">
                <p><?= $context7[$LANG] ?></p>
                <p><?= $context8[$LANG] ?></p>
            </div>
        </div>
        <div class="bg2_item_box base">
            <div class="bg2_item_cotainer">
                <ul class="bg2_item">
                    <li class="item1">
                        <h2><?= $context9[$LANG] ?></h2>
                        <div class="sp_view">
                            <img src="/images/bg2/item1.png" alt="">
                            <p><?= $context91[$LANG] ?></p>
                        </div>
                    </li>
                    <li class="item2">
                        <h2><?= $context10[$LANG] ?></h2>
                        <div class="sp_view">
                            <img src="/images/bg2/item2.png" alt="">
                            <p><?= $context101[$LANG] ?></p>
                        </div>
                    </li>
                    <li class="item3">
                        <h2><?= $context11[$LANG] ?></h2>
                        <div class="sp_view">
                            <img src="/images/bg2/item3.png" alt="">
                            <p><?= $context111[$LANG] ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section bg3" id="bg3">
    <div class="text-1-box base">
        <div class="text-1-content">
            <p><?= $block31[$LANG] ?></p>
        </div>
        <div class="text-2-content">
            <p><?= $block32[$LANG] ?></p>
        </div>
    </div>
    <div class="bg3_item_box base">
        <div class="bg3_item_cotainer">
            <ul class="bg3_item left">
                <li class="item1" data-iframe_index="0">
                    <p><?= $block33[$LANG] ?></p>
                </li>
                <li class="item2" data-iframe_index="1">
                    <p><?= $block34[$LANG] ?></p>
                </li>
                <li class="item3" data-iframe_index="2">
                    <p><?= $block35[$LANG] ?></p>
                </li>
            </ul>
            <ul class="bg3_item right">
                <li class="item1 left" data-iframe_index="3" style="display: none;">
                    <p><?= $block36[$LANG] ?></p>
                </li>
                <li class="item2" data-iframe_index="4">
                    <p><?= $block37[$LANG] ?></p>
                </li>
                <li class="item3" data-iframe_index="5">
                    <p><?= $block38[$LANG] ?></p>
                </li>
            </ul>
        </div>
    </div>	
	
	<div class="service_view base">
		<div class="service_view_body">	
			<div class="service_item service_pc">
				<div class="out-pc-view">
					<h4 class="service_view_search" style="margin-bottom:16px;">
						<input class="service_view_input_search" placeholder="http://efo.botchan.chat/">
					</h4>
					<div class="efo_demo_pc">
						<div class="wc-webchat-web-pc">
							<iframe class="wc-webchat2" scrolling="no" id="wc-webchat4" src="http://efo.botchan.chat/"></iframe>
						</div>
						<div class="wc-webchat-view-pc"></div>							
					</div>			
				</div>          
				
				
				
			</div>
			<div class="service_item service_mobile">
				<img src="/images/bg4/phone.png" alt="" style="max-width:224px;" id="phone4">
				<div class="efo_demo_mobile"></div>
			</div>
		</div>
	</div>
</div>

<div class="section bg4" id="bg4">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block41[$LANG] ?></p>
            </div>
        </div>
        <div class="bg4_item_box base">
            <div class="bg4_item_cotainer">
                <ul class="bg4_item left">
                    <li class="item1 active">
                        <p><?= $block42[$LANG] ?></p>
                    </li>
                    <li class="item2">
                        <p><?= $block43[$LANG] ?></p>
                    </li>
                    <li class="item3">
                        <p><?= $block44[$LANG] ?></p>
                    </li>
                    <li class="item4">
                        <p><?= $block45[$LANG] ?></p>
                    </li>
                    <li class="item5">
                        <p><?= $block46[$LANG] ?></p>
                    </li>
                </ul>
                <div class="info_item">
                <span>
                     <p><?= $block47[$LANG] ?></p>
                </span>
                </div>
                <div class="service_item">
                    <img class="screen_device" src="/images/bg4/phone.png" alt="">
                    <img class="screen_img" src="/images/bg4/restoration.gif" alt="">
                </div>
            </div>
        </div>
    </div>

<div id="usecase">
    <div class="section bg5" id="bg5">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block51[$LANG] ?></p>
            </div>
        </div>
        <div class="bg5_item_box base">
            <div class="bg5_item_cotainer">
                <ul class="bg5_item">
                    <li class="item1">
                        <div class="step_content">
                            <div class="step_title">
                                <p class="label1">Step 1</p>
                                <p class="label2"><?= $block52[$LANG] ?></p>
                            </div>
                            <div class="step_image">
                                <img class="step_img" src="/images/bg5/step1.png" alt="">
                            </div>
                            <p class="label3"><?= $block53[$LANG] ?></p>
                        </div>
                    </li>
                    <li class="item2">
                        <div class="step_content next_step">
                            <p class="label1"><?= $block54[$LANG] ?></p>
                            <div class="step_image next">
                                <img src="/images/bg5/arow_next.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="item3">
                        <div class="step_content">
                            <div class="step_title">
                                <p class="label1">Step 2</p>
                                <p class="label2"><?= $block55[$LANG] ?></p>
                            </div>
                            <div class="step_image">
                                <img class="step_img" src="/images/bg5/step2.png" alt="">
                            </div>
                            <p class="label3"><?= $block56[$LANG] ?></p>
                        </div>
                    </li>
                    <li class="item4">
                        <div class="step_content next_step">
                            <p class="label1"><?= $block57[$LANG] ?></p>
                            <div class="step_image next">
                                <img src="/images/bg5/arow_next.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="item5">
                        <div class="step_content">
                            <div class="step_title">
                                <p class="label1">Step 3</p>
                                <p class="label2"><?= $block58[$LANG] ?></p>
                            </div>
                            <div class="step_image">
                                <img class="step_img" src="/images/bg5/step3.png" alt="">
                            </div>
                            <p class="label3"><?= $block59[$LANG] ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="price">
    <div class="section bg6" id="bg6">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block61[$LANG] ?></p>
            </div>
        </div>
        <div class="bg6_box base">
            <div class="bg6_cotainer">
                <table class="table">
                    <tbody>
                    <tr class="item1">
                        <td><?= $block62[$LANG] ?></td>
<!--                        <td>--><?//= $block621[$LANG] ?><!--</td>-->
                        <td><img class="first_price" src="/images/bg6/first_price2.png" alt=""></td>
                    </tr>
                    <tr class="item_img">
                        <td colspan="2">
                            <div class="table_icon_box">
                                <img src="/images/bg6/table_icon.png" alt="">
                            </div>
                        </td>
                    </tr>
                    <tr class="item2">
                        <td><?= $block63[$LANG] ?></td>
                        <td><?= $block631[$LANG] ?></td>
                    </tr>
                    <tr class="item3">
                        <td><?= $block64[$LANG] ?></td>
                        <td><?= $block641[$LANG] ?></td>
                    </tr>
                    <tr class="item4">
                        <td><?= $block65[$LANG] ?></td>
                        <td><?= $block651[$LANG] ?></td>
                    </tr>
                    <tr class="item5">
                        <td><?= $block66[$LANG] ?></td>
                        <td><?= $block661[$LANG] ?></td>
                    </tr>
                    </tbody>
                </table>
                <div class="title_bottom_box">
                    <p class="title_bottom"><?= $block67[$LANG] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact">
    <div class="section bg7" id="bg7">
        <div class="text-1-box base">
            <div class="text-1-content">
                <p><?= $block71[$LANG] ?></p>
            </div>
        </div>
        <div class="bg7_item_box base">
            <div class="bg7_item_cotainer">
                <ul class="bg7_item">
                    <li class="item1">
                        <div class="contact_content">
                            <div class="title">
                                <p><img src="/images/bg7/icon1.png" alt=""><?= $block72[$LANG] ?></p>
                            </div>
                            <div class="content">
                                <p class="phone"><?= $block721[$LANG] ?></p>
                                <p class="subtitle"><?= $block722[$LANG] ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="item2">
                        <div class="contact_content">
                            <div class="title">
                                <p><img src="/images/bg7/icon2.png" alt=""><?= $block73[$LANG] ?></p>
                            </div>
                            <div class="content">
                                <p><a class="contact" href="https://admin.botchan.chat:3030/efo?connect_page_id=5a3a292e05940871e066b422" target="_blank"><?= $block731[$LANG] ?></a></p>
                            </div>
                        </div>
                    </li>
                    <li class="item3">
                        <div class="contact_content">
                            <div class="title">
                                <p><img src="/images/bg7/icon3.png" alt=""><?= $block74[$LANG] ?></p>
                            </div>
                            <div class="content">


                                <p>
                                    <span id="openBotchanEfo"><?= $block741[$LANG] ?>&gt;</span>

                                    </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>
<script>
    var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    (function() {
        var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
        atag.src = _protocol + 'app.skele-ton.com/lpo-heatmap.js';
        var s = document.getElementsByTagName('script')[0];
        window["lpo-heatmap"] = "LPO-2685833183-1";
        s.parentNode.insertBefore(atag, s);
    })();
</script>


<!-- [head]内や、[body]の終了直前などに配置 -->
<script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async">
    {lang: "ja"}
</script>
<script>
    window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.11&appId=688268881331892';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script src="https://apis.google.com/js/platform.js" async defer>
    {lang: "ja"}
</script>
<script>
    $(function(){
        setSnsShare("http://efo.botchan.chat", "<?= $meta_desc[$LANG] ?>");
    });

</script>
<link href="https://app2.botchan.chat/css/efo.css" rel="stylesheet">
<script src="https://app2.botchan.chat/js/efo.js"></script>
<script>
    embot_init('https://app2.botchan.chat/efo', '5a3a292e05940871e066b422');
</script>
</html>
