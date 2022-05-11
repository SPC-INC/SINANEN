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
        <div class="topMv__img">
            <img src="<?php echo HOME; ?>img/top_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/top_mv_sp.png" alt="" class="sp">
        </div>
        <div class="topMv__text">
            <p class="pc topMv__sub dScript">
                challenge
            </p>
            <h2 class="pc topMv__head notos">
                <span class="line">その挑戦が、</span><br>
                <span class="line">次のあたりまえを創る</span>
            </h2>
            <p class="topMv__desc notos">
                That challenge creates the next obvious.
            </p>
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
                <h2 class="topIntro__head notos">
                    <span class="line">その挑戦が、</span><br>
                    <span class="line">次のあたりまえを創る</span>
                </h2>
                <p class="topIntro__desc">
                    （仮）シナネンHDグループは2027年に創業100周年を迎えます。時代の流れとともに変化するニーズに応えられる、総合エネルギーサービス企業グループとして私たちは常に「挑戦」し続けてきました。<br>
                    「エネルギーと住まいと暮らしのサービスで、地域すべてのお客様の快適な生活に貢献する」という経営理念のもと、次のあたりまえを一緒に創っていく仲間を求めています。
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
            <h2 class="topCommon__ttl notos">
                <div class="js-in anime left-in wave2">会社紹介</div>
                <div class="topCommon__ttl--en js-in anime left-in wave1">
                    ABOUT US
                </div>
            </h2>
            <div class="topAboutus__wrap flex bet pc-vend sp-vert">
                <div class="topAboutus__img" id="js-about1">
                    <img src="<?php echo HOME ?>img/top_aboutus_01.png">
                    <div class="topAboutus__img--caption js-aboutus-caption1 show">
                        <span class="bg-white">一枚目（仮）次の100年に</span><br>
                        <span class="bg-white">一緒に挑める仲間を求めています</span>
                    </div>
                </div>
                <div class="topAboutus__img" id="js-about2">
                    <img src="http://placehold.jp/550x430.png">
                    <div class="topAboutus__img--caption">
                        <span class="bg-white">二枚目（仮）次の100年に</span><br>
                        <span class="bg-white">一緒に挑める仲間を求めています</span>
                    </div>
                </div>
                <div class="topAboutus__img" id="js-about3">
                    <img src="http://placehold.jp/550x430.png">
                    <div class="topAboutus__img--caption">
                        <span class="bg-white">三枚目（仮）次の100年に</span><br>
                        <span class="bg-white">一緒に挑める仲間を求めています</span>
                    </div>
                </div>

                <div class="topAboutus__link">
                    <a class="topAboutus__link--item" href="js-about1">
                        <div class="text">
                            <span class="num lato">#1</span>
                            <span class="title">社長メッセージ</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a class="topAboutus__link--item" href="js-about2">
                        <div class="text">
                            <span class="num lato">#2</span>
                            <span class="title">シナネンHDグループの挑戦と進化</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a class="topAboutus__link--item" href="js-about3">
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
            <h2 class="topCommon__ttl notos">
                <div class="js-in anime left-in wave2">事業紹介</div>
                <div class="topCommon__ttl--en js-in anime left-in wave1">
                    BUSINESS
                </div>
            </h2>
        </div>

        <div class="topBusinessLink flex bet sp-break">
            <a href="" class="topBusinessLink__item">
                <img src="<?php echo HOME ?>img/topbusiness_link1.png" alt="">
                <div class="bg"></div>
                <div class="topBusinessLink__item--caption">
                    <span class="line">BtoC事業</span><br class="pc"><span class="line">エネルギー卸・小売周辺事業</span>
                    <div class="link flex vcenter sp">
                        <span>READ MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="caption-icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                    </g>
                </svg>
            </a>
            <a href="" class="topBusinessLink__item">
                <img src="<?php echo HOME ?>img/topbusiness_link2.png" alt="">
                <div class="bg"></div>
                <div class="topBusinessLink__item--caption">
                    <span class="line">BtoB事業</span><br class="pc"><span class="line">エネルギーソリューション事業</span>
                    <div class="link flex vcenter sp">
                        <span>READ MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="caption-icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                    </g>
                </svg>
            </a>
            <a href="" class="topBusinessLink__item">
                <img src="<?php echo HOME ?>img/topbusiness_link3.png" alt="">
                <div class="bg"></div>
                <div class="topBusinessLink__item--caption">
                    <span class="line">非エネルギー及び海外事業</span>
                    <div class="link flex vcenter sp">
                        <span>READ MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="caption-icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="topBusiness__copy">
            <div class="topBusiness__copy--caption">
                <div class="wrap w1200 sp-wrap">
                    <div class="topBusiness__copy--ttl notos js-in anime left-in">
                        シナネンHDグループが描く未来
                    </div>
                    <p class="topBusiness__copy--para js-in anime left-in">
                        概要が入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <div class="topBusiness__copy--more">
                        <a href="<?php echo HOME; ?>business/" class="topBusiness__copy--btn md-btn white">
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
            </div>
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
            <h2 class="topCommon__ttl notos">
                <div class="js-in anime left-in wave2">
                    インタビュー<br class="sp"><span class="topCommon__ttl--small">～わたしたちの"挑戦"～</span>
                </div>
                <div class="topCommon__ttl--en js-in anime left-in wave1">
                    INTERVIEW
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
            <h2 class="topCommon__ttl notos">
                <div class="js-in anime left-in wave2">クロストーク</div>
                <div class="topCommon__ttl--en js-in anime left-in wave1">
                    Cross talk
                </div>
            </h2>
        </div>
        <div class="topCrosstalkSlide swiper-container">
            <div class="swiper-wrapper">
                <a class="swiper-slide topCrosstalkSlide__item">
                    <span class="topCrosstalkSlide__item--caption pc">
                        <span class="bg">Special Crosstalk <span class="small">～女性のキャリアアップ ～</span></span>
                    </span>
                    <span class="topCrosstalkSlide__item--caption sp">
                        <span class="bg">Special Crosstalk</span><br><span class="bg">～女性のキャリアアップ ～</span>
                    </span>
                    <img src="<?php echo HOME ?>img/crosstalk1.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/crosstalk1_sp.png" alt="" class="sp">
                </a>
                <a class="swiper-slide topCrosstalkSlide__item">
                    <span class="topCrosstalkSlide__item--caption pc">
                        <span class="bg">Special Crosstalk <span class="small">～女性のキャリアアップ ～</span></span>
                    </span>
                    <span class="topCrosstalkSlide__item--caption sp">
                        <span class="bg">Special Crosstalk</span><br><span class="bg">～女性のキャリアアップ ～</span>
                    </span>
                    <img src="<?php echo HOME ?>img/crosstalk1.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/crosstalk1_sp.png" alt="" class="sp">
                </a>
                <a class="swiper-slide topCrosstalkSlide__item">
                    <span class="topCrosstalkSlide__item--caption pc">
                        <span class="bg">Special Crosstalk <span class="small">～ 女性のキャリアアップ ～</span></span>
                    </span>
                    <span class="topCrosstalkSlide__item--caption sp">
                        <span class="bg">Special Crosstalk</span><br><span class="bg">～女性のキャリアアップ ～</span>
                    </span>
                    <img src="<?php echo HOME ?>img/crosstalk1.png" alt="" class="pc">
                    <img src="<?php echo HOME ?>img/crosstalk1_sp.png" alt="" class="sp">
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
            <a class="topCrosstalk__btn md-btn white">
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
            <h2 class="topCommon__ttl notos">
                <div class="js-in anime left-in wave2">採用情報</div>
                <div class="topCommon__ttl--en js-in anime left-in wave1">
                    RECRUIT
                </div>
            </h2>
        </div>
        <div class="wrap w1200 sp-wrap">
            <div class="topRecruitWrap flex pc-bet sp-vert">
                <?php $arr = array('募集要項', '求める人物像', '採用フロー', '働く環境', 'よくある質問');
                $num = 0;
                foreach ($arr as $text) {
                    $num++; ?>
                    <a class="topRecruit__item sp-flex sp-vcenter" href="#">
                        <img src="<?php echo HOME ?>img/topRecruit<?php echo $num ?>.svg" alt="" class="topRecruit__item--img">
                        <p class="topRecruit__item--ttl">
                            <?php echo $text ?>
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon sp">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                <?php
                } ?>
            </div>
            <div class="topRecruit__more">
                <a href="" class="topRecruit__btn md-btn red">
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
