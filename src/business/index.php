<?php
$include = '../include/'; // パーツ用パス
$home = '../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'business', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/business_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/business_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime left-in">Our Buisiness</span>
                <span class="pageHead__text--ja js-in anime left-in">事業紹介</span>
            </h1>
        </div>
    </div>

    <section class="business">
        <div class="wrap w1200 sp-wrap">
            <p class="business__intro">
                シナネンHDグループでは、BtoC事業・BtoB事業・非エネルギー事業と、大きく分けて３つの事業を展開しています。それぞれの角度から、「エネルギーと住まいと暮らしのサービスで、地域すべてのお客様の快適な生活に貢献する」ことを目指しています。既存の形にとらわれず、これからも、エネルギービジネスの枠を超えて発展し続けます。
            </p>
        </div>
        <div class="business__container">
            <div class="wrap w1200 sp-wrap">
                <div class="business__wrapper flex bet">
                    <div class="business__text flex vert pc-2">
                        <h2 class="business__head notos anime__wrapper">
                            <div class="js-in anime text-in">
                                BtoC事業<br>(エネルギー卸・小売周辺事業)
                            </div>
                        </h2>
                        <div class="sp business__img">
                            <img src="<?php echo HOME; ?>img/business_01.png" alt="">
                        </div>
                        <p class="business__desc">
                            エネルギーの販売やお客様に最適なリフォーム・住宅設備などの住まいのご提案、ハウスクリーニングなど、人々の暮らしに一番近くで関わる、BtoC事業の事業内容や詳しい仕事内容についてご紹介します。
                        </p>
                        <div class="business__more">
                            <a href="<?php echo HOME; ?>business/btoc/" class="business__btn md-btn red">
                                READ MORE
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="pc business__img pc-1">
                        <img src="<?php echo HOME; ?>img/business_01.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="business__container">
            <div class="wrap w1200 sp-wrap">
                <div class="business__wrapper flex bet">
                    <div class="business__text flex vert">
                        <h2 class="business__head notos anime__wrapper">
                            <div class="js-in anime text-in">
                                BtoB事業<br>(エネルギーソリューション事業)
                            </div>
                        </h2>
                        <div class="sp business__img">
                            <img src="<?php echo HOME; ?>img/business_02.png" alt="">
                        </div>
                        <p class="business__desc">
                            石油・ガス・電力に加え、地球環境に配慮した再生可能エネルギー事業など、お客様にあわせたサービスやソリューションをご提案する仕事について詳しくご紹介します。
                        </p>
                        <div class="business__more">
                            <a href="<?php echo HOME; ?>business/btob/" class="business__btn md-btn red">
                                READ MORE
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="pc business__img">
                        <img src="<?php echo HOME; ?>img/business_02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="business__container">
            <div class="wrap w1200 sp-wrap">
                <div class="business__wrapper flex bet">
                    <div class="business__text flex vert pc-2">
                        <h2 class="business__head notos anime__wrapper">
                            <div class="js-in anime text-in">
                                非エネルギー事業
                            </div>
                        </h2>
                        <div class="sp business__img">
                            <img src="<?php echo HOME; ?>img/business_03.png" alt="">
                        </div>
                        <p class="business__desc">
                            シェアサイクルサービスの運営、建物のメンテンナスや管理サービスの提供、廃棄物リサイクル燃料や原料の製造など、これまでの枠に囚われずに挑戦している事業やサービスについてご紹介します。
                        </p>
                        <div class="business__more">
                            <a href="<?php echo HOME; ?>business/other/" class="business__btn md-btn red">
                                READ MORE
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                                    <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                        <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                        <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="pc business__img pc-1">
                        <img src="<?php echo HOME; ?>img/business_03.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="businessFuture">
            <div class="wrap w1200 sp-wrap">
                <h2 class="businessFuture__head notos anime__wrapper">
                    <div class="js-in anime text-in">
                        シナネンが描く未来
                    </div>
                </h2>
                <div class="businessFuture__img">
                    <img src="<?php echo HOME; ?>img/business_future.png" alt="" class="pc">
                    <img src="<?php echo HOME; ?>img/business_future_sp.png" alt="" class="sp">
                </div>
                <p class="businessFuture__text">
                    Challenging New Worlds with Big Sky-thinking～大胆な発想で新しい世界への挑戦～をコンセプトに、私たちが目指す未来の姿を、「人々の生活」「働き方」「会社の在り方」の３つの視点からご紹介します。
                </p>
                <div class="businessFuture__more">
                    <a href="<?php echo HOME; ?>future/" class="businessFutures__btn md-btn red">
                        READ MORE
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class=" sp business__entry">
            <div class="wrap w1200 sp-wrap">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
