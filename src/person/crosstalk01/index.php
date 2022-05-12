<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'crosstalk01', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="crosstalk">
        <div class="pc crosstalk__bg crosstalk__bg--left"></div>
        <div class="pc crosstalk__bg crosstalk__bg--right"></div>
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
        <section class="crosstalkMv">
            <img src="<?php echo HOME; ?>img/crosstalk01_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/crosstalk01_mv_sp.png" alt="" class="sp">
        </section>

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
        <section class="crosstalkIntro">
            <h1 class="crosstalkIntro__head notos js-in anime left-in">
                <span class="crosstalkIntro__head--inner">＃01　それぞれのこれまでの歩みとそこで得たこと</span>
            </h1>
            <div class="wrap w1200 sp-wrap">
                <ul class="crosstalkIntro__list pc-flex bet">
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_01.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2000年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">鈴木 太郎</div>
                                <div class="crosstalkIntro__profile--en">Taro Suzuki</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス<br>
                                ×××××事業部
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_02.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2000年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">鈴木 太郎</div>
                                <div class="crosstalkIntro__profile--en">Taro Suzuki</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス<br>
                                ×××××事業部
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_03.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2000年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">鈴木 太郎</div>
                                <div class="crosstalkIntro__profile--en">Taro Suzuki</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス<br>
                                ×××××事業部
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_04.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2000年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">鈴木 太郎</div>
                                <div class="crosstalkIntro__profile--en">Taro Suzuki</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス<br>
                                ×××××事業部
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

<?php
/*
     ######  ########  ######
    ##    ## ##       ##    ##
    ##       ##       ##
     ######  ######   ##
          ## ##       ##
    ##    ## ##       ##    ##
     ######  ########  ######
*/
?>
        <section class="crosstalkSec">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos js-in anime bottom-in">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキスト
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <img src="<?php echo HOME; ?>img/crosstalk01_sec_01.png" alt="">
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <img src="<?php echo HOME; ?>img/crosstalk01_sec_02.png" alt="">
                    </div>
                </div>
                <h2 class="crosstalkSec__head notos js-in anime bottom-in">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキスト
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__img pc-1 flex vert">
                        <img src="<?php echo HOME; ?>img/crosstalk01_sec_03.png" alt="">
                    </div>
                    <div class="crosstalkSec__talk pc-2">
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                名前 名前
                            </div>
                            <p class="crosstalkSec__talk--text">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="crosstalkSec__separate">
            <div class="wrap w1200 sp-wrap">
                <img src="<?php echo HOME; ?>img/crosstalk01_sec.png" alt=""><br>
            </div>
        </div>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos js-in anime bottom-in">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキスト
                </h2>
                <div class="crosstalkSec__talk">
                    <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                        <div class="crosstalkSec__talk--img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                            名前 名前
                        </div>
                        <p class="crosstalkSec__talk--text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                    <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                        <div class="crosstalkSec__talk--img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                            名前 名前
                        </div>
                        <p class="crosstalkSec__talk--text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                    <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                        <div class="crosstalkSec__talk--img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                            名前 名前
                        </div>
                        <p class="crosstalkSec__talk--text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                    <div class="crosstalkSec__talk--item flex js-in anime bottom-in">
                        <div class="crosstalkSec__talk--img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                            名前 名前
                        </div>
                        <p class="crosstalkSec__talk--text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキスト
                        </p>
                    </div>
                </div>
                <p class="crosstalkSec__note js-in anime bottom-in">
                    ※掲載内容は2022年5月時点のものです。
                </p>
            </div>
        </section>

<?php
/*
    ########     ###    ########    ###
    ##     ##   ## ##      ##      ## ##
    ##     ##  ##   ##     ##     ##   ##
    ##     ## ##     ##    ##    ##     ##
    ##     ## #########    ##    #########
    ##     ## ##     ##    ##    ##     ##
    ########  ##     ##    ##    ##     ##
*/
?>
        <section class="crosstalkData">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkData__head notos">
                    インタビューメンバーの経歴
                </h2>
                <ul class="crosstalkData__list">
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                    <li class="crosstalkData__item js-in anime bottom-in">
                        <dl class="crosstalkData__profile">
                            <dt class="crosstalkData__profile--name notos">
                                鈴木 太郎
                            </dt>
                            <dd class="crosstalkData__profile--desc">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            </dd>
                        </dl>
                    </li>
                    <?php } ?>
                </ul>
                <div class="crosstalkData__more js-in anime bottom-in">
                    <a href="<?php echo HOME; ?>person/" class="crosstalkData__btn md-btn red">
                        インタビュー一覧へ
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
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
        <section class="crosstalkFooter">
            <div class="wrap w1200 sp-wrap">
                <div class="crosstalkFooter__entry js-in anime bottom-in">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
