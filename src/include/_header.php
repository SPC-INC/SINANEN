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
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo HOME; ?>aboutus/topmessage/" class="headerPulldown__link flex">
                                        社長メッセージ
                                    </a>
                                    <a href="<?php echo HOME; ?>aboutus/100th/" class="headerPulldown__link flex">
                                        100周年に向けて
                                    </a>
                                    <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="headerPulldown__link flex">
                                        シナネンHDグループの挑戦と進化
                                    </a>
                                    <a href="<?php echo HOME; ?>aboutus/SDGs/" class="headerPulldown__link flex">
                                        SDGsへの取り組み
                                    </a>
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
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo HOME; ?>business/btoc/" class="headerPulldown__link flex">
                                        エネルギー卸・小売り周辺事業
                                    </a>
                                    <a href="<?php echo HOME; ?>business/btob/" class="headerPulldown__link flex">
                                        エネルギーソリューション事業
                                    </a>
                                    <a href="<?php echo HOME; ?>business/others/" class="headerPulldown__link flex">
                                        非エネルギー・海外事業
                                    </a>
                                    <a href="<?php echo HOME; ?>future/" class="headerPulldown__link flex">
                                        シナネンが描く未来
                                    </a>
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
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo HOME; ?>person/interview01/" class="headerPulldown__link flex">
                                        テキスト1
                                    </a>
                                    <a href="<?php echo HOME; ?>person/interview02/" class="headerPulldown__link flex">
                                        テキスト2
                                    </a>
                                    <a href="<?php echo HOME; ?>person/interview03/" class="headerPulldown__link flex">
                                        テキスト3
                                    </a>
                                    <a href="<?php echo HOME; ?>person/interview04/" class="headerPulldown__link flex">
                                        テキスト4
                                    </a>
                                    <a href="<?php echo HOME; ?>person/crosstalk01/" class="headerPulldown__link flex">
                                        テキスト1
                                    </a>
                                    <a href="<?php echo HOME; ?>person/crosstalk02/" class="headerPulldown__link flex">
                                        テキスト2
                                    </a>
                                    <a href="<?php echo HOME; ?>person/crosstalk03/" class="headerPulldown__link flex">
                                        テキスト3
                                    </a>
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
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo HOME; ?>recruit/requirements/" class="headerPulldown__link flex">
                                        募集要項
                                    </a>
                                    <a href="<?php echo HOME; ?>recruit/personality/" class="headerPulldown__link flex">
                                        求める人物像
                                    </a>
                                    <a href="<?php echo HOME; ?>recruit/flow/" class="headerPulldown__link flex">
                                        採用フロー
                                    </a>
                                    <a href="<?php echo HOME; ?>recruit/environment/" class="headerPulldown__link flex">
                                        働く環境
                                    </a>
                                    <a href="<?php echo HOME; ?>recruit/faq/" class="headerPulldown__link flex">
                                        よくある質問
                                    </a>
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
                            社長メッセージ
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
                            エネルギー卸・小売り周辺事業
                        </a>
                        <a href="<?php echo HOME; ?>business/btob/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            エネルギーソリューション事業
                        </a>
                        <a href="<?php echo HOME; ?>business/others/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            非エネルギー・海外事業
                        </a>
                        <a href="<?php echo HOME; ?>future/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            シナネンが描く未来
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
                                お名前（0000年入社）
                            </div>
                        </a>
                        <a href="<?php echo HOME; ?>person/interview02/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_02.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                お名前（0000年入社）
                            </div>
                        </a>
                        <a href="<?php echo HOME; ?>person/interview03/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_01.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                お名前（0000年入社）
                            </div>
                        </a>
                        <a href="<?php echo HOME; ?>person/interview04/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo HOME; ?>img/header_interview_02.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                お名前（0000年入社）
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
                            Special Crosstalk #1　女性のキャリアアップ
                        </a>
                        <a href="<?php echo HOME; ?>person/crosstalk02/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk #2　テキストテキストテキスト
                        </a>
                        <a href="<?php echo HOME; ?>person/crosstalk03/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk #3　テキストテキストテキスト
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
