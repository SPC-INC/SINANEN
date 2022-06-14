<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'other', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="businessChildHead notos">
        <div class="businessChildHead__img">
            <img src="<?php echo HOME; ?>img/business_other_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/business_other_head_sp.png" alt="" class="sp">
        </div>
        <h1 class="businessChildHead__text flex vcenter js-in anime text-line-in">
            <div class="businessChildHead__text--inner js-in anime text-in wave3">
                非エネルギー事業
            </div>
        </h1>
    </div>

    <section class="businessChild">
        <div class="wrap w1200 sp-wrap">
            <p class="businessChild__intro">
                お客様のビジネスや暮らしに幅広く貢献するため、エネルギー以外の分野にもビジネスフィールドを広げています。
            </p>
        </div>

        <div class="businessChild__container">
            <div class="wrap w1200 sp-wrap">
                <div class="businessChild__wrapper pc-flex bet">
                    <div class="businessChildSide">
                        <ul class="pc businessChildSide__list js-stickyNav">
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#bicycle" class="businessChildSide__link current">
                                    自転車事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#sharecycle" class="businessChildSide__link">
                                    シェアサイクル事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#ecology" class="businessChildSide__link">
                                    環境・リサイクル事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#antibacterial" class="businessChildSide__link">
                                    抗菌事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#system" class="businessChildSide__link">
                                    システム事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#building" class="businessChildSide__link">
                                    建物維持管理事業
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="businessChildMain">
                        <div class="js-stickyNav-target">
                            <div class="businessChildMain__item js-currentNav" id="bicycle">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        自転車事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_01.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    国内トップクラスの自転車輸入商社として、高品質かつ安価な自転車や、「DAHON」など海外有名ブランド自転車を輸入、販売しています。また、小売販売店「ダイシャリン」を全国に展開しています。<br>
                                    企画から輸入、販売、メンテナンスまで、幅広く手掛けています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容を見る
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：小売では、自転車専門店「ダイシャリン」の店舗でお客様と接しながらお客様のニーズに合った自転車選びのサポートをします。自転車の専門知識を持っていなくても、働きながら自然と身につく態勢が整っています。卸売では全国の自転車を扱う法人向けに製造や販売を行います。自転車の仕様やデザイン等をお客様と商談しながら１から作り上げていきます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="sharecycle">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        シェアサイクル事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_02.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    次世代のモビリティ社会に貢献すべく、国内トップクラスのシェアサイクル事業者として、人々のラストワンマイルの移動手段を提供しています。また、安心・安全に利用していただくために定期的なアフターメンテナンスも実施しています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容を見る
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：シェアーを置くステーション多く場所を開拓するために、候補地の選定や現地調査を行い、地主の方や自治体への営業活動や開設を行います。開設後のアフターフォローやステーション広告提案なども営業の業務です。顧客の課題に合わせて提案する力やニーズを引き出すコミュニケーション能力、データを活用した戦略的な営業活動を実施していきます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="ecology">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        環境・リサイクル事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_03.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    廃木材（木くず）のリサイクルにより得られる木質チップを中心とした廃棄物リサイクル燃料および原料の安定供給、その他各種産業廃棄物の処理・リサイクルのご提案により、循環型社会の実現に貢献しています。<br>
                                    当社で生産している木質バイオマス燃料を、主に製紙会社やバイオマス発電事業者へ販売する。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容を見る
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：関東圏の工事現場、物流倉庫等の排出事業者に木くずを中心とした廃棄物の排出状況をヒアリングし、当社工場や業務提携先工場での適切な処理、リサイクル方法を提案します。また、化学メーカーやバイオマス発電事業者等に対して、当社で生産している木質バイオマス燃料を、主に製紙会社やバイオマス発電事業者へ販売します。地球環境の保護へ直接的に貢献出来ることが魅力です。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="antibacterial">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        抗菌事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_04.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    世界で初めて無機抗菌剤の製品化に成功し、以来、無機抗菌剤のパイオニアとして、優れた抗菌効果と高い安全性を有する抗菌剤を樹脂、繊維、塗料等の幅広い用途へ提供しています。海外認可にも対応しており、東南アジア、欧米等の海外市場でも採用が拡大しています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容を見る
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        研究開発職の一例：製品（抗菌剤、吸着剤等）の改良開発<br>
                                        や、無機系化合物を中心とした新規材料開発などを行います。入社後3~4年は、先輩の研究や分析業務のサポートをしながら、仕事の一連の流れや技術、設備の使い方を習得します。抗菌の「機能」、ゼオライトという「材料」の2点で他社とは一線を画す強みを活かし、無機系化合物を中心とした新規材料開発に特に注力していきます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="system">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        システム事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_05.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    1976年の創業以来、LPガス事業の基幹業務システムを提供してきました。2013年にはクラウドサービス「PowerNetG4」をスタートし、2016年からは電力自由化に対応する新たな機能として「電力CIS」を提供しています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容を見る
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        開発職の一例：エネルギーインフラ事業者向けのクラウド型基幹システムにおける企画・要件定義・設計・製造・テスト・保守運用を行い上流から下流工程まで幅広い開発フェーズに携わっていただきます。自社サービスの最上流で、アイデアを存分に発揮最新のクラウドサービスで自らのアイデアを活かせるのは、最上流から手がけられる自社サービスならではの魅力です。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="building">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        建物維持管理事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_06.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    建物の維持・管理・運営から清掃、各種工事、資材供給、エネルギー関連サービスに至る幅広いサービスを展開しています。その事業領域は幅広く、集合住宅の原状回復工事や共有部の定期清掃、ハウスクリーニングなど清掃業務全般を通じて、お客様の暮らしに快適をお届けするサービスを提供しています。また、ビル・施設管理、病院運営サポート、斎場関連事業等のファシリティマネジメントとして拡大を続けています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        仕事内容を見る
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        施行管理職の一例：アパート・マンションのような集合住宅のハウスクリーニングや洗面台交換等部分的な工事、協力会社への業務依頼や依頼した業務が正しく行われているかの確認などを行います。入社後は2年間は現場経験を積みながら、短期的なジョブローテーションで事務や営業も経験し、建物を維持するための全体感を捉えます。生活を豊かにするうえで欠かせない「住まい」を総合的に支えます。
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
