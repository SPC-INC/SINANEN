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
                <span class="pageHead__text--en js-in anime text-in">Job Description</span>
                <span class="pageHead__text--ja js-in anime text-in">働く環境</span>
            </h1>
        </div>
    </div>

    <div class="sp-wrap">
        <p class="sp recruitEnvironment__intro">
            シナネンホールディングスグループでは、「個」の成長が「会社」の成長に繋がると考え、社員一人一人がいきいきと働ける環境を整えています。ここでは、当社グループの働く環境の全体像をご紹介します。
        </p>
    </div>

    <ul class="sp recruitEnvironment__tab flex">
        <li class="recruitEnvironment__tab--item flex vcenter hcenter js-recruitEnvironment-tab selected" data-tab="training">
            研修
        </li>
        <li class="recruitEnvironment__tab--item flex vcenter hcenter js-recruitEnvironment-tab" data-tab="welfare">
            福利厚生
        </li>
    </ul>

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
                <div class="pc recruitEnvironment__nav">
                    <ul class="recruitEnvironmentNav js-stickyNav">
                        <li class="recruitEnvironmentNav__item js-currentNav-item">
                            <a href="#education" class="recruitEnvironmentNav__link current">
                                教育・研修制度
                            </a>
                        </li>
                        <li class="recruitEnvironmentNav__item js-currentNav-item">
                            <a href="#worklifebalance" class="recruitEnvironmentNav__link">
                                ワークライフバランス
                            </a>
                        </li>
                        <li class="recruitEnvironmentNav__item js-currentNav-item">
                            <a href="#selfdevelopment" class="recruitEnvironmentNav__link">
                                生活支援制度
                            </a>
                        </li>
                        <li class="recruitEnvironmentNav__item js-currentNav-item">
                            <a href="#support" class="recruitEnvironmentNav__link">
                                自己成長支援
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="recruitEnvironment__main js-stickyNav-target">
                    <p class="pc recruitEnvironment__intro">
                        シナネンホールディングスグループでは、「個」の成長が「会社」の成長に繋がると考え、社員一人一人がいきいきと働ける環境を整えています。ここでは、当社グループの働く環境の全体像をご紹介します。
                    </p>
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
                    <div class="recruitEnvironment__tabItem js-recruitEnvironment-tabItem show" id="training">
                        <section class="recruitEnvironmentSec recruitEnvironmentTraining js-currentNav" id="education">
                            <h2 class="recruitEnvironmentSec__head">
                                <div class="anime__wrapper">
                                    <div class="js-in anime text-in">
                                        教育・研修制度
                                    </div>
                                </div>
                            </h2>
                            <div class="recruitEnvironmentTraining__img js-in anime bottom-in">
                                <img src="<?php echo HOME; ?>img/recruitEnvironment_training.png" alt="">
                            </div>
                            <div class="recruitEnvironmentSec__desc">
                                <h3 class="recruitEnvironmentTraining__head">
                                    階層別研修
                                </h3>
                                <p class="recruitEnvironmentTraining__text">
                                    対象となっている社員が同じタイミングで一斉に受ける研修です。内定者研修、OJT研修、新入社員、入社２年目、３年目、キャリア研修、その後、マネジメント職に昇進してからとその節目節目で必要となってくるスキルを身につけるための研修を実施しています。<br>
                                    特にシナネンホールディングスグループでは、入社3年間を「義務教育期間」と位置づけ、自律し、活躍できる人財になっていただけるような研修を実施しています。
                                </p>
                                <ul class="recruitEnvironmentTraining__flow flex bet js-in anime bottom-in">
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
                                                        キャリア研修
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
                                                        部長/チーム長研修
                                                    </li>
                                                    <li class="recruitEnvironmentTraining__stepdtl--item">
                                                        評価者研修
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
                            <div class="recruitEnvironmentSec__desc">
                                <h3 class="recruitEnvironmentTraining__head">
                                        経営人材育成選抜型研修<span class="pc">　</span><br class="sp">中堅・リーダー層以上対象
                                </h3>
                                <p class="recruitEnvironmentTraining__text">
                                    次世代経営者人財の育成強化を目的とした研修です。<br>
                                    シナネンホールディングスグループでは、早期から経営者の視点に触れさせ、既存の考え方にとらわれない、変化を生み出していく力を養成しています。選抜型・公募型の研修を数種類設け、ご自身の目指すキャリアの実現に向けた能力開発に向けて取り組んでいただきます。
                                </p>
                            </div>

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
                            <div class="recruitEnvironmentSec__desc">
                                <h3 class="recruitEnvironmentTraining__head">
                                        個の成長支援<span class="pc">　</span><br class="sp">～科目選択型研修～
                                </h3>
                                <p class="recruitEnvironmentTraining__text">
                                    社員一人一人、自身が課題と感じるスキルを選択して受講する研修です。<br>
                                    約3時間のオンラインで他社の方々と関わりながら知見を深める形式や、動画視聴による形式、ビジネススクールへの通学など様々で、基礎的なビジネススキルからマネジメントに必要なスキルまで幅広くご用意しています。
                                </p>
                            </div>
                        </section>
                    </div>

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
                    <div class="recruitEnvironment__tabItem js-recruitEnvironment-tabItem" id="welfare">
                        <section class="recruitEnvironmentSec recruitEnvironmentWelfare js-currentNav" id="worklifebalance">
                            <h2 class="recruitEnvironmentSec__head">
                                <div class="anime__wrapper">
                                    <div class="js-in anime text-in">
                                        ワークライフバランス
                                    </div>
                                </div>
                            </h2>
                            <div class="recruitEnvironmentSec__desc">
                                <ul class="recruitEnvironmentWelfare__list flex break vstart">
                                <?php
                                $arrWorkLifeBalance = array(
                                    '01' => array(
                                        'img' => 'recruitEnvironment_worklife_01.png',
                                        'ttl' => 'フレックス制',
                                        'dtl' => 'コアタイム 11:00～15:00',
                                    ),
                                    '02' => array(
                                        'img' => 'recruitEnvironment_worklife_02.png',
                                        'ttl' => 'リモートワーク',
                                        'dtl' => '月上限10日<br>※コロナの状況によっては原則在宅',
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
                                        'dtl' => '所属部署上長と実施',
                                    ),
                                    '06' => array(
                                        'img' => 'recruitEnvironment_worklife_06.png',
                                        'ttl' => '育児短時間勤務',
                                        'dtl' => '所属部署上長と相談の上実施可能',
                                    ),
                                    '07' => array(
                                        'img' => 'recruitEnvironment_worklife_07.png',
                                        'ttl' => '介護短時間勤務',
                                        'dtl' => '所属部署上長と相談の上実施可能',
                                    ),
                                );
                                $cnt = 1;
                                foreach ($arrWorkLifeBalance as $key =>  $val) {
                                    if ($cnt >= 4) {
                                        $cnt = 1;
                                    } ?>
                                    <li class="recruitEnvironmentWelfare__item flex pc-vert pc-vcenter js-in anime bottom-in wave<?php echo $cnt; ?>">
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
                                $cnt++;
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
                        <section class="recruitEnvironmentSec recruitEnvironmentWelfare js-currentNav" id="selfdevelopment">
                            <h2 class="recruitEnvironmentSec__head">
                                <div class="anime__wrapper">
                                    <div class="js-in anime text-in">
                                        ライフサポート制度
                                    </div>
                                </div>
                            </h2>
                            <div class="recruitEnvironmentSec__desc">
                                <ul class="recruitEnvironmentWelfare__list flex break">
                                <?php
                                $arrSelfDevelopment = array(
                                    '01' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_01.png',
                                        'ttl' => '借り上げ社宅制度',
                                        'dtl' => '例：20代独身の場合 85%会社負担',
                                    ),
                                    '02' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_02.png',
                                        'ttl' => '財形貯蓄制度',
                                        'dtl' => '例：在宅財形の場合月金利5%を会社が付与',
                                    ),
                                    '03' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_03.png',
                                        'ttl' => '確定拠出年金',
                                        'dtl' => '会社が毎年積立',
                                    ),
                                    '04' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_04.png',
                                        'ttl' => 'シナネン健保からの<br>健康支援',
                                        'dtl' => '例：医薬品の購入3,000円まで負担',
                                    ),
                                    '05' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_06.png',
                                        'ttl' => '年1回婦人科検診',
                                        'dtl' => '年に1度会社負担で検診可能',
                                    ),
                                    '06' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_07.png',
                                        'ttl' => '年1回健康診断',
                                        'dtl' => '年に1度基本勤務先にて実施',
                                    ),
                                    '07' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_08.png',
                                        'ttl' => 'インフルエンザ<br>予防接種',
                                        'dtl' => '1回2,000円で接種可能',
                                    ),
                                    '08' => array(
                                        'img' => 'recruitEnvironment_selfDevelopment_09.png',
                                        'ttl' => '出産一時金支給',
                                        'dtl' => '健康保険組合より支給',
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
                        <section class="recruitEnvironmentSec recruitEnvironmentWelfare js-currentNav" id="support">
                            <h2 class="recruitEnvironmentSec__head">
                                <div class="anime__wrapper">
                                    <div class="js-in anime text-in">
                                        自己成長支援
                                    </div>
                                </div>
                            </h2>
                            <div class="recruitEnvironmentSec__desc">
                                <ul class="recruitEnvironmentWelfare__list flex break">
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
                    </div>


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
                    <section class="pc recruitFooter">
                        <div class="recruitFooter__entry">
                            <?php require $include . '_entry.php'; ?>
                        </div>
                    </section>

                </div>

            </div>
        </div>
    </div>
    <ul class="sp recruitEnvironment__tab recruitEnvironment__tab--bottom flex">
        <li class="recruitEnvironment__tab--item flex vcenter hcenter js-recruitEnvironment-tab-bottom selected" data-tab="training">
            研修
        </li>
        <li class="recruitEnvironment__tab--item flex vcenter hcenter js-recruitEnvironment-tab-bottom" data-tab="welfare">
            福利厚生
        </li>
    </ul>
    <section class="sp recruitFooter">
        <div class="sp-wrap">
            <div class="recruitFooter__entry">
                <?php require $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
