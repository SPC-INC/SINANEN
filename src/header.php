<!DOCTYPE html>
<html lang="ja" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php
    global $aioseop_options; //All In One SEO Packのホーム設定取得
    if (!empty($post->ID) && !get_post_meta($post->ID, '_aioseop_description', true) && !empty($aioseop_options)) { //ページディスクリプションがない場合はホームディスクリプション出力
    ?>
        <meta name="description" itemprop="description" content="<?php echo $aioseop_options['aiosp_home_description']; ?>">
    <?php
    }

    if (!empty($post->ID) && !get_post_meta($post->ID, '_aioseop_keywords', true) && !empty($aioseop_options)) { //ページキーワードがない場合はホームキーワード出力
    ?>
        <meta name="keywords" itemprop="keywords" content="<?php echo $aioseop_options['aiosp_home_keywords']; ?>">
    <?php
    }
    ?>

    <?php
    if (is_archive() && function_exists('aioseo')) {
        // アーカイブの場合はOGPタグを自力で生成 画像はAll in One SEO Pack のデフォルト画像を要設定
        $ogpImage = aioseo()->options->social->facebook->general->defaultImagePosts; ?>
        <meta property="og:site_name" content="<?php echo SITE_NAME; ?>" />
        <meta property="og:title" content="<?php wp_title('|', true, 'right');
        echo SITE_NAME; ?>" />
        <meta name="twitter:title" content="<?php wp_title('|', true, 'right');
        echo SITE_NAME; ?>" />
        <meta name="twitter:domain" content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
        <meta property="og:url" content="<?php echo(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:image" content="<?php echo $ogpImage; ?>" />
        <meta name="twitter:image" content="<?php echo $ogpImage; ?>" />
        <meta itemprop="image" content="<?php echo $ogpImage; ?>" />
        <meta property="og:type" content="article" />
        <meta name="twitter:card" content="summary_large_image" />
    <?php
    } ?>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo T_URL; ?>css/common.css?v<?php echo filemtime(T_PATH . 'css/common.css'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#000000">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <div id="overlay" class="md-overlay"></div>
    <header id="header" class="header" itemscope="" itemtype="https://schema.org/WPHeader">
        <div class="header__frame">
            <div class="header__base flex bet str">
                <div class="header__left flex vcenter">
                    <a class="headerLogo" href="<?php echo H_URL; ?>">
                        <?php echo IS_HOME ? '<h1 class="headerLogo__in flex vcenter">' : '<span class="headerLogo__in flex vcenter">'; ?>
                        <img class="headerLogo__img" src="<?php echo T_URL; ?>img/logo.svg" alt="シナネンホールディングス">
                        <?php echo IS_HOME ?  '</h1>' : '</span>'; ?>
                    </a>
                </div>
                <div class="header__right flex">
                    <div class="pc headerPulldown">
                        <a href="<?php echo H_URL; ?>aboutus/" class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">ABOUT US</span>
                            <span class="headerPulldown__head--ja">会社紹介</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </a>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo H_URL; ?>aboutus/topmessage/" class="headerPulldown__link flex">
                                        社長メッセージ
                                    </a>
                                    <a href="<?php echo H_URL; ?>aboutus/100th/" class="headerPulldown__link flex">
                                        100周年に向けて
                                    </a>
                                    <a href="<?php echo H_URL; ?>aboutus/challengeandevolution/" class="headerPulldown__link flex">
                                        シナネンHDグループの挑戦と進化
                                    </a>
                                    <a href="<?php echo H_URL; ?>aboutus/sdgs/" class="headerPulldown__link flex">
                                        SDGsへの取り組み
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc headerPulldown">
                        <a href="<?php echo H_URL; ?>business/" class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">BUSINESS</span>
                            <span class="headerPulldown__head--ja">事業紹介</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </a>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo H_URL; ?>business/btoc/" class="headerPulldown__link flex">
                                        エネルギー卸・小売り周辺事業
                                    </a>
                                    <a href="<?php echo H_URL; ?>business/btob/" class="headerPulldown__link flex">
                                        エネルギーソリューション事業
                                    </a>
                                    <a href="<?php echo H_URL; ?>business/others/" class="headerPulldown__link flex">
                                        非エネルギー・海外事業
                                    </a>
                                    <a href="<?php echo H_URL; ?>future/" class="headerPulldown__link flex">
                                        シナネンが描く未来
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc headerPulldown">
                        <span class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">INTERVIEW</span>
                            <span class="headerPulldown__head--ja">インタビュー</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </span>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        テキスト3
                                    </a>
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        テキスト4
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pc headerPulldown">
                        <span class="headerPulldown__head flex vert vcenter hcenter">
                            <span class="headerPulldown__head--en">RECRUIT</span>
                            <span class="headerPulldown__head--ja">採用情報</span>
                            <i class="headerPulldown__head--icon icon-down"></i>
                        </span>
                        <div class="headerPulldown__body">
                            <div class="wrap w1200">
                                <div class="headerPulldown__list flex">
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        募集要項
                                    </a>
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        求める人物像
                                    </a>
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        採用フロー
                                    </a>
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        働く環境
                                    </a>
                                    <a href="<?php echo H_URL; ?>" class="headerPulldown__link flex">
                                        よくある質問
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo H_URL; ?>entry/" class="pc headerNav__btn headerNav__btn--mypage md-btn stay">
                        <span class="headerNav__btn--en">MYPAGE</span>
                        <span class="headerNav__btn--ja">マイページ</span>
                    </a>
                    <a href="<?php echo H_URL; ?>entry/" class="pc headerNav__btn headerNav__btn--entry md-btn stay">
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
            <a href="<?php echo H_URL; ?>contact/" class="gNav__btn gNav__btn--entry md-btn left-text">
                エントリー
            </a>
            <a href="<?php echo H_URL; ?>contact/" class="gNav__btn gNav__btn--mypage md-btn left-text">
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
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            テキスト1
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            テキスト2
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
                        <a href="<?php echo H_URL; ?>business/btoc/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            エネルギー卸・小売り周辺事業
                        </a>
                        <a href="<?php echo H_URL; ?>business/btob/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            エネルギーソリューション事業
                        </a>
                        <a href="<?php echo H_URL; ?>business/others/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            非エネルギー・海外事業
                        </a>
                        <a href="<?php echo H_URL; ?>future/" class="acc-hide gNav__item gNav__item--sub flex vcenter">
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
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo T_URL; ?>img/header_interview_01.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                お名前（0000年入社）
                            </div>
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo T_URL; ?>img/header_interview_02.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                お名前（0000年入社）
                            </div>
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo T_URL; ?>img/header_interview_01.png" alt="">
                            </div>
                            <div class="gNav__item--text">
                                <span class="em">部署（所属）</span><br>
                                お名前（0000年入社）
                            </div>
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            <div class="gNav__item--img">
                                <img src="<?php echo T_URL; ?>img/header_interview_02.png" alt="">
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
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk #1　女性のキャリアアップ
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            Special Crosstalk #2　テキストテキストテキスト
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
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
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            募集要項
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            求める人物像
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            採用フロー
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            働く環境
                        </a>
                        <a href="<?php echo H_URL; ?>" class="acc-hide gNav__item gNav__item--sub flex vcenter">
                            よくある質問
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
