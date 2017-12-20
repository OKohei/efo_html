<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <title><?= $meta_ttl[$LANG] ?></title>
    <meta name="description" content="<?= $meta_desc[$LANG] ?>">
    <meta property="og:title" content="<?= $meta_ttl[$LANG] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="BOTCHAN EFO" />
    <meta property="og:description" content="<?= $meta_desc[$LANG] ?>" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css">
    <link rel="stylesheet" href="./css/index.css?<?= time() ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0,user-scalable=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="./js/lib.js"></script>
    <script src="./js/custom.js?<?= time() ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58831170-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-58831170-4');
    </script>
</head>