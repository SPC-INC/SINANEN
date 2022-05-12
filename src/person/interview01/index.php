<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'interview01', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="interview">
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
        <section class="interviewMv">
            <div class="interviewMv__img">
                <img src="<?php echo HOME; ?>img/interview01_mv.png" alt="" class="pc">
                <img src="<?php echo HOME; ?>img/interview01_mv_sp.png" alt="" class="sp">
            </div>
            <h1 class="interviewMv__copy flex vert">
                <span class="interviewMv__copy--inner js-in anime bottom-in">挑戦系のキャッチコピーが入ります。</span>
                <span class="interviewMv__copy--inner js-in anime bottom-in">挑戦系のキャッチコピーが入ります。</span>
            </h1>
            <div class="interviewMv__profile js-in anime left-in">
                <div class="interviewMv__profile--year notos">2000年入社</div>
                <div class="interviewMv__profile--name notos flex vend">
                    <div class="interviewMv__profile--ja">鈴木 太郎</div>
                    <div class="interviewMv__profile--en">Taro Suzuki</div>
                </div>
                <div class="interviewMv__profile--pos notos">×××××事業部</div>
                <div class="interviewMv__profile--career">
                    <div class="interviewMv__profile--year">
                    <div class="interviewMv__profile--ttl">経歴</div>
                    <div class="interviewMv__profile--dtl">
                        2010年　入社<br>
                        2010年　〇〇〇部<br>
                        2013年　〇〇〇部<br>
                        2019年　〇〇部 部長
                    </div>
                </div>
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
        <section class="interviewSec">
            <div class="pc interviewSec__bg interviewSec__bg--left"></div>
            <div class="pc interviewSec__bg interviewSec__bg--right"></div>
            <div class="wrap w1200 sp-wrap">
                <div class="interviewSec__wrapper pc-flex bet">
                    <div class="interviewSec__text pc-1 js-in anime bottom-in">
                        <h2 class="interviewSec__head notos">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </h2>
                        <div class="sp interviewSec__img pc-2 js-in anime bottom-in">
                            <img src="<?php echo HOME; ?>img/interview01_sec_01.png" alt="">
                        </div>
                        <p class="interviewSec__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                        </p>
                    </div>
                    <div class="pc interviewSec__img pc-2 js-in anime bottom-in">
                        <img src="<?php echo HOME; ?>img/interview01_sec_01.png" alt="">
                    </div>
                </div>
                <div class="interviewSec__wrapper pc-flex bet">
                    <div class="interviewSec__text pc-2 js-in anime bottom-in">
                        <h2 class="interviewSec__head notos">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </h2>
                        <div class="sp interviewSec__img pc-1 js-in anime bottom-in">
                            <img src="<?php echo HOME; ?>img/interview01_sec_02.png" alt="">
                        </div>
                        <p class="interviewSec__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                        </p>
                    </div>
                    <div class="pc interviewSec__img pc-1 js-in anime bottom-in">
                        <img src="<?php echo HOME; ?>img/interview01_sec_02.png" alt="">
                    </div>
                </div>
            </div>
            <div class="interviewSec__img js-in anime right-in">
                <img src="<?php echo HOME; ?>img/interview01_sec_03.png" alt="">
            </div>
            <div class="wrap w1200 sp-wrap">
                <div class="interviewSec__text js-in anime bottom-in">
                        <h2 class="interviewSec__head notos">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </h2>
                        <p class="interviewSec__desc">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                    </p>
                </div>
            </div>
        </section>

<?php
/*
     ######   ######  ##     ## ######## ########  ##     ## ##       ########
    ##    ## ##    ## ##     ## ##       ##     ## ##     ## ##       ##
    ##       ##       ##     ## ##       ##     ## ##     ## ##       ##
     ######  ##       ######### ######   ##     ## ##     ## ##       ######
          ## ##       ##     ## ##       ##     ## ##     ## ##       ##
    ##    ## ##    ## ##     ## ##       ##     ## ##     ## ##       ##
     ######   ######  ##     ## ######## ########   #######  ######## ########
*/
?>
        <section class="interviewSchedule">
            <div class="interviewSchedule__container">
                <div class="interviewSchedule__wrapper pc-flex">
                    <div class="interviewSchedule__head">
                        <h2 class="interviewSchedule__head--text notos">
                            1日のスケジュール
                        </h2>
                    </div>
                    <div class="interviewSchedule__dtl">
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                9:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    出社・始業
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <div class="interviewSchedule__desc--img">
                                        <img src="<?php echo HOME; ?>img/interview01_schedule_01.png" alt="">
                                    </div>
                                    <p class="interviewSchedule__desc--text">
                                        説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                10:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    チームミーティング
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <div class="interviewSchedule__desc--img">
                                        <img src="<?php echo HOME; ?>img/interview01_schedule_02.png" alt="">
                                    </div>
                                    <p class="interviewSchedule__desc--text">
                                        説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                12:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    昼休憩
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                14:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    社外打合せ
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                16:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    資料作成
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <div class="interviewSchedule__desc--img">
                                        <img src="<?php echo HOME; ?>img/interview01_schedule_03.png" alt="">
                                    </div>
                                    <p class="interviewSchedule__desc--text">
                                        説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                18:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    退社
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <section class="interviewMessage pc-flex js-in anime bottom-in">
            <div class="interviewMessage__img">
                <img src="<?php echo HOME; ?>img/interview01_message.png" alt="">
            </div>
            <div class="interviewMessage__text">
                <h2 class="interviewMessage__head">
                    未来の仲間へ
                </h2>
                <p class="interviewMessage__desc">
                    学生に向けたメッセージが入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
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
        <section class="interviewFooter">
            <div class="wrap w1200 sp-wrap">
                <h2 class="interviewFooter__head notos js-in anime bottom-in">
                    その他の先輩社員のインタビュー
                </h2>
                <div class="interviewFooter__list interviewFooter__list--01">
                    <?php require_once $include . '_interview.php';?>
                </div>
                <div class="interviewFooter__entry js-in anime bottom-in">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
