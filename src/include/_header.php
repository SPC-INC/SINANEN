<?php require_once '_core.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" itemprop="description" content="<?php echo $meta['description']; ?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $meta['keyword']; ?>" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->
    <title><?php echo $meta['title']; ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $home; ?>css/common.css" />

    <link rel="canonical" href="<?php echo $meta['canonical']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $meta['title']; ?>" />
    <meta property="og:description" content="<?php echo $meta['description']; ?>" />
    <meta property="og:image" content="<?php echo $meta['sitetop']; ?>img/og.png" />
    <meta property="og:image:width" content="1440" />
    <meta property="og:image:height" content="900" />
    <meta property="og:site_name" content="<?php $meta['sitename']; ?>" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image" />
</head>

<body>
    <div id="overlay" class="md-overlay"></div>
    <header id="header" class="header" itemscope="" itemtype="https://schema.org/WPHeader">
        <div class="header__frame">
            <div class="header__base flex bet str">
                <div class="header__left flex vcenter">
                    <a class="headerLogo" href="<?php echo HOME; ?>">
                        <?php echo IS_HOME ? '<h1 class="headerLogo__in flex vcenter">' : '<span class="headerLogo__in flex vcenter">'; ?>
                        <img class="headerLogo__img" src="<?php echo HOME; ?>img/logo.svg" alt="シナネンホールディングス">
                        <?php echo IS_HOME ?  '</h1>' : '</span>'; ?>
                    </a>
                </div>
                <div class="header__right flex">
                    <div class="pc headerPulldown">
                        <a href="<?php echo HOME; ?>aboutus/" class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">ABOUT US</span>
                            <span class="headerPulldown__head--ja">会社紹介</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </a>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__wrapper flex bet">
                                    <div class="headerPulldown__ttl">
                                        <h2 class="headerPulldown__ttl--inner flex vert">
                                            <span class="headerPulldown__ttl--en">ABOUT US</span>
                                            <span class="headerPulldown__ttl--ja notos">会社紹介</span>
                                        </h2>
                                        <div class="headerPulldown__ttl--link">
                                            <a href="<?php echo HOME; ?>aboutus/" class="headerPulldown__ttl--btn md-btn red left-text">
                                                会社紹介TOP
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="headerPulldown__dtl flex notos">
                                        <a href="<?php echo HOME; ?>aboutus/topmessage/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_aboutus_01.png" alt="">
                                            社長インタビュー
                                        </a>
                                        <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_aboutus_02.png" alt="">
                                            シナネンHDグループの<br>挑戦と進化
                                        </a>
                                        <a href="<?php echo HOME; ?>aboutus/SDGs/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_aboutus_03.png" alt="">
                                            SDGsへの取り組み
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc headerPulldown">
                        <a href="<?php echo HOME; ?>business/" class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">BUSINESS</span>
                            <span class="headerPulldown__head--ja">事業紹介</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </a>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__wrapper flex bet">
                                    <div class="headerPulldown__ttl">
                                        <h2 class="headerPulldown__ttl--inner flex vert">
                                            <span class="headerPulldown__ttl--en">BUSINESS</span>
                                            <span class="headerPulldown__ttl--ja notos">事業紹介</span>
                                        </h2>
                                        <div class="headerPulldown__ttl--link">
                                            <a href="<?php echo HOME; ?>business/" class="headerPulldown__ttl--btn md-btn red left-text">
                                                事業紹介TOP
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="headerPulldown__dtl flex notos">
                                        <a href="<?php echo HOME; ?>business/btoc/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_business_01.png" alt="">
                                            BtoC事業
                                        </a>
                                        <a href="<?php echo HOME; ?>business/btob/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_business_02.png" alt="">
                                            BtoB事業
                                        </a>
                                        <a href="<?php echo HOME; ?>business/other/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_business_03.png" alt="">
                                            非エネルギー事業
                                        </a>
                                        <a href="<?php echo HOME; ?>future/" class="headerPulldown__dtl--link flex vert vcenter op">
                                            <img src="<?php echo HOME; ?>img/header_business_04.png" alt="">
                                            シナネンHDグループが<br>描く未来
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc headerPulldown">
                        <a href="<?php echo HOME; ?>person/" class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">INTERVIEW</span>
                            <span class="headerPulldown__head--ja">インタビュー</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </a>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__wrapper flex bet">
                                    <div class="headerPulldown__ttl">
                                        <h2 class="headerPulldown__ttl--inner flex vert">
                                            <span class="headerPulldown__ttl--en">INTERVIEW</span>
                                            <span class="headerPulldown__ttl--ja notos">インタビュー</span>
                                        </h2>
                                        <div class="headerPulldown__ttl--link">
                                            <a href="<?php echo HOME; ?>person/" class="headerPulldown__ttl--btn md-btn red left-text">
                                                インタビューTOP
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="headerPulldown__dtl flex notos">
                                        <div class="headerPulldown__interview">
                                            <a href="<?php echo HOME; ?>person/interview01/" class="headerPulldown__link flex vcenter">
                                                S.Takahashi
                                            </a>
                                            <a href="<?php echo HOME; ?>person/interview02/" class="headerPulldown__link flex vcenter">
                                                K.Kazuma
                                            </a>
                                            <a href="<?php echo HOME; ?>person/interview03/" class="headerPulldown__link flex vcenter">
                                                K.Yanagihara
                                            </a>
                                            <a href="<?php echo HOME; ?>person/interview04/" class="headerPulldown__link flex vcenter">
                                                S.Kanno
                                            </a>
                                        </div>
                                        <div class="headerPulldown__crosstalk">
                                            <div class="headerPulldown__crosstalk--head">
                                                クロストーク
                                            </div>
                                            <a href="<?php echo HOME; ?>person/crosstalk01/" class="headerPulldown__link flex vcenter">
                                                01&nbsp;&nbsp;トレーナー×トレーニー
                                            </a>
                                            <a href="<?php echo HOME; ?>person/crosstalk02/" class="headerPulldown__link flex vcenter">
                                                02&nbsp;&nbsp;13年目×5年目×3年目対談
                                            </a>
                                            <a href="<?php echo HOME; ?>person/crosstalk03/" class="headerPulldown__link flex vcenter">
                                                03&nbsp;&nbsp;女性の活躍について
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc headerPulldown">
                        <a href="<?php echo HOME; ?>recruit/" class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">RECRUIT</span>
                            <span class="headerPulldown__head--ja">採用情報</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </a>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__wrapper flex bet">
                                    <div class="headerPulldown__ttl">
                                        <h2 class="headerPulldown__ttl--inner flex vert">
                                            <span class="headerPulldown__ttl--en">RECRUIT</span>
                                            <span class="headerPulldown__ttl--ja notos">採用情報</span>
                                        </h2>
                                        <div class="headerPulldown__ttl--link">
                                            <a href="<?php echo HOME; ?>recruit/" class="headerPulldown__ttl--btn md-btn red left-text">
                                                採用情報TOP
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="headerPulldown__recruit flex break notos">
                                        <a href="<?php echo HOME; ?>recruit/requirements/" class="headerPulldown__link flex vcenter">
                                            募集要項
                                        </a>
                                        <a href="<?php echo HOME; ?>recruit/personality/" class="headerPulldown__link flex vcenter">
                                            求める人物像
                                        </a>
                                        <a href="<?php echo HOME; ?>recruit/flow/" class="headerPulldown__link flex vcenter">
                                            採用フロー
                                        </a>
                                        <a href="<?php echo HOME; ?>recruit/environment/" class="headerPulldown__link flex vcenter">
                                            働く環境
                                        </a>
                                        <a href="<?php echo HOME; ?>recruit/faq/" class="headerPulldown__link flex vcenter">
                                            よくある質問
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo HOME; ?>entry/" class="pc headerNav__btn headerNav__btn--mypage md-btn stay">
                        <span class="headerNav__btn--en">MYPAGE</span>
                        <span class="headerNav__btn--ja">マイページ</span>
                    </a>
                    <a href="<?php echo HOME; ?>entry/" class="pc headerNav__btn headerNav__btn--entry md-btn stay">
                        <span class="headerNav__btn--en">ENTRY</span>
                        <span class="headerNav__btn--ja">エントリー</span>
                    </a>
                    <button type="button" id="gNav-open" class="sp gNavBtn">
                        <div class="gNavBtn__box">
                            <span class="gNavBtn__bar"></span>
                            <span class="gNavBtn__bar"></span>
                            <span class="gNavBtn__bar"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <?php
    /*
 ######           ##    ##    ###    ##     ##
##                ####  ##  ##   ##  ##     ##
##   #### ####### ## ## ## ##     ## ##     ##
##    ##          ##  #### #########  ##   ##
 ######           ##    ## ##     ##    ###
*/
    ?>
    <nav id="gNav" class="gNav" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
        <div class="gNav__contact">
            <a href="<?php echo HOME; ?>contact/" class="gNav__btn gNav__btn--entry md-btn left-text">
                エントリー
            </a>
            <a href="<?php echo HOME; ?>contact/" class="gNav__btn gNav__btn--mypage md-btn left-text">
                マイページ
            </a>
        </div>
        <div class="gNav__menu md-acc">
            <div class="gNav__box">
                <input id="gNav1" class="acc-check" type="checkbox" value="" />
                <label for="gNav1" class="acc-btn gNav__item flex vcenter">
                    会社紹介
                    <i class="gNav__icon gNav__icon icon-down"></i>
                </label>
                <div class="acc-body">
                    <div class="acc-in">
                        <a href="<?php echo HOME; ?>aboutus/topmessage/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            社長インタビュー
                        </a>
                        <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            シナネンHDグループの挑戦と進化
                        </a>
                        <a href="<?php echo HOME; ?>aboutus/SDGs/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            SDGsへの貢献
                        </a>
                    </div>
                </div>
            </div>
            <div class="gNav__box">
                <input id="gNav2" class="acc-check" type="checkbox" value="" />
                <label for="gNav2" class="acc-btn gNav__item flex vcenter">
                    事業紹介
                    <i class="gNav__icon gNav__icon icon-down"></i>
                </label>
                <div class="acc-body">
                    <div class="acc-in">
                        <a href="<?php echo HOME; ?>business/btoc/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            BtoC事業
                        </a>
                        <a href="<?php echo HOME; ?>business/btob/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            BtoB事業
                        </a>
                        <a href="<?php echo HOME; ?>business/others/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            非エネルギー事業
                        </a>
                        <a href="<?php echo HOME; ?>future/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            シナネンHDグループが描く未来
                        </a>
                    </div>
                </div>
            </div>
            <div class="gNav__box">
                <input id="gNav3" class="acc-check" type="checkbox" value="" />
                <label for="gNav3" class="acc-btn gNav__item flex vcenter">
                    インタビュー
                    <i class="gNav__icon gNav__icon icon-down"></i>
                </label>
                <div class="acc-body">
                    <div class="acc-in">
                        <a href="<?php echo HOME; ?>person/interview01/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_01.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                S.Takahashi
                            </div>
                        </a>
                        <a href="<?php echo HOME; ?>person/interview02/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_02.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                K.Kasamatsu
                            </div>
                        </a>
                        <a href="<?php echo HOME; ?>person/interview03/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_01.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                K.Yanagihara
                            </div>
                        </a>
                        <a href="<?php echo HOME; ?>person/interview04/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_02.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                S.Kanno
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="gNav__box">
                <input id="gNav4" class="acc-check" type="checkbox" value="" />
                <label for="gNav4" class="acc-btn gNav__item flex vcenter">
                    クロストーク
                    <i class="gNav__icon gNav__icon icon-down"></i>
                </label>
                <div class="acc-body">
                    <div class="acc-in">
                        <a href="<?php echo HOME; ?>person/crosstalk01/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk トレーナー×トレーニー
                        </a>
                        <a href="<?php echo HOME; ?>person/crosstalk02/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk 13年目×5年目×3年目対談
                        </a>
                        <a href="<?php echo HOME; ?>person/crosstalk03/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk 女性の活躍について
                        </a>
                    </div>
                </div>
            </div>
            <div class="gNav__box">
                <input id="gNav5" class="acc-check" type="checkbox" value="" />
                <label for="gNav5" class="acc-btn gNav__item flex vcenter">
                    採用情報
                    <i class="gNav__icon gNav__icon icon-down"></i>
                </label>
                <div class="acc-body">
                    <div class="acc-in">
                        <a href="<?php echo HOME; ?>recruit/requirements/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            募集要項
                        </a>
                        <a href="<?php echo HOME; ?>recruit/personality/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            求める人物像
                        </a>
                        <a href="<?php echo HOME; ?>recruit/flow/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            採用フロー
                        </a>
                        <a href="<?php echo HOME; ?>recruit/environment/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            働く環境
                        </a>
                        <a href="<?php echo HOME; ?>recruit/faq/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            よくある質問
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="headerPad"></div>
