<!DOCTYPE html>
<html>
<head>
    <title>Menu | ABP News</title>
    <?php include '_meta.php'; ?>
</head>
<body>
<div id="wrapper">
    <div id="content">
        <div class="uk-text-center uk-padding-small">
            <!-- <img data-src="img/abp_live_logo.webp" class="menu-logo" alt="Logo" width="60" uk-img> -->
            <span class="abp_icon abp_logo menu-logo"></span>
        </div>
        <div class="uk-padding-small menu-search-form">
            <div class="uk-card menu-card uk-padding-small uk-background-muted-light uk-flex uk-flex-middle uk-flex-between">
                <div>
                    <a href="search.php">
                        <img data-src="img/icons/search-red.svg" alt="search" width="24" uk-img/>
                    </a>
                </div>
                <div class="language-drop">
                    <button class="uk-button uk-button-white uk-button-pill uk-button-small box-shadow" type="button">Hindi | हिंदी <span uk-icon="icon: triangle-down"></span></button>
                    <div uk-dropdown="mode: click; animation: uk-animation-slide-top-small; pos: bottom-right; offset: 0">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="#">English | हिंदी</a></li>
                            <li><a href="#">Marathi | हिंदी</a></li>
                            <li><a href="#">Bengali | हिंदी</a></li>
                            <li><a href="#">Punjabi | हिंदी</a></li>
                            <li><a href="#">Gujrati | हिंदी</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--
                Uncomment following for working search bar
             <div class="uk-margin search-bar">
                <form class="uk-search uk-search-default uk-width-1-1 uk-position-relative">
                    <span class="search-icon-img uk-position-center-left uk-margin-small-left"><img src="img/icons/search-red.svg" alt="search" width="24" /></span>
                    <input class="uk-search-input uk-width-1-1" type="search" />
                </form>
            </div> -->

            <div class="uk-card uk-card-default uk-padding-small uk-margin box-shadow">
                <ul class="menu-page" uk-accordion>
                    <li>
                        <a class="uk-accordion-title" href="#"><span class="icon abp_icon abp_news"></span> न्यूज़</a>
                        <div class="uk-accordion-content">
                            <div class="uk-grid uk-child-width-1-2">
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Indi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">UP/UK</a></li>
                                        <li><a href="#">Bihar</a></li>
                                        <li><a href="#">Round Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span class="icon abp_icon abp_sports"></span> स्पोर्ट्स</a>
                        <div class="uk-accordion-content">
                            <div class="uk-grid uk-child-width-1-2">
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Indi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">UP/UK</a></li>
                                        <li><a href="#">Bihar</a></li>
                                        <li><a href="#">Round Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span class="icon abp_icon abp_og"></span> ओरिगिनाल्स</a>
                        <div class="uk-accordion-content">
                            <div class="uk-grid uk-grid-small uk-child-width-1-2">
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Indi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">UP/UK</a></li>
                                        <li><a href="#">Bihar</a></li>
                                        <li><a href="#">Round Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span class="icon abp_icon abp_biz"></span> बिज़नेस</a>
                        <div class="uk-accordion-content">
                            <div class="uk-grid uk-child-width-1-2">
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Indi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">UP/UK</a></li>
                                        <li><a href="#">Bihar</a></li>
                                        <li><a href="#">Round Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span class="icon abp_icon abp_ent"></span> एंटरटेंमेंट</a>
                        <div class="uk-accordion-content">
                            <div class="uk-grid uk-child-width-1-2">
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">Politics</a></li>
                                        <li><a href="#">World</a></li>
                                        <li><a href="#">Indi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="uk-list menu-list">
                                        <li><a href="#">UP/UK</a></li>
                                        <li><a href="#">Bihar</a></li>
                                        <li><a href="#">Round Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="menu-page">
                    <li><a href="#" title="एस्ट्रो"><span class="icon abp_icon abp_astro"></span> एस्ट्रो</a></li>
                    <li><a href="#" title="क्राइम"><span class="icon abp_icon abp_crime"></span> क्राइम</a></li>
                    <li><a href="#" title="मिसलेनियस"><span class="icon abp_icon abp_misc"></span> मिसलेनियस</a></li>
                </ul>
            </div>

            <div class="uk-card uk-card-default uk-padding-small uk-margin box-shadow">
                <ul class="menu-page">
                    <li><a href="#" title="एस्ट्रो"><span class="icon abp_icon abp_acnt"><img data-src="img/icons/profile.svg" uk-img width="22"></span> माय अकाउंट</a></li>
                    <li><a href="#" title="क्राइम"><span class="icon abp_icon abp_notf"><img data-src="img/icons/bell.svg" uk-img width="22"></span> नोटिफिकेशन्स अलर्ट</a></li>
                    <li><a href="#" title="मिसलेनियस"><span class="icon abp_icon abp_bookm"><img data-src="img/logo-symbol.svg" uk-img width="20"></span> बुकमार्क्स</a></li>
                    <li><a href="#" title="मिसलेनियस"><span class="icon abp_icon abp_offline"><img data-src="img/logo-symbol.svg" uk-img width="20"></span> ऑफलाइन समाचार</a></li>
                    <li><a href="#" title="मिसलेनियस"><span class="icon abp_icon abp_cj"><img data-src="img/logo-symbol.svg" uk-img width="20"></span> सिटीजन जर्नलिज़म</a></li>
                    <li><a href="#" title="मिसलेनियस"><span class="icon abp_icon abp_about"><img data-src="img/logo-symbol.svg" uk-img width="20"></span> हमारे बारे में</a></li>
                </ul>
            </div>

        </div>
    </div><!-- #content -->
    <?php include '_footer.php'; ?>
</div><!-- #wrapper -->
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>