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
            <div class="pc businessChildHead__text--inner js-in anime text-in wave3">
                非エネルギー事業
            </div>
            <div class="sp businessChildHead__text--inner js-in anime left-in wave3">
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
                                    <div class="pc js-in anime text-in">
                                        自転車事業（シナネンサイクル株式会社）
                                    </div>
                                    <div class="sp js-in anime left-in">
                                        自転車事業（シナネンサイクル株式会社）
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_01.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    国内トップクラスの自転車輸入商社として、高品質な自転車や、「DAHON」など海外有名ブランド自転車を輸入、販売しています。また、小売販売店「ダイシャリン」を東北・関東中心に37店舗（2022年5月末）展開しています。<br>
                                    企画から輸入、販売、メンテナンスまで、幅広く手掛けています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：小売では、自転車専門店「ダイシャリン」の店舗でお客様と接しながらお客様のニーズに合った自転車選びのサポートをします。自転車の専門知識を持っていなくても、働きながら自然と身につく態勢が整っています。卸売では全国の自転車を扱う法人向けに製造や販売を行います。自転車の仕様やデザイン等をお客様と商談しながら１から作り上げていきます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="sharecycle">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="pc js-in anime text-in">
                                        シェアサイクル事業<span class="businessChildMain__head--note">（シナネンモビリティPLUS株式会社）</span>
                                    </div>
                                    <div class="sp js-in anime left-in">
                                        シェアサイクル事業<span class="businessChildMain__head--note">（シナネンモビリティPLUS株式会社）</span>
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
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：お客様にとって利便性が高いステーション開拓のために、日々自治体や民間企業などへ営業活動に取り組みます。<br>
                                        候補地選定や現地調査、ステーション設置後のアフターフォローなども営業の仕事です。<br>
                                        顧客のニーズや課題を引き出し提案する力や、データを活用した戦略的な営業活動を実施する力が養われます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="ecology">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="pc js-in anime text-in">
                                        環境・リサイクル事業（シナネンエコワーク株式会社）
                                    </div>
                                    <div class="sp js-in anime left-in">
                                        環境・リサイクル事業（シナネンエコワーク株式会社）
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_03.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    廃木材（木くず）を破砕処理し、燃料用や原材料用の木質チップに再資源化する事業を展開しています。<br>
                                    リサイクルのご提案を通じて、循環型社会の実現に貢献しています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：関東圏の解体事業者、メーカー・物流会社等の排出事業者に対し木くずを中心とした<br>
                                        産業廃棄物の排出状況をヒアリングし、当社工場や業務提携先工場での適切な処理・リサイクル方法を提案します。<br>
                                        また、当社で生産している木質チップをバイオマス燃料として主に製紙会社やバイオマス発電事業者へ、あるいはボード原料として建材メーカーへ販売しています。地球環境保護に貢献する事業へ携われる事が魅力です。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="antibacterial">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="pc js-in anime text-in">
                                        抗菌事業（株式会社シナネンゼオミック）
                                    </div>
                                    <div class="sp js-in anime left-in">
                                        抗菌事業（株式会社シナネンゼオミック）
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_04.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    世界で初めて銀系無機抗菌剤の製品化に成功し、以来、銀系無機抗菌剤のパイオニアとして、優れた抗菌効果と高い安全性を有する抗菌剤を樹脂、繊維、塗料等の幅広い用途へ提供しています。海外認可にも対応しており、東南アジア、欧米等の海外市場でも採用が拡大しています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        研究開発職の一例：製品（抗菌剤、吸着剤等）の改良開発や、無機系化合物を中心とした新規材料開発などを行います。入社後3~4年は、先輩の研究や分析業務のサポートをしながら、仕事の一連の流れや技術、設備の使い方を習得します。抗菌の「機能」、ゼオライトという「材料」の2点で他社とは一線を画す強みを活かし、無機系化合物を中心とした新規材料開発に特に注力していきます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="system">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="pc js-in anime text-in">
                                        システム事業（株式会社ミノス）
                                    </div>
                                    <div class="sp js-in anime left-in">
                                        システム事業（株式会社ミノス）
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_other_05.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    1976年以来、LPガス事業の基幹業務システムを提供してきました。2013年にはクラウドサービス「PowerNetG4」をスタートし、2016年からは電力自由化に対応する新たな機能として「電力CIS」を提供しています。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        開発職の一例：エネルギーインフラ事業者向けのクラウド型基幹システムにおける企画・要件定義・設計・製造・テスト・保守運用を行い上流から下流工程まで幅広い開発フェーズに携わっていただきます。最新のクラウドサービスで自らのアイデアを活かせるのは、最上流から手がけられる自社サービスならではの魅力です。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="building">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="pc js-in anime text-in">
                                        建物維持管理事業<span class="businessChildMain__head--note">（タカラビルメン株式会社、株式会社インデス、シナネンファシリティーズ株式会社）</span>
                                    </div>
                                    <div class="sp js-in anime left-in">
                                        建物維持管理事業<span class="businessChildMain__head--note">（タカラビルメン株式会社、株式会社インデス、シナネンファシリティーズ株式会社）</span>
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
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        施行管理職の一例：アパート・マンションのような集合住宅のハウスクリーニングや洗面台交換等部分的な工事、協力会社への業務依頼や依頼した業務が正しく行われているかの確認などを行います。入社後は2年間は現場経験を積みながら、短期的なジョブローテーションで事務や営業も経験し、建物を維持するための全体感を捉えます。生活を豊かにするうえで欠かせない「住まい」を総合的に支えます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="businessChildMain__group">
                            <h2 class="businessChildMain__group--head">
                                展開しているグループ会社
                            </h2>
                            <ul class="businessChildMain__group--list flex break">
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.sinanen-cycle.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_01.png" alt="シナネンサイクル">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.sinanen-mplus.com/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_02.png" alt="モビリティPLUS">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://sinanenecowork.com/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_03.png" alt="シナネンエコワーク">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.zeomic.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_04.png" alt="ゼオミック">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.minos.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_05.png" alt="ミノス">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.takara-gr.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_06.png" alt="タカラ">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.indess.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_07.png" alt="インデス">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.sinanen-f.com/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_other_group_08.png" alt="ファシリティーズ">
                                    </a>
                                </li>
                            </ul>
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
