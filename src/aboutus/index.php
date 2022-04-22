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
                <span class="pageHead__text--en">About Us</span>
                <span class="pageHead__text--ja">会社紹介</span>
            </h1>
        </div>
    </div>

    <section class="aboutUs">
        <div class="wrap w1200 sp-wrap">
            <div class="aboutUs__container flex bet js-in anime bottom-in">
                <div class="aboutUs__text flex vert">
                    <h2 class="aboutUs__head notos js-in anime left-in">
                        社長メッセージ
                    </h2>
                    <div class="sp aboutUs__img">
                        <img src="<?php echo HOME; ?>img/aboutus_01.png" alt="">
                    </div>
                    <p class="aboutUs__desc">
                        新入社員の皆さんからこらからのシナネンHDグループについてや、<br>
                        社長に聞いてみたいことをインタビューしてもらいました。
                    </p>
                    <div class="aboutUs__more">
                        <a href="<?php echo HOME; ?>aboutus/" class="aboutUs__btn md-btn red">
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
            <div class="aboutUs__container flex bet js-in anime bottom-in">
                <div class="aboutUs__text flex vert pc-2">
                    <h2 class="aboutUs__head notos js-in anime left-in">
                        シナネンHDグループの挑戦と進化
                    </h2>
                    <div class="sp aboutUs__img">
                        <img src="<?php echo HOME; ?>img/aboutus_02.png" alt="">
                    </div>
                    <p class="aboutUs__desc">
                        新入社員の皆さんからこらからのシナネンHDグループについてや、<br>
                        社長に聞いてみたいことをインタビューしてもらいました。
                    </p>
                    <div class="aboutUs__more">
                        <a href="<?php echo HOME; ?>aboutus/" class="aboutUs__btn md-btn red">
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
            <div class="aboutUs__container flex bet js-in anime bottom-in">
                <div class="aboutUs__text flex vert">
                    <h2 class="aboutUs__head notos js-in anime left-in">
                        SDGsへの貢献
                    </h2>
                    <div class="sp aboutUs__img">
                        <img src="<?php echo HOME; ?>img/aboutus_03.png" alt="">
                    </div>
                    <p class="aboutUs__desc">
                        新入社員の皆さんからこらからのシナネンHDグループについてや、<br>
                        社長に聞いてみたいことをインタビューしてもらいました。
                    </p>
                    <div class="aboutUs__more">
                        <a href="<?php echo HOME; ?>aboutus/" class="aboutUs__btn md-btn red">
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
