<header>
    <h1 class="meta-h1"><?= $meta_h1[$LANG] ?></h1>
    <div class="base">
        <a class="img_logo_box" href="/">
            <img class="logo" src="/images/logo.png" width="235" alt="">
        </a>
        <ul id="header_nav">
            <li><a href="#" data-sec="what"><?= $menu1[$LANG] ?></a></li>
            <li><a href="#" data-sec="feature"><?= $menu2[$LANG] ?></a></li>
            <li><a href="#" data-sec="usecase"><?= $menu3[$LANG] ?></a></li>
            <li><a href="#" data-sec="price"><?= $menu4[$LANG] ?></a></li>
            <li><a href="#" data-sec="contact"><?= $menu5[$LANG] ?></a></li>
        </ul>
    </div>
    <button type="button" id="hmenu" class="tcon tcon-menu--xcross" aria-label="toggle menu">
        <span class="tcon-menu__lines" aria-hidden="true"></span>
        <span class="tcon-visuallyhidden">toggle menu</span>
    </button>
</header>