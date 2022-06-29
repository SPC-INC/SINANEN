<?php
$include = '../include/'; // パーツ用パス
$home = '../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'recruit', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/recruit_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/recruit_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">Recruit</span>
                <span class="pageHead__text--ja js-in anime text-in">採用情報</span>
            </h1>
        </div>
    </div>

    <section class="recruit">
        <div class="wrap w1200 sp-wrap">
            <h2 class="recruit__head">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        採用情報一覧
                    </div>
                    <div class="sp js-in anime left-in">
                        採用情報一覧
                    </div>
                </div>
            </h2>
            <div class="recruit__nav">
                <?php require_once $include . '_recruit.php'; ?>
            </div>
            <div class="pc recruit__entry">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
