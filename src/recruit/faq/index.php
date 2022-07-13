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
                <span class="pageHead__text--en js-in anime text-in">FAQ</span>
                <span class="pageHead__text--ja js-in anime text-in">よくある質問</span>
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
            <h2 class="recruitFaqSec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        応募方法について
                    </div>
                    <div class="sp js-in anime left-in">
                        応募方法について
                    </div>
                </div>
            </h2>
            <ul class="recruitFaqSec__list">
            <?php
            $arrFaq01 = array(
                '1' => array(
                    'Q' => '採用マイページの登録方法を<br class="sp">教えてください。',
                    'A' => 'エントリー後に、マイナビにご登録のメールアドレス宛にマイページ登録のご案内をお送りします。',
                ),
                '2' => array(
                    'Q' => 'WEBエントリーシート提出方法に<br class="sp">ついて教えてください。',
                    'A' => 'ホーム画面にWEBエントリーシート記入ページにアクセスできるようになりますので、WEB説明会視聴後、マイページよりご記入ください。',
                ),
                '3' => array(
                    'Q' => '顔写真提出方法について<br class="sp">教えてください。',
                    'A' => 'ホーム画面に顔写真提出ページにアクセスできるようになりますので、WEB説明会視聴後、マイページよりご記入ください。',
                ),
            );
            foreach ($arrFaq01 as $key =>  $val) {
                ?>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex sp-vcenter js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            <?php echo $val['Q']; ?>
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            <?php echo $val['A']; ?>
                        </div>
                    </div>
                </li>
            <?php
            } ?>
            </ul>
        </div>
    </section>

    <section class="recruitFaqSec">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruitFaqSec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        選考について
                    </div>
                    <div class="sp js-in anime left-in">
                        選考について
                    </div>
                </div>
            </h2>
            <ul class="recruitFaqSec__list">
            <?php
            $arrFaq02 = array(
                '1' => array(
                    'Q' => '面接はオンラインですか<br class="sp">（WEB面接は可能ですか）',
                    'A' => '一次面接はオンライン、二次面接は対面もしくはオンライン、最終面接は対面で実施しています。<br>二次面接の形式は、社会情勢や皆様の状況により判断します。',
                ),
                '2' => array(
                    'Q' => '文系・理系どちらの出身でも<br class="sp">応募できますか？',
                    'A' => '文系理系問わず募集しています。',
                ),
                '3' => array(
                    'Q' => '外国籍でも<br class="sp">応募できますか？',
                    'A' => '応募可能です。',
                ),
            );
            foreach ($arrFaq02 as $key =>  $val) {
                ?>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex sp-vcenter js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            <?php echo $val['Q']; ?>
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            <?php echo $val['A']; ?>
                        </div>
                    </div>
                </li>
            <?php
            } ?>
            </ul>
        </div>
    </section>

    <section class="recruitFaqSec">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruitFaqSec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        働き方について
                    </div>
                    <div class="sp js-in anime left-in">
                        働き方について
                    </div>
                </div>
            </h2>
            <ul class="recruitFaqSec__list">
            <?php
            $arrFaq03 = array(
                '1' => array(
                    'Q' => '残業はありますか',
                    'A' => '業務状況により発生する場合があります。',
                ),
                '2' => array(
                    'Q' => '転勤・異動はありますか。<br class="sp">また希望は出せますか',
                    'A' => '転勤・異動は発生する可能性はございます。<br>希望については、年に1度自己申告制度というものがあります。',
                ),
                '3' => array(
                    'Q' => '有給休暇の取得率は<br class="sp">どのくらいですか',
                    'A' => '2021年度時点では46.3%です。<br>今後働き方改革の取り組みで、数値の向上を図ります。',
                ),
            );
            foreach ($arrFaq03 as $key =>  $val) {
                ?>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex sp-vcenter js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            <?php echo $val['Q']; ?>
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            <?php echo $val['A']; ?>
                        </div>
                    </div>
                </li>
            <?php
            } ?>
            </ul>
        </div>
    </section>

    <section class="recruitFaqSec">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruitFaqSec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        キャリアについて
                    </div>
                    <div class="sp js-in anime left-in">
                        キャリアについて
                    </div>
                </div>
            </h2>
            <ul class="recruitFaqSec__list">
            <?php
            $arrFaq04 = array(
                '1' => array(
                    'Q' => '配属先はどのように決まりますか',
                    'A' => '初期配置は希望を伺いながら、皆さんの人柄や適性を踏まえて決めさせていただきます。',
                ),
                '2' => array(
                    'Q' => '評価制度について教えてください',
                    'A' => '当社の評価制度は、仕事の成果（結果）を評価する「成果評価」と、自身の役割に応じた行動が出来ているかを評価する「行動評価」の2つを年間で見て、総合的に判断する評価制度となっています。',
                ),
                '3' => array(
                    'Q' => '昇給・昇格について教えてください',
                    'A' => '年に1度、評価によって変わります。',
                ),
                '4' => array(
                    'Q' => '平均勤続年数はどれくらいですか',
                    'A' => '2021年度時点で12年です。',
                ),
            );
            foreach ($arrFaq04 as $key =>  $val) {
                ?>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex sp-vcenter js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            <?php echo $val['Q']; ?>
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            <?php echo $val['A']; ?>
                        </div>
                    </div>
                </li>
            <?php
            } ?>
            </ul>
        </div>
    </section>

    <section class="recruitFaqSec">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruitFaqSec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">

                    </div>
                    <div class="sp js-in anime left-in">
                    </div>
                </div>
            </h2>
            <ul class="recruitFaqSec__list">
            <?php
            $arrFaq05 = array(
                '1' => array(
                    'Q' => 'インターンシップはありますか',
                    'A' => '夏、秋、冬に実施しています。<br>マイナビにてご応募ください。',
                ),
                '2' => array(
                    'Q' => '専門知識は必要ですか',
                    'A' => '入社前は必要ありません。入社後、配属となった部署で必要な知識を培っていただきます。',
                ),
                '3' => array(
                    'Q' => '社員寮・家賃補助はありますか',
                    'A' => 'あります。例として、20代独身の場合には、85％を会社が負担いたします。',
                ),
            );
            foreach ($arrFaq05 as $key =>  $val) {
                ?>
                <li class="recruitFaqSec__item">
                    <div class="recruitFaqSec__Q flex sp-vcenter js-acc">
                        <span class="recruitFaqSec__Q--head">Q</span>
                        <div class="recruitFaqSec__Q--text">
                            <?php echo $val['Q']; ?>
                        </div>
                        <i class="icon icon-down"></i>
                    </div>
                    <div class="recruitFaqSec__A flex">
                        <span class="recruitFaqSec__A--head">A</span>
                        <div class="recruitFaqSec__A--text">
                            <?php echo $val['A']; ?>
                        </div>
                    </div>
                </li>
            <?php
            } ?>
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
            <div class="recruitFooter__nav recruitFooter__nav--faq">
                <?php require_once $include . '_recruit.php'; ?>
            </div>
            <div class="pc recruitFooter__entry">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
