<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'btob', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="businessChildHead notos">
        <div class="businessChildHead__img">
            <img src="<?php echo HOME; ?>img/business_btob_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/business_btob_head_sp.png" alt="" class="sp">
        </div>
        <h1 class="businessChildHead__text flex vcenter js-in anime text-line-in">
            <div class="businessChildHead__text--inner js-in anime text-in wave3">
                BtoB事業<br class="sp">(エネルギーソリューション事業)
            </div>
        </h1>
    </div>

    <section class="businessChild">
        <div class="wrap w1200 sp-wrap">
            <p class="businessChild__intro">
                石油・ガス・電力と、多彩なエネルギーをラインナップするシナネンホールディングスグループ。<br>
                各部門が連携し、お客様のニーズに即したサービスとソリューションをご提案するほか、海外事業、新規事業の創出にも積極的に取り組んでいます。
            </p>
        </div>

        <div class="businessChild__container">
            <div class="wrap w1200 sp-wrap">
                <div class="businessChild__wrapper pc-flex bet">
                    <div class="businessChildSide">
                        <ul class="pc businessChildSide__list js-stickyNav">
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#energy" class="businessChildSide__link current">
                                    再生可能エネルギー事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#electric" class="businessChildSide__link">
                                    電力事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#oil" class="businessChildSide__link">
                                    石油事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#solution" class="businessChildSide__link">
                                    ソリューション事業
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="businessChildMain">
                        <div class="js-stickyNav-target">
                            <div class="businessChildMain__item js-currentNav" id="energy">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        再生可能エネルギー事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btob_01.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    海外、国内での再生可能エネルギー事業に参入しています。<br>
                                    福島県岩瀬郡天栄村で太陽光発電所「天栄村ソーラーパーク」の所有や、新型マイクロ風車の開発・製造事業にも参入し、国内向けを中心に事業を展開していきます。今後もアジア各国での再生可能エネルギー 事業の案件開発を推進します。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        企画職の一例：国内外の再生可能エネルギー設備への投資をミッションとして、案件の発掘や設備開発、開発から仕入、販売を一気通貫で行います。最近では、non-Fit発電所を開発し電力の販売を進めています。自身が発掘した案件を、担うことができ、金融機関や行政の方とのやりとりも含めながら脱炭素社会の実現に向けて取り組んでいます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="electric">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        電力事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btob_02.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    小売電気事業者として、低価格の電力を安定的にお客様に供給しています。各企業様を始め、自治体や官公庁、学校など、多くのお客様に当社の電力をご利用いただいています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：高層ビルや工場、公共施設など、法人のお客様向けに電力切替やそれに伴うソリューションの提案を行っています。既存のお客様に対して電力販売の促進や新規開拓に取り組み、提案資料や御見積書の作成なども担います。価格競争が激しいため、メンバーで意見を出し合いながら、価格だけではない付加価値で選ばれる電力会社を目指しています。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="oil">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        石油事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btob_03.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    充実した供給・販売のネットワークを各地に整備し、全国の法人のお客様に、安定的に石油製品をお届けします。船舶やサービスステーションなど、高度な専門性が必要な分野においてもエネルギー販売の実績を積み重ねています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：燃料小売店を中心にガソリン、灯油、軽油、重油等の卸売り販売や、向上などに産業用の灯油や重油の直接的な販売を行い、エネルギーの安定供給を担います。日々変動する原油動向などの情報収集を行ったうえで仕入れ先に売買の交渉を行い、担当のお客様先へ赴いたり電話したりして営業活動に取り組みます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="solution">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        ソリューション事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btob_04.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    石油・LPガス・電気と多彩なエネルギーを取り揃えるシナネンホールディングスグループ。これからも私たちは、特定のエネルギーやメーカーにとらわれず、中立的な立場でお客様に最適なソリューションをご提供し事業発展と省エネや光熱費削減に取り組んでいきます。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：コスト、環境、省エネ、BCP対策等でお客様が抱く困りごとを解決します。ニーズの多様化が進む中で、期待以上のサービスを提供するために、お客様と密に関わり関係性を深め潜在的なニーズを発見することが重要です。お客様目線で自分なりの提案をし、課題解決に導きます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="businessChildMain__link">
                            <a href="<?php echo HOME; ?>business/" class="businessChildMain__btn md-btn red">
                                事業一覧へ
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="businessChildMain__entry">
                            <?php require_once $include . '_entry.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</article>
<?php
require_once $include . '_footer.php';
