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

    <section class="topMessage">
        <div class="pc topMessage__bg"></div>
        <div class="wrap w1200 sp-wrap">
            <div class="topMessage__head pc-flex bet">
                <div class="topMessage__head--img pc-2">
                    <img src="<?php echo HOME; ?>img/topMessage_01.png" alt="">
                </div>
                <div class="topMessage__head--text pc-1">
                    <h2 class="topMessage__head--ttl">
                        メインメッセージが入りますメインメッセージが入りますメインメッセージが入ります
                    </h2>
                    <p class="topMessage__head--sign">
                        代表取締役社長　山﨑 正毅
                    </p>
                </div>
            </div>
            <div class="topMessage__body">
                <h3 class="topMessage__body--ttl">
                    キャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入ります
                </h3>
                <p class="topMessage__body--text">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <h3 class="topMessage__body--ttl">
                    キャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入ります
                </h3>
                <p class="topMessage__body--text">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <div class="topMessage__body--img">
                    <img src="<?php echo HOME; ?>img/topMessage_02.png" alt="">
                </div>
                <h3 class="topMessage__body--ttl">
                    キャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入りますキャッチコピーが入ります
                </h3>
                <p class="topMessage__body--text">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <p class="topMessage__body--signature flex pc-vert pc-vend sp-hend sp-break">
                    <span class="topMessage__body--sign topMessage__body--co">シナネンホールディングス株式会社</span>
                    <span class="topMessage__body--sign topMessage__body--pos">代表取締役社長</span>
                    <span class="topMessage__body--sign topMessage__body--name">山﨑 正毅</span>
                </p>
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
                        わたしたちの<br class="sp">挑戦と進化
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>aboutus/SDGs" class="aboutUsCommon__btn md-btn red left-text">
                        SDGsへの取り組み
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
