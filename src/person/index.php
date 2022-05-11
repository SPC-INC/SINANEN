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
            <span class="personMv__text--inner">
                わたしたちの<span class="em">“挑戦”</span>
            </span>
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
                インタビュー
            </h2>
            <div class="personInterview__list">
                <?php require_once $include . '_interview.php';?>
            </div>
            <!-- <ul class="personInterview__list flex bet">
                <li class="personInterview__item">
                    <a href="<?php echo HOME; ?>person/interview01/" class="personInterview__link">
                        <div class="personInterview__img">
                            <img src="<?php echo HOME; ?>img/person_interview_01.png" alt="">
                        </div>
                        <div class="personInterview__text flex vert bet">
                            <p class="personInterview__text--copy">
                                キャッチコピー（仮）テキストテキストテキストテキストテキスト
                            </p>
                            <p class="personInterview__text--data">
                                <span class="personInterview__text--pos">部署（所属）</span><br>
                                <span class="personInterview__text--name">0000年入社　●● ●●</span>
                            </p>
                        </div>
                    </a>
                </li>
            </ul> -->
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
                スペシャルクロストーク
            </h2>
            <ul class="personCrosstalk__list">
                <li class="personCrosstalk__item">
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
                            <div class="personCrosstalk__ttl--main flex vcenter">
                                それぞれのこれまでの歩みとそこで得たこと
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
                <li class="personCrosstalk__item">
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
                            <div class="personCrosstalk__ttl--main flex vcenter">
                                それぞれのこれまでの歩みとそこで得たこと
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
                <li class="personCrosstalk__item">
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
                            <div class="personCrosstalk__ttl--main flex vcenter">
                                それぞれのこれまでの歩みとそこで得たこと
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
                社長メッセージ
            </h2>
            <div class="personMessage__container pc-flex bet">
                <div class="personMessage__img">
                    <img src="<?php echo HOME; ?>img/personMessage.png" alt="">
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
