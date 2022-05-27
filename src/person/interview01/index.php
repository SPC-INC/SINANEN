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
                <div class="interviewMv__copy--inner js-in anime text-line-in anime__wrapper">
                    <div class="js-in anime text-in wave3">挑戦系のキャッチコピーが入ります。</div>
                </div>
                <div class="interviewMv__copy--inner js-in anime text-line-in anime__wrapper">
                    <div class="js-in anime text-in wave3">挑戦系のキャッチコピーが入ります。</div>
                </div>
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
                    <div class="interviewSec__text pc-1">
                        <h2 class="interviewSec__head notos anime__wrapper">
                            <div class="js-in anime text-in">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </div>
                        </h2>
                        <div class="sp interviewSec__img pc-2">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/interview01_sec_01.png" alt="">
                            </span>
                        </div>
                        <p class="interviewSec__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                        </p>
                    </div>
                    <div class="pc interviewSec__img pc-2">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/interview01_sec_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="interviewSec__wrapper pc-flex bet">
                    <div class="interviewSec__text pc-2">
                        <h2 class="interviewSec__head notos anime__wrapper">
                            <div class="js-in anime text-in">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </div>
                        </h2>
                        <div class="sp interviewSec__img pc-1">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/interview01_sec_02.png" alt="">
                            </span>
                        </div>
                        <p class="interviewSec__desc">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                        </p>
                    </div>
                    <div class="pc interviewSec__img pc-1">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/interview01_sec_02.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
            <div class="interviewSec__img js-in anime right-in">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/interview01_sec_03.png" alt="">
                </span>
            </div>
            <div class="wrap w1200 sp-wrap">
                <div class="interviewSec__text">
                        <h2 class="interviewSec__head notos anime__wrapper">
                            <div class="js-in anime text-in">
                                テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                            </div>
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
            <div class="interviewSchedule__container js-stickyNav-target">
                <div class="interviewSchedule__wrapper pc-flex">
                    <div class="interviewSchedule__head">
                        <h2 class="interviewSchedule__head--text notos js-stickyNav">
                            <div class="anime__wrapper">
                                <div class="js-in anime text-in">
                                    1日のスケジュール
                                </div>
                            </div>
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
        <section class="interviewMessage pc-flex">
            <div class="interviewMessage__img">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/interview01_message.png" alt="">
                </span>
            </div>
            <div class="interviewMessage__text">
                <h2 class="interviewMessage__head">
                    <div class="anime__wrapper">
                        <div class="js-in anime text-in">
                            未来の仲間へ
                        </div>
                    </div>
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
                <h2 class="interviewFooter__head notos">
                    その他の先輩社員のインタビュー
                </h2>
                <div class="interviewFooter__list interviewFooter__list--01">
                    <?php require_once $include . '_interview.php';?>
                </div>
                <div class="interviewFooter__entry">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
