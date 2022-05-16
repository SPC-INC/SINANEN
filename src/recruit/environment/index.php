<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'environment', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/recruitEnvironment_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/recruitEnvironment_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en">Job Description</span>
                <span class="pageHead__text--ja">働く環境</span>
            </h1>
        </div>
    </div>

    <div class="recruitEnvironment">
        <div class="wrap w1200 sp-wrap">
            <div class="recruitEnvironment__wrapper pc-flex bet">
<?php
/*
    ##    ##    ###    ##     ##
    ###   ##   ## ##   ##     ##
    ####  ##  ##   ##  ##     ##
    ## ## ## ##     ## ##     ##
    ##  #### #########  ##   ##
    ##   ### ##     ##   ## ##
    ##    ## ##     ##    ###
*/
?>
                <ul class="pc recruitEnvironment__nav recruitEnvironmentNav">
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            階層別研修
                        </a>
                    </li>
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            経営人材育成選抜型研修
                        </a>
                    </li>
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            個の成長支援<br>～科目選択型研修～
                        </a>
                    </li>
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            自己啓発支援制度
                        </a>
                    </li>
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            ワークライフバランス
                        </a>
                    </li>
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            自己成長支援
                        </a>
                    </li>
                    <li class="recruitEnvironmentNav__item">
                        <a href="#" class="recruitEnvironmentNav__link">
                            生活支援制度
                        </a>
                    </li>
                </ul>

                <div class="recruitEnvironment__main">
<?php
/*
    ##          ###    ##    ## ######## ########
    ##         ## ##    ##  ##  ##       ##     ##
    ##        ##   ##    ####   ##       ##     ##
    ##       ##     ##    ##    ######   ########
    ##       #########    ##    ##       ##   ##
    ##       ##     ##    ##    ##       ##    ##
    ######## ##     ##    ##    ######## ##     ##
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentTraining">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            階層別研修
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <p class="recruitEnvironmentTraining__text">
                                概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります概要説明が入ります
                            </p>
                            <ul class="recruitEnvironmentTraining__flow flex bet">
                                <li class="recruitEnvironmentTraining__item">
                                    <dl class="recruitEnvironmentTraining__step">
                                        <dt class="recruitEnvironmentTraining__stepttl flex vcenter">
                                            <div class="recruitEnvironmentTraining__stepttl--img">
                                                <img src="<?php echo HOME; ?>img/recruitEnvironment_layer_01.png" alt="">
                                            </div>
                                            <div class="recruitEnvironmentTraining__stepttl--text">
                                                若手社員<br>（1～3年目）
                                            </div>
                                        </dt>
                                        <dd class="recruitEnvironmentTraining__stepdtl">
                                            <ul class="recruitEnvironmentTraining__stepdtl--list">
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    新入社員研修
                                                </li>
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    OJT上司研修
                                                </li>
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    2年目研修
                                                </li>
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    3年目研修
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="recruitEnvironmentTraining__item">
                                    <dl class="recruitEnvironmentTraining__step">
                                        <dt class="recruitEnvironmentTraining__stepttl flex vcenter">
                                            <div class="recruitEnvironmentTraining__stepttl--img">
                                                <img src="<?php echo HOME; ?>img/recruitEnvironment_layer_02.png" alt="">
                                            </div>
                                            <div class="recruitEnvironmentTraining__stepttl--text">
                                                中堅・リーダー層
                                            </div>
                                        </dt>
                                        <dd class="recruitEnvironmentTraining__stepdtl">
                                            <ul class="recruitEnvironmentTraining__stepdtl--list">
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    中堅リーダー研修
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="recruitEnvironmentTraining__item">
                                    <dl class="recruitEnvironmentTraining__step">
                                        <dt class="recruitEnvironmentTraining__stepttl flex vcenter">
                                            <div class="recruitEnvironmentTraining__stepttl--img">
                                                <img src="<?php echo HOME; ?>img/recruitEnvironment_layer_03.png" alt="">
                                            </div>
                                            <div class="recruitEnvironmentTraining__stepttl--text">
                                                マネジメント職層
                                            </div>
                                        </dt>
                                        <dd class="recruitEnvironmentTraining__stepdtl">
                                            <ul class="recruitEnvironmentTraining__stepdtl--list">
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    店長/チーム長研修
                                                </li>
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    評価者研修
                                                </li>
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    ミドルマネジメント研修
                                                </li>
                                                <li class="recruitEnvironmentTraining__stepdtl--item">
                                                    新任マネジメント研修
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </section>

<?php
/*
    ##       ########    ###    ########  ######## ########
    ##       ##         ## ##   ##     ## ##       ##     ##
    ##       ##        ##   ##  ##     ## ##       ##     ##
    ##       ######   ##     ## ##     ## ######   ########
    ##       ##       ######### ##     ## ##       ##   ##
    ##       ##       ##     ## ##     ## ##       ##    ##
    ######## ######## ##     ## ########  ######## ##     ##
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentTraining">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            経営人材育成選抜型研修<span class="pc">　</span><br class="sp">中堅・リーダー層以上対象
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <dl class="recruitEnvironmentTraining__data flex break">
                                <dt class="recruitEnvironmentTraining__ttl">
                                    次世代経営者育成研修
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                                <dt class="recruitEnvironmentTraining__ttl">
                                    次世代CFO育成研修
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                                <dt class="recruitEnvironmentTraining__ttl">
                                    サクセッションプラン研修
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                            </dl>
                        </div>
                    </section>

<?php
/*
     ######  ######## ##       ########
    ##    ## ##       ##       ##
    ##       ##       ##       ##
     ######  ######   ##       ######
          ## ##       ##       ##
    ##    ## ##       ##       ##
     ######  ######## ######## ##
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentTraining">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            個の成長支援<span class="pc">　</span><br class="sp">～科目選択型研修～
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <dl class="recruitEnvironmentTraining__data flex break">
                                <dt class="recruitEnvironmentTraining__ttl">
                                    オンライン3時間 他社交流
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                                <dt class="recruitEnvironmentTraining__ttl">
                                    Eラーニング短時間 動画学習
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                            </dl>
                        </div>
                    </section>

<?php
/*
     ######  ######## ##       ######## ######## ########  ######## ##     ## ######## ##        #######  ########  ##     ## ######## ##    ## ########
    ##    ## ##       ##       ##       ##       ##     ## ##       ##     ## ##       ##       ##     ## ##     ## ###   ### ##       ###   ##    ##
    ##       ##       ##       ##       ##       ##     ## ##       ##     ## ##       ##       ##     ## ##     ## #### #### ##       ####  ##    ##
     ######  ######   ##       ######   ######   ##     ## ######   ##     ## ######   ##       ##     ## ########  ## ### ## ######   ## ## ##    ##
          ## ##       ##       ##       ##       ##     ## ##        ##   ##  ##       ##       ##     ## ##        ##     ## ##       ##  ####    ##
    ##    ## ##       ##       ##       ##       ##     ## ##         ## ##   ##       ##       ##     ## ##        ##     ## ##       ##   ###    ##
     ######  ######## ######## ##       ######## ########  ########    ###    ######## ########  #######  ##        ##     ## ######## ##    ##    ##
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentTraining">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            自己啓発支援制度
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <dl class="recruitEnvironmentTraining__data flex break">
                                <dt class="recruitEnvironmentTraining__ttl">
                                    資格取得報奨金制度
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                                <dt class="recruitEnvironmentTraining__ttl">
                                    通信講座補助金制度
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                                <dt class="recruitEnvironmentTraining__ttl">
                                    ビジネススクールへの通学補助
                                </dt>
                                <dd class="recruitEnvironmentTraining__dtl">
                                    詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります詳細説明が入ります
                                </dd>
                            </dl>
                        </div>
                    </section>

<?php
/*
    ##      ##  #######  ########  ##    ## ##       #### ######## ######## ########     ###    ##          ###    ##    ##  ######  ########
    ##  ##  ## ##     ## ##     ## ##   ##  ##        ##  ##       ##       ##     ##   ## ##   ##         ## ##   ###   ## ##    ## ##
    ##  ##  ## ##     ## ##     ## ##  ##   ##        ##  ##       ##       ##     ##  ##   ##  ##        ##   ##  ####  ## ##       ##
    ##  ##  ## ##     ## ########  #####    ##        ##  ######   ######   ########  ##     ## ##       ##     ## ## ## ## ##       ######
    ##  ##  ## ##     ## ##   ##   ##  ##   ##        ##  ##       ##       ##     ## ######### ##       ######### ##  #### ##       ##
    ##  ##  ## ##     ## ##    ##  ##   ##  ##        ##  ##       ##       ##     ## ##     ## ##       ##     ## ##   ### ##    ## ##
     ###  ###   #######  ##     ## ##    ## ######## #### ##       ######## ########  ##     ## ######## ##     ## ##    ##  ######  ########
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentWelfare">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            ワークライフバランス
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <ul class="recruitEnvironmentWelfare__list flex break vstart">
                            <?php
                            $arrWorkLifeBalance = array(
                                '01' => array(
                                    'img' => 'recruitEnvironment_worklife_01.png',
                                    'ttl' => 'フレックス制',
                                    'dtl' => 'コアタイム 11:00～15:00 ●●',
                                ),
                                '02' => array(
                                    'img' => 'recruitEnvironment_worklife_02.png',
                                    'ttl' => 'リモートワーク',
                                    'dtl' => '月上限10日',
                                ),
                                '03' => array(
                                    'img' => 'recruitEnvironment_worklife_03.png',
                                    'ttl' => 'リフレッシュ休暇',
                                    'dtl' => '勤続10年、20年、30年',
                                ),
                                '04' => array(
                                    'img' => 'recruitEnvironment_worklife_04.png',
                                    'ttl' => '時差出勤',
                                    'dtl' => '7時～20時の間',
                                ),
                                '05' => array(
                                    'img' => 'recruitEnvironment_worklife_05.png',
                                    'ttl' => '産休前・産休後面談',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '06' => array(
                                    'img' => 'recruitEnvironment_worklife_06.png',
                                    'ttl' => '育児短時間勤務',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '07' => array(
                                    'img' => 'recruitEnvironment_worklife_07.png',
                                    'ttl' => '介護短時間勤務',
                                    'dtl' => 'テキストが入ります。',
                                ),
                            );
                            foreach ($arrWorkLifeBalance as $key =>  $val) {
                                ?>
                                <li class="recruitEnvironmentWelfare__item flex pc-vert pc-vcenter">
                                    <div class="recruitEnvironmentWelfare__img">
                                        <img src="<?php echo HOME; ?>img/<?php echo $val['img']; ?>" alt="">
                                    </div>
                                    <dl class="recruitEnvironmentWelfare__data">
                                        <dt class="recruitEnvironmentWelfare__ttl js-acc">
                                            <?php echo $val['ttl']; ?>
                                        </dt>
                                        <dd class="recruitEnvironmentWelfare__dtl">
                                            <?php echo $val['dtl']; ?>
                                        </dd>
                                    </dl>
                                </li>
                            <?php
                            } ?>
                            </ul>
                        </div>
                    </section>

<?php
/*
     ######  ######## ##       ######## ######## ########  ######## ##     ## ######## ##        #######  ########  ##     ## ######## ##    ## ########
    ##    ## ##       ##       ##       ##       ##     ## ##       ##     ## ##       ##       ##     ## ##     ## ###   ### ##       ###   ##    ##
    ##       ##       ##       ##       ##       ##     ## ##       ##     ## ##       ##       ##     ## ##     ## #### #### ##       ####  ##    ##
     ######  ######   ##       ######   ######   ##     ## ######   ##     ## ######   ##       ##     ## ########  ## ### ## ######   ## ## ##    ##
          ## ##       ##       ##       ##       ##     ## ##        ##   ##  ##       ##       ##     ## ##        ##     ## ##       ##  ####    ##
    ##    ## ##       ##       ##       ##       ##     ## ##         ## ##   ##       ##       ##     ## ##        ##     ## ##       ##   ###    ##
     ######  ######## ######## ##       ######## ########  ########    ###    ######## ########  #######  ##        ##     ## ######## ##    ##    ##
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentWelfare">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            自己成長支援
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <ul class="recruitEnvironmentWelfare__list flex break vstart">
                            <?php
                            $arrSelfDevelopment = array(
                                '01' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_01.png',
                                    'ttl' => '借り上げ社宅制度',
                                    'dtl' => '例:20代独身の場合 85%会社負担',
                                ),
                                '02' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_02.png',
                                    'ttl' => '財形貯蓄制度',
                                    'dtl' => '月金利5%を会社が付与',
                                ),
                                '03' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_03.png',
                                    'ttl' => '確定拠出年金',
                                    'dtl' => '会社が毎年積立',
                                ),
                                '04' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_04.png',
                                    'ttl' => 'シナネン健保からの<br>健康支援',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '05' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_05.png',
                                    'ttl' => '介護短時間勤務',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '06' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_06.png',
                                    'ttl' => '年1回婦人科検診',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '07' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_07.png',
                                    'ttl' => '年1回健康診断',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '08' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_08.png',
                                    'ttl' => 'インフルエンザ<br>予防接種',
                                    'dtl' => 'テキストが入ります。',
                                ),
                                '09' => array(
                                    'img' => 'recruitEnvironment_selfDevelopment_09.png',
                                    'ttl' => '出産一時金支給',
                                    'dtl' => 'テキストが入ります。',
                                ),
                            );
                            foreach ($arrSelfDevelopment as $key =>  $val) {
                                ?>
                                <li class="recruitEnvironmentWelfare__item flex pc-vert pc-vcenter">
                                    <div class="recruitEnvironmentWelfare__img">
                                        <img src="<?php echo HOME; ?>img/<?php echo $val['img']; ?>" alt="">
                                    </div>
                                    <dl class="recruitEnvironmentWelfare__data">
                                        <dt class="recruitEnvironmentWelfare__ttl js-acc">
                                            <?php echo $val['ttl']; ?>
                                        </dt>
                                        <dd class="recruitEnvironmentWelfare__dtl">
                                            <?php echo $val['dtl']; ?>
                                        </dd>
                                    </dl>
                                </li>
                            <?php
                            } ?>
                            </ul>
                        </div>
                    </section>

                    <?php
/*
     ######  ##     ## ########  ########   #######  ########  ########
    ##    ## ##     ## ##     ## ##     ## ##     ## ##     ##    ##
    ##       ##     ## ##     ## ##     ## ##     ## ##     ##    ##
     ######  ##     ## ########  ########  ##     ## ########     ##
          ## ##     ## ##        ##        ##     ## ##   ##      ##
    ##    ## ##     ## ##        ##        ##     ## ##    ##     ##
     ######   #######  ##        ##         #######  ##     ##    ##
*/
?>
                    <section class="recruitEnvironmentSec recruitEnvironmentWelfare">
                        <h2 class="recruitEnvironmentSec__head js-in anime left-in">
                            生活支援制度
                        </h2>
                        <div class="recruitEnvironmentSec__desc">
                            <ul class="recruitEnvironmentWelfare__list flex break vstart">
                            <?php
                            $arrSupport = array(
                                '01' => array(
                                    'img' => 'recruitEnvironment_support_01.png',
                                    'ttl' => '余暇支援補助金',
                                    'dtl' => '毎年10,000円',
                                ),
                                '02' => array(
                                    'img' => 'recruitEnvironment_support_02.png',
                                    'ttl' => '資格取得報奨金',
                                    'dtl' => '1回2,000円<br>資格に応じて金額は変動',
                                ),
                                '03' => array(
                                    'img' => 'recruitEnvironment_support_03.png',
                                    'ttl' => '勉強会や講座<br>受講費用負担',
                                    'dtl' => '内容については相談',
                                ),
                                '04' => array(
                                    'img' => 'recruitEnvironment_support_04.png',
                                    'ttl' => '年1回<br>自己申告制度',
                                    'dtl' => '希望キャリアについて申告',
                                ),
                            );
                            foreach ($arrSupport as $key =>  $val) {
                                ?>
                                <li class="recruitEnvironmentWelfare__item flex pc-vert pc-vcenter">
                                    <div class="recruitEnvironmentWelfare__img">
                                        <img src="<?php echo HOME; ?>img/<?php echo $val['img']; ?>" alt="">
                                    </div>
                                    <dl class="recruitEnvironmentWelfare__data">
                                        <dt class="recruitEnvironmentWelfare__ttl js-acc">
                                            <?php echo $val['ttl']; ?>
                                        </dt>
                                        <dd class="recruitEnvironmentWelfare__dtl">
                                            <?php echo $val['dtl']; ?>
                                        </dd>
                                    </dl>
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
                            <div class="recruitFooter__entry">
                                <?php require_once $include . '_entry.php'; ?>
                            </div>
                    </section>

                </div>

            </div>
        </div>
    </div>

</article>
<?php
require_once $include . '_footer.php';
