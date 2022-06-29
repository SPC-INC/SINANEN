<?php
$include = './include/'; // パーツ用パス
$home = './'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'top', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

<?php
/*
    ##     ## ##     ##
    ###   ### ##     ##
    #### #### ##     ##
    ## ### ## ##     ##
    ##     ##  ##   ##
    ##     ##   ## ##
    ##     ##    ###
*/
?>
    <div class="topMv">
        <div class="topMv__img js-topMvSlide swiper-container">
            <div class="topMv__img swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo HOME; ?>img/top_mv_01.png" alt="" class="pc">
                    <img src="<?php echo HOME; ?>img/top_mv_01_sp.png" alt="" class="sp">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo HOME; ?>img/top_mv_02.png" alt="" class="pc">
                    <img src="<?php echo HOME; ?>img/top_mv_02_sp.png" alt="" class="sp">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo HOME; ?>img/top_mv_03.png" alt="" class="pc">
                    <img src="<?php echo HOME; ?>img/top_mv_03_sp.png" alt="" class="sp">
                </div>
            </div>
        </div>
        <div class="topMv__text">
            <div class="topMv__sub js-in anime left-in">
                <p class="topMv__sub--inner dScript">challenge</p>
            </div>
            <h2 class="pc topMv__head notos js-topMvText">
                <div class="wrap w1200">
                    <div class="flex vert">
                        <div class="anime__wrapper">
                            <div class="topMv__head--line js-in anime text-line-in wave1">
                                <span class="topMv__head--text js-in anime text-in wave3">挑戦は、</span>
                            </div>
                        </div>
                        <div class="anime__wrapper">
                            <div class="topMv__head--line js-in anime text-line-in wave1">
                                <span class="topMv__head--text js-in anime text-in wave3">未来の日常を創るために。</span>
                            </div>
                        </div>
                    </div>
                </div>
            </h2>
            <div class="topMv__desc notos anime__wrapper">
                <p class="pc js-in anime text-in wave4">That challenge creates the next obvious.</p>
                <p class="sp js-in anime left-in">That challenge creates the next obvious.</p>
            </div>
            <div class="topMv__text--bar"></div>
        </div>
    </div>

<?php
/*
    #### ##    ## ######## ########   #######
     ##  ###   ##    ##    ##     ## ##     ##
     ##  ####  ##    ##    ##     ## ##     ##
     ##  ## ## ##    ##    ########  ##     ##
     ##  ##  ####    ##    ##   ##   ##     ##
     ##  ##   ###    ##    ##    ##  ##     ##
    #### ##    ##    ##    ##     ##  #######
*/
?>
    <div class="topIntro">
        <div class="topIntro__img">
            <img src="<?php echo HOME; ?>img/top_intro.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/top_intro_so.png" alt="" class="sp">
        </div>
        <div class="topIntro__text">
            <div class="wrap w1200">
                <h2 class="topIntro__head notos js-topMvText-intro">
                    <span class="topIntro__head--line">挑戦は、</span><br>
                    <span class="topIntro__head--line">未来の日常を創るために。</span>
                </h2>
                <p class="topIntro__desc js-in anime bottom-in">
                    私たちは、時代の変化に寄り添いながら、総合エネルギーサービス企業グループとして、<br class="pc">様々なサービスを提供し続けることで、快適で豊かな社会づくりに「挑戦」してきました。<br>
                    「エネルギーと住まいと暮らしのサービスで、地域すべてのお客様の快適な生活に貢献する」<br class="pc">という企業理念のもと、私たちと一緒に「挑戦」し、次のあたりまえを創っていく仲間を<br class="pc">求めています。
                </p>
            </div>
        </div>
    </div>

<?php
/*
       ###    ########   #######  ##     ## ########
      ## ##   ##     ## ##     ## ##     ##    ##
     ##   ##  ##     ## ##     ## ##     ##    ##
    ##     ## ########  ##     ## ##     ##    ##
    ######### ##     ## ##     ## ##     ##    ##
    ##     ## ##     ## ##     ## ##     ##    ##
    ##     ## ########   #######   #######     ##
*/
?>
    <div class="topAboutus">
        <div class="topAboutus__bg"></div>
        <div class="wrap w1200 sp-wrap">
            <h2 class="pc topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime text-in wave2">会社紹介</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="pc js-in anime text-in wave1">ABOUT US</div>
                </div>
            </h2>
            <h2 class="sp topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime left-in wave2">会社紹介</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime left-in wave1">ABOUT US</div>
                </div>
            </h2>
            <div class="topAboutus__wrap flex bet pc-vcenter sp-vert">
                <div class="topAboutus__img js-topAbout-img">
                    <div class="topAboutus__img--item show">
                        <img src="<?php echo HOME ?>img/top_aboutus_01.png">
                    </div>
                    <div class="topAboutus__img--item">
                        <img src="<?php echo HOME ?>img/top_aboutus_02.png">
                    </div>
                    <div class="topAboutus__img--item">
                        <img src="<?php echo HOME ?>img/top_aboutus_03.png">
                    </div>
                    <img src="<?php echo HOME ?>img/top_aboutus_bg.png">
                </div>
                <div class="topAboutus__link">
                    <a class="topAboutus__link--item js-topAbout" href="<?php echo HOME; ?>aboutus/topmessage/">
                        <div class="text">
                            <span class="num lato">#1</span>
                            <span class="title">社長インタビュー</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a class="topAboutus__link--item js-topAbout" href="<?php echo HOME; ?>aboutus/challenge-evolution/">
                        <div class="text">
                            <span class="num lato">#2</span>
                            <span class="title">わたしたちの挑戦と進化</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a class="topAboutus__link--item js-topAbout" href="<?php echo HOME; ?>aboutus/SDGs/">
                        <div class="text">
                            <span class="num lato">#3</span>
                            <span class="title">SDGsへの貢献</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
/*
    ########  ##     ##  ######  #### ##    ## ########  ######    ######
    ##     ## ##     ## ##    ##  ##  ###   ## ##       ##    ##  ##    ##
    ##     ## ##     ## ##        ##  ####  ## ##       ##        ##
    ########  ##     ##  ######   ##  ## ## ## ######    ######    ######
    ##     ## ##     ##       ##  ##  ##  #### ##             ##        ##
    ##     ## ##     ## ##    ##  ##  ##   ### ##       ##    ##  ##    ##
    ########   #######   ######  #### ##    ## ########  ######    ######
*/
?>
    <div class="topBusiness">
        <div class="wrap w1200 sp-wrap">
            <h2 class="pc topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime text-in wave2">事業紹介</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime text-in wave1">BUSINESSS</div>
                </div>
            </h2>
            <h2 class="sp topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime left-in wave2">事業紹介</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime left-in wave1">BUSINESSS</div>
                </div>
            </h2>
        </div>

        <div class="topBusinessLink flex bet sp-break">
            <a href="<?php echo HOME; ?>business/btoc/" class="topBusinessLink__item">
                <div class="md-lay dark zoom">
                    <div class="lay-bg topBusinessLink__item--lay">
                        <div class="topBusinessLink__item--img sp-flex vend hcenter">
                            <img src="<?php echo HOME ?>img/topbusiness_link1.png" alt="">
                        </div>
                    </div>
                    <div class="lay-content pc-flex vcenter hcenter"><div class="in">
                        <div class="topBusinessLink__item--caption">
                            <span class="line">BtoC事業</span><br class="pc"><span class="line">エネルギー卸・小売周辺事業</span>
                            <div class="sp topBusinessLink__item--more flex vcenter">
                                <span>READ MORE</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="caption-icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="pc topBusinessLink__item--icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </div></div>
                </div>
            </a>
            <a href="<?php echo HOME; ?>business/btob/" class="topBusinessLink__item">
                <div class="md-lay dark zoom">
                    <div class="lay-bg topBusinessLink__item--lay">
                        <div class="topBusinessLink__item--img sp-flex vcenter hcenter">
                            <img src="<?php echo HOME ?>img/topbusiness_link2.png" alt="">
                        </div>
                    </div>
                    <div class="lay-content pc-flex vcenter hcenter"><div class="in">
                        <div class="topBusinessLink__item--caption">
                            <span class="line">BtoB事業</span><br class="pc"><span class="line">エネルギーソリューション事業</span>
                            <div class="sp topBusinessLink__item--more flex vcenter">
                                <span>READ MORE</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="caption-icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="pc topBusinessLink__item--icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </div></div>
                </div>
            </a>
            <a href="<?php echo HOME; ?>business/other/" class="topBusinessLink__item">
                <div class="md-lay dark zoom">
                    <div class="lay-bg topBusinessLink__item--lay">
                        <div class="topBusinessLink__item--img sp-flex vstart hcenter">
                            <img src="<?php echo HOME ?>img/topbusiness_link3.png" alt="">
                        </div>
                    </div>
                    <div class="lay-content pc-flex vcenter hcenter"><div class="in">
                        <div class="topBusinessLink__item--caption">
                            <span class="line">非エネルギー事業</span>
                            <div class="sp topBusinessLink__item--more flex vcenter">
                                <span>READ MORE</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="caption-icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="pc topBusinessLink__item--icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </div></div>
                </div>
            </a>
        </div>
    </div>

<?php
/*
    #### ##    ## ######## ######## ########  ##     ## #### ######## ##      ##
     ##  ###   ##    ##    ##       ##     ## ##     ##  ##  ##       ##  ##  ##
     ##  ####  ##    ##    ##       ##     ## ##     ##  ##  ##       ##  ##  ##
     ##  ## ## ##    ##    ######   ########  ##     ##  ##  ######   ##  ##  ##
     ##  ##  ####    ##    ##       ##   ##    ##   ##   ##  ##       ##  ##  ##
     ##  ##   ###    ##    ##       ##    ##    ## ##    ##  ##       ##  ##  ##
    #### ##    ##    ##    ######## ##     ##    ###    #### ########  ###  ###
*/
?>
    <div class="topInterview">
        <div class="topInterview__bg"></div>
        <div class="wrap w1200 sp-wrap">
            <h2 class="pc topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime text-in wave2">インタビュー <span class="topCommon__ttl--small">～わたしたちの"挑戦"～</span></div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime text-in wave1">INTERVIEW</div>
                </div>
            </h2>
            <h2 class="sp topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime left-in wave2">インタビュー<br"><span class="topCommon__ttl--small">～わたしたちの"挑戦"～</span></div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime left-in wave1">INTERVIEW</div>
                </div>
            </h2>
            <div class="topInterviewWrap">
                <?php require_once $include . '_interview.php'; ?>
            </div>
        </div>
    </div>

<?php
/*
     ######  ########   #######   ######   ######  ########    ###    ##       ##    ##
    ##    ## ##     ## ##     ## ##    ## ##    ##    ##      ## ##   ##       ##   ##
    ##       ##     ## ##     ## ##       ##          ##     ##   ##  ##       ##  ##
    ##       ########  ##     ##  ######   ######     ##    ##     ## ##       #####
    ##       ##   ##   ##     ##       ##       ##    ##    ######### ##       ##  ##
    ##    ## ##    ##  ##     ## ##    ## ##    ##    ##    ##     ## ##       ##   ##
     ######  ##     ##  #######   ######   ######     ##    ##     ## ######## ##    ##
*/
?>
    <div class="topCrosstalk">
        <div class="topCrosstalk__bg"></div>
        <div class="wrap w1200 sp-wrap">
            <h2 class="pc topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime text-in wave2">クロストーク</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime text-in wave1">Cross talk</div>
                </div>
            </h2>
            <h2 class="sp topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime left-in wave2">クロストーク</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime left-in wave1">Cross talk</div>
                </div>
            </h2>
        </div>
        <div class="topCrosstalkSlide swiper-container">
            <div class="swiper-wrapper">
                <a href="<?php echo HOME; ?>person/crosstalk01/" class="swiper-slide topCrosstalkSlide__item">
                    <span class="topCrosstalkSlide__item--caption pc">
                        <span class="bg">Special Crosstalk <span class="small">トレーナー×トレーニー</span></span>
                    </span>
                    <span class="topCrosstalkSlide__item--caption sp">
                        <span class="bg">Special Crosstalk</span><br><span class="bg">トレーナー×トレーニー</span>
                    </span>
                    <img src="<?php echo HOME ?>img/crosstalk1.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/crosstalk1_sp.png" alt="" class="sp">
                </a>
                <a href="<?php echo HOME; ?>person/crosstalk02/" class="swiper-slide topCrosstalkSlide__item">
                    <span class="topCrosstalkSlide__item--caption pc">
                        <span class="bg">Special Crosstalk <span class="small">13年目×5年目×3年目対談</span></span>
                    </span>
                    <span class="topCrosstalkSlide__item--caption sp">
                        <span class="bg">Special Crosstalk</span><br><span class="bg">13年目×5年目×3年目対談</span>
                    </span>
                    <img src="<?php echo HOME ?>img/crosstalk3.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/crosstalk3_sp.png" alt="" class="sp">
                </a>
                <a href="<?php echo HOME; ?>person/crosstalk03/" class="swiper-slide topCrosstalkSlide__item">
                    <span class="topCrosstalkSlide__item--caption pc">
                        <span class="bg">Special Crosstalk <span class="small">女性の活躍について</span></span>
                    </span>
                    <span class="topCrosstalkSlide__item--caption sp">
                        <span class="bg">Special Crosstalk</span><br><span class="bg">女性の活躍について</span>
                    </span>
                    <img src="<?php echo HOME ?>img/crosstalk2.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/crosstalk2_sp.png" alt="" class="sp">
                </a>
            </div>
            <div class="swiper-button-prev">
                <svg id="コンポーネント_14_1" data-name="コンポーネント 14 – 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" class="icon">
                    <circle id="楕円形_14" data-name="楕円形 14" cx="26.5" cy="26.5" r="26.5" fill="#1a1a1a" />
                    <g id="left-arrow" transform="translate(-81.48 16)">
                        <g id="グループ_727" data-name="グループ 727" transform="translate(101.48 0)">
                            <path id="パス_696" data-name="パス 696" d="M105.624,10.5l7.854-7.854a1.151,1.151,0,0,0,0-1.624L112.79.336a1.15,1.15,0,0,0-1.624,0l-9.351,9.351a1.159,1.159,0,0,0,0,1.63l9.342,9.342a1.15,1.15,0,0,0,1.624,0l.688-.688a1.15,1.15,0,0,0,0-1.624Z" transform="translate(-101.48 0)" fill="#fff" />
                        </g>
                    </g>
                </svg>
            </div>

            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" class="icon icon-next">
                    <g id="コンポーネント_14_2" data-name="コンポーネント 14 – 2" transform="translate(53 53) rotate(180)">
                        <circle id="楕円形_14" data-name="楕円形 14" cx="26.5" cy="26.5" r="26.5" fill="#1a1a1a" />
                        <g id="left-arrow" transform="translate(-81.48 16)">
                            <g id="グループ_727" data-name="グループ 727" transform="translate(101.48 0)">
                                <path id="パス_696" data-name="パス 696" d="M105.624,10.5l7.854-7.854a1.151,1.151,0,0,0,0-1.624L112.79.336a1.15,1.15,0,0,0-1.624,0l-9.351,9.351a1.159,1.159,0,0,0,0,1.63l9.342,9.342a1.15,1.15,0,0,0,1.624,0l.688-.688a1.15,1.15,0,0,0,0-1.624Z" transform="translate(-101.48 0)" fill="#fff" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="swiper-pagination pc"></div>
        </div>
        <!-- Swiper END -->
        <div class="topCrosstalk__more">
            <a href="<?php echo HOME; ?>person/" class="topCrosstalk__btn md-btn white">
                READ MORE
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                    </g>
                </svg>
            </a>
        </div>
    </div>

<?php
/*
    ########  ########  ######  ########  ##     ## #### ########
    ##     ## ##       ##    ## ##     ## ##     ##  ##     ##
    ##     ## ##       ##       ##     ## ##     ##  ##     ##
    ########  ######   ##       ########  ##     ##  ##     ##
    ##   ##   ##       ##       ##   ##   ##     ##  ##     ##
    ##    ##  ##       ##    ## ##    ##  ##     ##  ##     ##
    ##     ## ########  ######  ##     ##  #######  ####    ##
*/
?>
    <div class="topRecruit">
        <div class="topRecruit__bg"></div>
        <div class="wrap w1200 sp-wrap">
            <h2 class="pc topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime text-in wave2">採用情報</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime text-in wave1">RECRUIT</div>
                </div>
            </h2>
            <h2 class="sp topCommon__ttl notos">
                <div class="topCommon__ttl--ja">
                    <div class="js-in anime left-in wave2">採用情報</div>
                </div>
                <div class="topCommon__ttl--en">
                    <div class="js-in anime left-in wave1">RECRUIT</div>
                </div>
            </h2>
        </div>
        <div class="wrap w1200 sp-wrap">
            <div class="topRecruitWrap flex pc-bet sp-vert">
                <a href="<?php echo HOME; ?>recruit/requirements/" class="topRecruit__item sp-flex sp-vcenter">
                    <img src="<?php echo HOME ?>img/topRecruit1.svg" alt="" class="topRecruit__item--img">
                    <p class="topRecruit__item--ttl">
                        募集要項
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon sp">
                        <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                            <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                            <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                        </g>
                    </svg>
                </a>
                    <a href="<?php echo HOME; ?>recruit/personality/" class="topRecruit__item sp-flex sp-vcenter">
                        <img src="<?php echo HOME ?>img/topRecruit2.svg" alt="" class="topRecruit__item--img">
                        <p class="topRecruit__item--ttl">
                            求める人物像
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon sp">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>recruit/flow/" class="topRecruit__item sp-flex sp-vcenter">
                        <img src="<?php echo HOME ?>img/topRecruit3.svg" alt="" class="topRecruit__item--img">
                        <p class="topRecruit__item--ttl">
                            採用フロー
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon sp">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>recruit/environment/" class="topRecruit__item sp-flex sp-vcenter">
                        <img src="<?php echo HOME ?>img/topRecruit4.svg" alt="" class="topRecruit__item--img">
                        <p class="topRecruit__item--ttl">
                            働く環境
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon sp">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>recruit/faq/" class="topRecruit__item sp-flex sp-vcenter">
                        <img src="<?php echo HOME ?>img/topRecruit5.svg" alt="" class="topRecruit__item--img">
                        <p class="topRecruit__item--ttl">
                            よくある質問
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon sp">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
            </div>
            <div class="topRecruit__more">
                <a href="<?php echo HOME; ?>recruit/" class="topRecruit__btn md-btn red">
                    READ MORE
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                        <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                            <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                            <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                        </g>
                    </svg>
                </a>
            </div>
            <div class="topRecruit__entry">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </div>
</article>
<?php
require_once $include . '_footer.php';
