<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'flow', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/recruitFlow_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/recruitFlow_head_sp.png" alt="" class="sp">
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
    <section class="recruitFlowSec">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruitFlowSec__head notos js-in anime left-in">
                選考フロー
            </h2>
            <p class="pc recruitFlowSec__intro">
                当社では、面接を”相互理解の場”として位置付けています。そのため、お互いのことをより深く知るために全ての面接を個人面接にしております。
            </p>
            <ol class="recruitFlowSec__list">
            <?php
            $arrWorkLifeBalance = array(
                '1' => array(
                    'ttl' => 'WEB会社説明会の視聴',
                    'time' => '時期・期間',
                    'dtl' => '面接官・人数、質問項目や合格基準、ポイント等が入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                    'img' => 'recruitFlow_01.png',
                ),
                '2' => array(
                    'ttl' => 'WEBエントリーシートの提出',
                    'time' => '時期・期間',
                    'dtl' => '面接官・人数、質問項目や合格基準、ポイント等が入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                    'img' => 'recruitFlow_02.png',
                ),
                '3' => array(
                    'ttl' => '一次面接（個人 / WEB）',
                    'time' => '時期・期間',
                    'dtl' => '面接官・人数、質問項目や合格基準、ポイント等が入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                    'img' => 'recruitFlow_03.png',
                ),
                '4' => array(
                    'ttl' => '二次面接（個人 / WEB or 対面）',
                    'time' => '時期・期間',
                    'dtl' => '面接官・人数、質問項目や合格基準、ポイント等が入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                    'img' => 'recruitFlow_04.png',
                ),
                '5' => array(
                    'ttl' => '最終面接（個人 / 対面）、SPI試験',
                    'time' => '時期・期間',
                    'dtl' => '面接官・人数、質問項目や合格基準、ポイント等が入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                    'img' => 'recruitFlow_05.png',
                ),
            );
            foreach ($arrWorkLifeBalance as $key =>  $val) {
                ?>
                <li class="recruitFlowSec__item">
                    <h3 class="recruitFlowSec__subhead notos flex vend">
                        <div class="recruitFlowSec__subhead--num flex vcenter hcenter">Step<?php echo $key; ?></div>
                        <div class="recruitFlowSec__subhead--text"><?php echo $val['ttl']; ?></div>
                    </h3>
                    <div class="recruitFlowSec__container pc-flex vcenter bet">
                        <div class="sp recruitFlowSec__time flex vcenter"></div>
                        <div class="recruitFlowSec__text pc-flex">
                            <div class="pc recruitFlowSec__time flex vcenter">
                                <img src="<?php echo HOME; ?>img/recruitFlow_arrow.png" alt="↓">
                                <?php echo $val['time']; ?>
                            </div>
                            <div class="recruitFlowSec__desc">
                                <?php echo $val['dtl']; ?>
                            </div>
                        </div>
                        <div class="recruitFlowSec__img">
                            <img src="<?php echo HOME; ?>img/<?php echo $val['img']; ?>" alt="">
                        </div>
                    </div>
                </li>
            <?php
            } ?>
            </ol>
            <p class="pc recruitFlowSec__goal">
                採用内定！
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
    <section class="recruitFooter">
        <div class="wrap w1200 sp-wrap">
            <div class="recruitFooter__nav recruitFooter__nav--recruitFlow">
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
