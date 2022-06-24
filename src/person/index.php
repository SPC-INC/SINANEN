<?php
$include = '../include/'; // パーツ用パス
$home = '../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'person', // ページ判別フラグ
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
    <div class="personMv">
        <div class="pc personMv__img">
            <img src="<?php echo HOME; ?>img/person_mv.png" alt="">
        </div>
        <div class="sp personMv__img">
            <div class="personMv__slider swiper-container js-personMvSlide">
                <ul class="personMv__slider--wrapper swiper-wrapper">
                    <li class="personMv__slider--slide swiper-slide">
                        <img src="<?php echo HOME; ?>img/person_mv_sp_01.png" alt="">
                    </li>
                    <li class="personMv__slider--slide swiper-slide">
                        <img src="<?php echo HOME; ?>img/person_mv_sp_02.png" alt="">
                    </li>
                    <li class="personMv__slider--slide swiper-slide">
                        <img src="<?php echo HOME; ?>img/person_mv_sp_03.png" alt="">
                    </li>
                    <li class="personMv__slider--slide swiper-slide">
                        <img src="<?php echo HOME; ?>img/person_mv_sp_04.png" alt="">
                    </li>
                    <li class="personMv__slider--slide swiper-slide">
                        <img src="<?php echo HOME; ?>img/person_mv_sp_05.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <h1 class="personMv__text notos flex pc-vend pc-hcenter sp-vend sp-hend">
            <div class="personMv__text--wrapper js-in anime text-line-in">
                <div class="anime__wrapper">
                    <div class="personMv__text--inner js-in anime text-in wave3">
                        わたしたちの<span class="em">“挑戦”</span>
                    </div>
                </div>
            </div>
        </h1>
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
    <section class="personInterview">
        <div class="wrap w1200 sp-wrap">
            <h2 class="personInterview__head notos">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        インタビュー
                    </div>
                </div>
            </h2>
            <div class="personInterview__list">
                <?php require_once $include . '_interview.php';?>
            </div>
        </div>
    </section>

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
    <section class="personCrosstalk">
        <div class="wrap w1200 sp-wrap">
            <h2 class="personCrosstalk__head notos">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        スペシャルクロストーク
                    </div>
                </div>
            </h2>
            <ul class="personCrosstalk__list">
                <li class="personCrosstalk__item js-in anime bottom-in">
                    <a href="<?php echo HOME; ?>person/crosstalk01/" class="personCrosstalk__link op">
                        <div class="personCrosstalk__img">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_01.png" alt="" class="pc">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_01_sp.png" alt="" class="sp">
                        </div>
                        <div class="personCrosstalk__ttl notos flex sp-vert sp-vstart">
                            <div class="personCrosstalk__ttl--sub flex vcenter pc-hcenter sp-aro">
                                <span class="personCrosstalk__ttl--en">CROSS<br class="pc">TALK</span>
                                <span class="personCrosstalk__ttl--num">01</span>
                            </div>
                            <div class="personCrosstalk__ttl--main flex vcenter anime__wrapper">
                                <div class="js-in anime text-in">
                                    トレーナー×トレーニー
                                </div>
                            </div>
                        </div>
                        <div class="personCrosstalk__more flex vcenter bet">
                            READ MORE
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                    <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="personCrosstalk__item js-in anime bottom-in">
                    <a href="<?php echo HOME; ?>person/crosstalk02/" class="personCrosstalk__link op">
                        <div class="personCrosstalk__img">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_02.png" alt="" class="pc">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_02_sp.png" alt="" class="sp">
                        </div>
                        <div class="personCrosstalk__ttl notos flex sp-vert sp-vstart">
                            <div class="personCrosstalk__ttl--sub flex vcenter pc-hcenter sp-aro">
                                <span class="personCrosstalk__ttl--en">CROSS<br class="pc">TALK</span>
                                <span class="personCrosstalk__ttl--num">02</span>
                            </div>
                            <div class="personCrosstalk__ttl--main flex vcenter anime__wrapper">
                                <div class="js-in anime text-in">
                                    13年目×5年目×3年目対談
                                </div>
                            </div>
                        </div>
                        <div class="personCrosstalk__more flex vcenter bet">
                            READ MORE
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                    <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="personCrosstalk__item js-in anime bottom-in">
                    <a href="<?php echo HOME; ?>person/crosstalk03/" class="personCrosstalk__link op">
                        <div class="personCrosstalk__img">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_03.png" alt="" class="pc">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_03_sp.png" alt="" class="sp">
                        </div>
                        <div class="personCrosstalk__ttl notos flex sp-vert sp-vstart">
                            <div class="personCrosstalk__ttl--sub flex vcenter pc-hcenter sp-aro">
                                <span class="personCrosstalk__ttl--en">CROSS<br class="pc">TALK</span>
                                <span class="personCrosstalk__ttl--num">03</span>
                            </div>
                            <div class="personCrosstalk__ttl--main flex vcenter anime__wrapper">
                                <div class="js-in anime text-in">
                                    女性の活躍について
                                </div>
                            </div>
                        </div>
                        <div class="personCrosstalk__more flex vcenter bet">
                            READ MORE
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                    <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="personCrosstalk__item js-in anime bottom-in">
                    <h3 class="personCrosstalk__item--head notos">
                        社長メッセージ
                    </h3>
                    <p class="personCrosstalk__item--desc">
                        新入社員の皆さんからこらからのシナネンHDグループについてや、社長に聞いてみたいことをインタビューしてもらいました。
                    </p>
                    <a href="<?php echo HOME; ?>person/crosstalk04/" class="personCrosstalk__link op">
                        <div class="personCrosstalk__img">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_04.png" alt="" class="pc">
                            <img src="<?php echo HOME; ?>img/person_crosstalk_04_sp.png" alt="" class="sp">
                        </div>
                        <div class="personCrosstalk__ttl notos flex sp-vert sp-vstart">
                            <div class="personCrosstalk__ttl--sub flex vcenter pc-hcenter sp-aro">
                                <span class="personCrosstalk__ttl--en">CROSS<br class="pc">TALK</span>
                                <span class="personCrosstalk__ttl--num">04</span>
                            </div>
                            <div class="personCrosstalk__ttl--main flex vcenter anime__wrapper">
                                <div class="js-in anime text-in">
                                    社長×若手社員
                                </div>
                            </div>
                        </div>
                        <div class="personCrosstalk__more flex vcenter bet">
                            READ MORE
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                    <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                </g>
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="personEntry">
        <div class="wrap w1200 sp-wrap">
            <?php require_once $include . '_entry.php'; ?>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
