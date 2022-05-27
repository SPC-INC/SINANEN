<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'requirements', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/requirements_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/requirements_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">Requirements</span>
                <span class="pageHead__text--ja js-in anime text-in">新卒募集要項</span>
            </h1>
        </div>
    </div>

    <section class="requirements">
        <div class="wrap w1200 sp-wrap">
            <h2 class="requirements__head">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        募集要項
                    </div>
                </div>
            </h2>
            <dl class="requirements__data flex break">
                <dt class="requirements__ttl flex vcenter">
                    募集職種
                </dt>
                <dd class="requirements__dtl">
                    総合職<br>
                    ※営業・管理問わず、将来の経営人材として幅広い職務を担います
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    配属先
                </dt>
                <dd class="requirements__dtl">
                    シナネンホールディングス(株)及びシナネンHDグループ各社<br>
                    ※本人の希望及び適性に応じて配属を決定いたします<br>
                    ※入社後、全国にあるグループ各社への出向・転籍を伴うことがあります
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    応募条件
                </dt>
                <dd class="requirements__dtl">
                    大卒以上
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    勤務時間
                </dt>
                <dd class="requirements__dtl">
                    9:00~17:30（7.5時間）
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    勤務地
                </dt>
                <dd class="requirements__dtl">
                    配属先によって異なります
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    給与・賞与
                </dt>
                <dd class="requirements__dtl">
                    初任給(月額): 230,000円<br>
                    昇給 : 年1回<br>
                    賞与 : 年2回(6月・12月)
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    諸手当
                </dt>
                <dd class="requirements__dtl">
                    ●住宅手当　●通勤手当・交通費全額支給<br>
                    ●家族手当　…ほか
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    募集職種
                </dt>
                <dd class="requirements__dtl">
                    総合職　※営業・管理問わず、将来の経営人材として幅広い職務を担います。
                </dd>
                <dt class="requirements__ttl flex vcenter">
                    休日休暇
                </dt>
                <dd class="requirements__dtl">
                    年間休日 : 121日<br>
                    <br>
                    ※ミライフに配属となった場合は、ガス供給という業務上定休日を設けておりません。<br>
                    営業職はシフトによる交代勤務となります。(土日勤務は月2回程度、事務職は土日祝休み)<br>
                    ※建物維持管理事業は年間休日115日となります。<br>
                    シナネンHDグループで統一している121日との休日差異は基本給に加えて出勤分の給与を支給します。
                </dd>
            </dl>
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
            <div class="recruitFooter__nav recruitFooter__nav--requirements">
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
