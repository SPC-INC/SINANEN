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
            <div class="aboutUs__container flex bet">
                <div class="aboutUs__text flex vert">
                    <h2 class="aboutUs__head notos">
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
                        <a href="<?php echo HOME; ?>aboutus/" class="aboutUs__btn md-btn">
                            READ MORE
                        </a>
                    </div>
                </div>
                <div class="pc aboutUs__img">
                    <img src="<?php echo HOME; ?>img/aboutus_01.png" alt="">
                </div>
            </div>
            <div class="aboutUs__container flex bet">
                <div class="aboutUs__text flex vert pc-2">
                    <h2 class="aboutUs__head notos">
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
                        <a href="<?php echo HOME; ?>aboutus/" class="aboutUs__btn md-btn">
                            READ MORE
                        </a>
                    </div>
                </div>
                <div class="pc aboutUs__img pc-1">
                    <img src="<?php echo HOME; ?>img/aboutus_02.png" alt="">
                </div>
            </div>
            <div class="aboutUs__container flex bet">
                <div class="aboutUs__text flex vert">
                    <h2 class="aboutUs__head notos">
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
                        <a href="<?php echo HOME; ?>aboutus/" class="aboutUs__btn md-btn">
                            READ MORE
                        </a>
                    </div>
                </div>
                <div class="pc aboutUs__img">
                    <img src="<?php echo HOME; ?>img/aboutus_03.png" alt="">
                </div>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
