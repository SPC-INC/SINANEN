<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'btoc', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="businessChildHead notos">
        <div class="businessChildHead__img">
            <img src="<?php echo HOME; ?>img/business_btoc_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/business_btoc_head_sp.png" alt="" class="sp">
        </div>
        <h1 class="businessChildHead__text flex vcenter js-in anime text-line-in">
            <div class="businessChildHead__text--inner js-in anime text-in wave3">
                BtoC事業<br class="sp">(エネルギー卸・小売周辺事業)
            </div>
        </h1>
    </div>

    <section class="businessChild">
        <div class="wrap w1200 sp-wrap">
            <p class="businessChild__intro">
                国内を「北海道」「東北」「関東」「中部以西」の4エリアに分け、各エリアで、LPガス・灯油などのエネルギーの販売、お客様に最適なリフォームなどの住まいのご提案、ハウスクリーニングなど、暮らしのサービスのご提供から、地域密着型でお客様の快適な生活に貢献します。
            </p>
        </div>

        <div class="businessChild__container">
            <div class="wrap w1200 sp-wrap">
                <div class="businessChild__wrapper pc-flex bet">
                    <div class="businessChildSide">
                        <ul class="pc businessChildSide__list js-stickyNav">
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#energy" class="businessChildSide__link current">
                                    エネルギーの事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#home" class="businessChildSide__link">
                                    住まいの事業
                                </a>
                            </li>
                            <li class="businessChildSide__item js-currentNav-item">
                                <a href="#life" class="businessChildSide__link">
                                    暮らしの事業
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="businessChildMain">
                        <div class="js-stickyNav-target">
                            <div class="businessChildMain__item js-currentNav" id="energy">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        エネルギーの事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btoc_01.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    LPガス・灯油・電気など様々なエネルギーの中から、お客様に最適な商品、サービスをお届けします。<br>
                                    エネルギーの安定供給や定期的な保安点検を通じ、お客様の快適な生活に貢献します。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：個人もしくは法人のお客様に対し、LPガスや電気の供給・販売、ガス関連商品や住宅設備の提案・販売などを行います。当社独自の点検である「ひまわり点検」などの中でお客様との信頼関係を構築しながら、お客様の困りごとに対応します。訪問するのは自分が担当するお客様なので、顔なじみのお客様のお役に立ち、直接「ありがとう」の言葉を頂くことができます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="home">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        住まいの事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btoc_02.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    光熱費やCO2排出量削減に効果のあるゼロエネルギー住宅や省エネリフォーム、高齢化に伴うバリアフリーリフォームなど、お客様の生活を豊かにするご提案をします。また、住宅設備の販売、レンタルやリースのご相談も承ります。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        営業職の一例：お客様との会話の中で困りごとを捉え、トイレやお風呂のような水回りのリフォームなどの適切なご提案を行うことで、お客様にさらに快適な生活を送っていただけるよう取り組みます。<br>
                                        お客様に寄り添うことを大切に、お客様目線で自分なりのご提案をしていただきます。
                                    </p>
                                </div>
                            </div>
                            <div class="businessChildMain__item js-currentNav" id="life">
                                <h2 class="businessChildMain__head notos anime__wrapper">
                                    <div class="js-in anime text-in">
                                        暮らしの事業
                                    </div>
                                </h2>
                                <p class="businessChildMain__img">
                                    <img src="<?php echo HOME; ?>img/business_btoc_03.png" alt="">
                                </p>
                                <p class="businessChildMain__text">
                                    少子高齢化や女性の社会進出などライフスタイルが変化するなかで、家事や暮らしに関する困りごとを解決します。<br>
                                    ハウスクリーニングなど、お客様が快適に、安心して暮らせるサービスをご提供します。
                                </p>
                                <div class="businessChildMain__job">
                                    <h3 class="businessChildMain__job--head js-acc">
                                        例えばこんな仕事
                                        <i class="icon icon-down"></i>
                                    </h3>
                                    <p class="businessChildMain__job--text">
                                        事務職（経営企画）の一例：DX推進の取り組みや、市場調査などのマーケティング活動及び分析など実施し営業の社員がスムーズに業務遂行できるよう環境整備を行います。また、広報活動による企業価値向上やイベントの企画・運営を通じて、お客様に寄り添える会社であり続けられるように取り組みます。
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
                                    <a href="https://www.melife-west.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_btob_group_01.png" alt="ミライフ西日本">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.melife.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_btob_group_02.png" alt="ミライフ">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://melife-east.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_btob_group_03.png" alt="ミライフ東日本">
                                    </a>
                                </li>
                                <li class="businessChildMain__group--item">
                                    <a href="https://www.ht-gas.co.jp/" target="_blank" class="businessChildMain__group--link flex vcenter hcenter op">
                                        <img src="<?php echo HOME; ?>img/business_btob_group_04.png" alt="日高都市ガス">
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
