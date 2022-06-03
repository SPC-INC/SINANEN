<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'topmessage', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/topMessage_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/topMessage_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">Message</span>
                <span class="pageHead__text--ja js-in anime text-in">社長メッセージ</span>
            </h1>
        </div>
    </div>

    <div class="topMessage">
        <div class="pc topMessage__bg"></div>
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
        <section class="topMessageIntro">
            <div class="wrap w1200 sp-wrap">
                <p class="topMessageIntro__text">
                    若手社員が、社長の描くシナネンHDグループの未来や、今、社長に聞いてみたいことをインタビューしました。
                </p>
                <div class="topMessageIntro__img">
                    <img src="<?php echo HOME; ?>img/topMessage_intro.png" alt="" class="pc">
                    <img src="<?php echo HOME; ?>img/topMessage_intro_sp.png" alt="" class="sp">
                </div>
            </div>
        </section>

<?php
/*
    ##     ## ######## ##     ## ########  ######## ########
    ###   ### ##       ###   ### ##     ## ##       ##     ##
    #### #### ##       #### #### ##     ## ##       ##     ##
    ## ### ## ######   ## ### ## ########  ######   ########
    ##     ## ##       ##     ## ##     ## ##       ##   ##
    ##     ## ##       ##     ## ##     ## ##       ##    ##
    ##     ## ######## ##     ## ########  ######## ##     ##
*/
?>
        <section class="topMessageMember">
            <div class="wrap w1200 sp-wrap">
                <div class="topMessageMember__container pc-flex bet">
                    <div class="topMessageMember__ceo flex vcenter">
                        <div class="topMessageMember__ceo--img">
                            <img src="<?php echo HOME; ?>img/topMessage_ceo.png" alt="">
                        </div>
                        <div class="topMessageMember__ceo--text">
                            <div class="topMessageMember__ceo--pos">
                                シナネンホールディングス株式会社<br>
                                代表取締役社長
                            </div>
                            <div class="topMessageMember__ceo--name notos">
                                山﨑 正毅
                            </div>
                        </div>
                    </div>
                    <ul class="topMessageMember__member flex bet">
                        <li class="topMessageMember__member--item">
                            <div class="topMessageMember__member--img">
                                <img src="<?php echo HOME; ?>img/topMessage_member_01.png" alt="">
                            </div>
                            <div class="topMessageMember__member--text">
                                ○○年入社<br>
                                〇〇 〇〇
                            </div>
                        </li>
                        <li class="topMessageMember__member--item">
                            <div class="topMessageMember__member--img">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                            </div>
                            <div class="topMessageMember__member--text">
                                ○○年入社<br>
                                〇〇 〇〇
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

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
        <section class="topMessageInterview">
            <div class="pc topMessageInterview__bg topMessageInterview__bg--1"></div>
            <div class="wrap w1200 sp-wrap">
                <h2 class="topMessageInterview__head notos">
                    キャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入ります
                </h2>
                <div class="topMessageInterview__wrapper pc-flex">
                    <div class="topMessageInterview__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/topMessage_interview_01.png" alt="">
                        </span>
                    </div>
                    <div class="topMessageInterview__text">
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                                名前 名前
                            </div>
                            <p class="topMessageInterview__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                                名前 名前
                            </div>
                            <p class="topMessageInterview__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                                名前 名前
                            </div>
                            <p class="topMessageInterview__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        名前 名前
                    </div>
                    <p class="topMessageInterview__talk--text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                        名前 名前
                    </div>
                    <p class="topMessageInterview__talk--text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        名前 名前
                    </div>
                    <p class="topMessageInterview__talk--text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
            </div>
        </section>

        <div class="topMessageInterview__separate">
            <span class="js-in anime slideImg">
                <img src="<?php echo HOME; ?>img/topMessage_interview.png" alt="">
            </span>
        </div>

        <section class="topMessageInterview">
            <div class="pc topMessageInterview__bg topMessageInterview__bg--2"></div>
            <div class="wrap w1200 sp-wrap">
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        名前 名前
                    </div>
                    <p class="topMessageInterview__talk--text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                        名前 名前
                    </div>
                    <p class="topMessageInterview__talk--text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        名前 名前
                    </div>
                    <p class="topMessageInterview__talk--text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
                <div class="topMessageInterview__wrapper pc-flex">
                    <div class="topMessageInterview__img pc-2">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/topMessage_interview_02.png" alt="">
                        </span>
                    </div>
                    <div class="topMessageInterview__text pc-1">
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                                名前 名前
                            </div>
                            <p class="topMessageInterview__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                                名前 名前
                            </div>
                            <p class="topMessageInterview__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                                名前 名前
                            </div>
                            <p class="topMessageInterview__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="topMessageInterview__separate">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/topMessage_interview_03.png" alt="">
                    </span>
                </div>
            </div>
        </section>

<?php
/*
    ########  #######   #######  ######## ######## ########
    ##       ##     ## ##     ##    ##    ##       ##     ##
    ##       ##     ## ##     ##    ##    ##       ##     ##
    ######   ##     ## ##     ##    ##    ######   ########
    ##       ##     ## ##     ##    ##    ##       ##   ##
    ##       ##     ## ##     ##    ##    ##       ##    ##
    ##        #######   #######     ##    ######## ##     ##
*/
?>
        <section class="aboutUsCommon">
                <div class="wrap w1200 sp-wrap">
                <h2 class="aboutUsCommon__head notos">
                    会社紹介
                </h2>
                <div class="aboutUsCommon__link pc-flex bet">
                    <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="aboutUsCommon__btn md-btn red left-text">
                        シナネンHDグループの<br class="sp">挑戦と進化
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>aboutus/SDGs" class="aboutUsCommon__btn md-btn red left-text">
                        SDGsへの貢献
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="aboutUsCommon__entry">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
