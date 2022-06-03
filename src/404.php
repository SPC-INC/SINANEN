<?php
$include = './include/'; // パーツ用パス
$home = './'; // サイトルートパス
$page = array( // ページデータ
    'flag' => '404', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/error_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/error_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">404</span>
                <span class="pageHead__text--ja js-in anime text-in">404 Not Found</span>
            </h1>
        </div>
    </div>

    <section class="error">
        <div class="wrap w1200 sp-wrap">
            <h2 class="error__head">
                ページが見つかりません
            </h2>
            <p class="error__text">
                お探しのページが削除されたか、<br class="sp">URLが間違っている可能性がございます。<br>
                ご不便をおかけしますが、<br class="sp">URLをご確認いただくか、<br class="sp">TOPページにお戻りください。
            </p>
            <div class="error__more">
                <a href="<?php echo HOME; ?>" class="error__btn md-btn red left-text">
                    TOPページに戻る
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                        <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                            <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                            <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
