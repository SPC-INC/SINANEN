<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'faq', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/recruitFaq_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/recruitFaq_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en">Frow</span>
                <span class="pageHead__text--ja">選考フロー</span>
            </h1>
        </div>
    </div>

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
    <section class="recruitFaqSec">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruitFaqSec__head notos js-in anime left-in">
                応募方法について
            </h2>
            <ul class="recruitFaqSec__list">
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            採用マイページについて
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            採用マイページについて
                        </div>
                    </div>
                </li>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            WEBエントリーシート提出方法
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            採用マイページについて
                        </div>
                    </div>
                </li>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            顔写真提出方法
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            採用マイページホームより顔写真提出画面へ進み、アップロード　　※PCから提出をお願いします
                            <div class="pc-flex">
                                <div class="">
                                    <img src="<?php echo HOME; ?>img/recruitFaq_01.png" alt="">
                                </div>
                                <div class="">
                                    【サイズ】　3MB以下、縦横比 ４：３<br>
                                    【服装】　スーツ着用<br>
                                    【注意】　上半身・正面<br>
                                    　　　　3か月以内に撮影されたもの
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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
    <section class="recruitFooter">
        <div class="wrap w1200 sp-wrap">
            <div class="pc recruitFooter__entry">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
