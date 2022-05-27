<?php
$include = '../include/'; // パーツ用パス
$home = '../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'aboutus', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/aboutus_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/aboutus_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">About Us</span>
                <span class="pageHead__text--ja js-in anime text-in">会社紹介</span>
            </h1>
        </div>
    </div>

    <section class="aboutUs">
        <div class="wrap w1200 sp-wrap">
            <div class="aboutUs__container flex bet">
                <div class="aboutUs__text flex vert">
                    <h2 class="aboutUs__head notos anime__wrapper">
                        <div class="js-in anime text-in">
                            社長メッセージ
                        </div>
                    </h2>
                    <div class="sp aboutUs__img">
                        <img src="<?php echo HOME; ?>img/aboutus_01.png" alt="">
                    </div>
                    <p class="aboutUs__desc">
                        若手社員が、社長の描くシナネンHDグループの未来や、<br>今、社長に聞いてみたいことをインタビューしました。
                    </p>
                    <div class="aboutUs__more">
                        <a href="<?php echo HOME; ?>aboutus/topmessage/" class="aboutUs__btn md-btn red">
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
                <div class="pc aboutUs__img">
                    <img src="<?php echo HOME; ?>img/aboutus_01.png" alt="">
                </div>
            </div>
            <div class="aboutUs__container flex bet">
                <div class="aboutUs__text flex vert pc-2">
                    <h2 class="aboutUs__head notos anime__wrapper">
                        <div class="js-in anime text-in">
                            シナネンHDグループの挑戦と進化
                        </div>
                    </h2>
                    <div class="sp aboutUs__img">
                        <img src="<?php echo HOME; ?>img/aboutus_02.png" alt="">
                    </div>
                    <p class="aboutUs__desc">
                        1927年の創業以来、時代に寄り添い様々なサービスを展開してきたシナネンHDグループの、<br>挑戦と進化の歴史をご紹介します。
                    </p>
                    <div class="aboutUs__more">
                        <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="aboutUs__btn md-btn red">
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
                <div class="pc aboutUs__img pc-1">
                    <img src="<?php echo HOME; ?>img/aboutus_02.png" alt="">
                </div>
            </div>
            <div class="aboutUs__container flex bet">
                <div class="aboutUs__text flex vert">
                    <h2 class="aboutUs__head notos anime__wrapper">
                        <div class="js-in anime text-in">
                            SDGsへの貢献
                        </div>
                    </h2>
                    <div class="sp aboutUs__img">
                        <img src="<?php echo HOME; ?>img/aboutus_03.png" alt="">
                    </div>
                    <p class="aboutUs__desc">
                        シナネンHDグループが、SDGs達成に向け一丸となって取り組む活動をご紹介します。
                    </p>
                    <div class="aboutUs__more">
                        <a href="<?php echo HOME; ?>aboutus/SDGs/" class="aboutUs__btn md-btn red">
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
                <div class="pc aboutUs__img">
                    <img src="<?php echo HOME; ?>img/aboutus_03.png" alt="">
                </div>
            </div>
            <div class="aboutUs__entry">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
