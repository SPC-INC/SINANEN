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
        <div class="personMv__img">
            <img src="<?php echo HOME; ?>img/person_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/person_mv_sp.png" alt="" class="sp">
        </div>
        <h1 class="personMv__text notos flex pc-vcenter pc-hcenter sp-vend sp-hend">
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
                                    それぞれのこれまでの歩みとそこで得たこと
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
                                    それぞれのこれまでの歩みとそこで得たこと
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
                                    それぞれのこれまでの歩みとそこで得たこと
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

<?php
/*
    ##     ## ########  ######   ######     ###     ######   ########
    ###   ### ##       ##    ## ##    ##   ## ##   ##    ##  ##
    #### #### ##       ##       ##        ##   ##  ##        ##
    ## ### ## ######    ######   ######  ##     ## ##   #### ######
    ##     ## ##             ##       ## ######### ##    ##  ##
    ##     ## ##       ##    ## ##    ## ##     ## ##    ##  ##
    ##     ## ########  ######   ######  ##     ##  ######   ########
*/
?>
    <section class="personMessage">
        <div class="wrap w1200 sp-wrap">
            <h2 class="personMessage__head notos">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        社長メッセージ
                    </div>
                </div>
            </h2>
            <div class="personMessage__container pc-flex bet">
                <div class="personMessage__img">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/personMessage.png" alt="">
                    </span>
                </div>
                <div class="personMessage__text flex vert">
                    <h3 class="personMessage__ttl notos">
                        キャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入ります
                    </h3>
                    <p class="personMessage__desc">
                        新入社員の皆さんからこれからのシナネンHDグループについてや、社長に聞いてみたいことをインタビューしてもらいました。
                    </p>
                    <div class="personMessage__more">
                        <a href="<?php echo HOME; ?>aboutus/topmessage/" class="personMessage__btn md-btn red left-text">
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
    </section>

    <section class="personEntry">
        <div class="wrap w1200 sp-wrap">
            <?php require_once $include . '_entry.php'; ?>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
