<?php
$include = '../include/'; // パーツ用パス
$home = '../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'future', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="futureHead notos">
        <div class="futureHead__img">
            <img src="<?php echo HOME; ?>img/future_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/future_head_sp.png" alt="" class="sp">
        </div>
        <div class="futureHead__text">
            <h1 class="futureHead__text--main js-in anime bottom-in">
                <span class="futureHead__text--en">FUTURE</span>
                <span class="futureHead__text--ja js-in anime bottom-in wave2">シナネン<span class="pc">HDグループ</span>が描く未来</span>
            </h1>
            <p class="futureHead__text--sub js-in anime bottom-in wave3">
                Challenging New Worlds with Big Sky-thinking<br>
                ～大胆な発想で新しい世界への挑戦～
            </p>
            <p class="futureHead__text--sub js-in anime bottom-in wave4">
                私たちは「こんな未来だったらいいな」を<br class="sp">実現していきます
            </p>
            <p class="sp futureHead__text--sub">
                scroll
            </p>
        </div>
    </div>

    <div class="wrap w1200 sp-wrap">
        <section class="futureSec">
            <h2 class="futureSec__head notos">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        再生可能エネルギーだけで回る世界
                    </div>
                </div>
                <div class="futureSec__head--bar pc-flex vcenter">
                    <span class="inner">Lifestyle</span>
                </div>
            </h2>
            <div class="futureSec__container pc-flex bet">
                <div class="futureSec__text flex vert">
                    <h3 class="futureSec__subhead">
                        多様な再生可能エネルギー関連事業への推進
                    </h3>
                    <div class="sp futureSec__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/future_lifestyle_01.png" alt="">
                        </span>
                    </div>
                    <p class="futureSec__desc">
                        地球環境に優しい再生可能エネルギーの導入を積極的に推進し、CO2 排出削減に貢献しています。実質再生可能エネルギー100％の電力メニューの提供、クリーン電力の利用料金の一部を森林保護活動などに充てる「シナネンあかりの森プロジェクト」を展開し、環境配慮型電力の普及を通じて脱炭素社会の実現に貢献します。
                    </p>
                </div>
                <div class="pc futureSec__img">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/future_lifestyle_01.png" alt="">
                    </span>
                </div>
            </div>
            <div class="futureSec__container pc-flex bet">
                <div class="futureSec__text flex vert">
                    <h3 class="futureSec__subhead">
                        グループの総合力で住まいと暮らしに貢献
                    </h3>
                    <div class="sp futureSec__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/future_lifestyle_02.png" alt="">
                        </span>
                    </div>
                    <p class="futureSec__desc">
                        主力事業であるエネルギーの安定供給に加え、リフォーム・住宅設備などの住まいのご提案、環境配慮型のモビリティであるシェアサイクルサービスの運営、廃棄物リサイクル燃料や原料の製造など様々なサービスの提供を通じて、脱炭素社会の実現に挑戦するとともに、すべてのお客様の快適な暮らしづくりに貢献します。
                    </p>
                </div>
                <div class="pc futureSec__img">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/future_lifestyle_02.png" alt="">
                    </span>
                </div>
            </div>
        </section>

        <section class="futureSec">
            <h2 class="futureSec__head notos">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        誰もが働きやすく生きやすく
                    </div>
                </div>
                <div class="futureSec__head--bar pc-flex vcenter">
                    <span class="inner">Workstyle</span>
                </div>
            </h2>
            <div class="futureSec__container pc-flex bet">
                <div class="futureSec__text flex vert">
                    <h3 class="futureSec__subhead">
                        年齢・国籍・性別にとらわれない”個人”を尊重する環境
                    </h3>
                    <div class="sp futureSec__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/future_workstyle_01.png" alt="">
                        </span>
                    </div>
                    <p class="futureSec__desc">
                        従業員一人ひとりが、それぞれに合った環境で能力を発揮出来る環境をつくるため、社員の希望に応じて定年退職後も引き続き当社グループで働き続けられるように、再雇用制度を制定したり、従業員が仕事と子育てを両立させることができる働きやすい環境となるよう、次世代育成支援行動計画を策定したりしています。また、女性のキャリア形成支援の促進や育児支援策の充実、女性マネジメント職の登用拡大のための環境づくりにも積極的に取り組んでいます。
                    </p>
                </div>
                <div class="pc futureSec__img">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/future_workstyle_01.png" alt="">
                    </span>
                </div>
            </div>
            <div class="futureSec__container pc-flex bet">
                <div class="futureSec__text flex vert">
                    <h3 class="futureSec__subhead">
                        新規事業の創出
                    </h3>
                    <div class="sp futureSec__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/future_workstyle_02.png" alt="">
                        </span>
                    </div>
                    <p class="futureSec__desc">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
                <div class="pc futureSec__img">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/future_workstyle_02.png" alt="">
                    </span>
                </div>
            </div>
        </section>

        <section class="futureSec">
            <h2 class="futureSec__head notos">
                <div class="anime__wrapper">
                    <div class="js-in anime text-in">
                        理想とする未来のシナネンHDグループの在り方が入ります
                    </div>
                </div>
                <div class="futureSec__head--bar pc-flex vcenter">
                    <span class="inner">Company</span>
                </div>
            </h2>
            <div class="futureSec__container pc-flex bet">
                <div class="futureSec__text flex vert">
                    <h3 class="futureSec__subhead">
                        社員の考え方・慣習・行動様式の変革
                    </h3>
                    <div class="sp futureSec__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/future_company_01.png" alt="">
                        </span>
                    </div>
                    <p class="futureSec__desc">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
                <div class="pc futureSec__img">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/future_company_01.png" alt="">
                    </span>
                </div>
            </div>
        </section>
        <div class="futureSec__entry">
            <?php require_once $include . '_entry.php'; ?>
        </div>
    </div>

</article>
<?php
require_once $include . '_footer.php';
