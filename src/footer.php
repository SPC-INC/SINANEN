<footer id="footer" class="footer" itemscope itemtype="http://schema.org/WPFooter">
    <div class="w1200 wrap sp-wrap">
        <div class="footerLinkWrap flex bet sp-break">
            <ul class="footerLink__list flex vert noto">
                <p class="footerLink__list--title">会社紹介</p>
                <a href="" class="footerLink__list--item">社長メッセージ</a>
                <a href="" class="footerLink__list--item">テキストテキスト</a>
                <a href="" class="footerLink__list--item">テキストテキスト</a>
                <a href="" class="footerLink__list--item">SDGsへの貢献</a>
            </ul>
            <ul class="footerLink__list flex vert noto">
                <p class="footerLink__list--title">事業紹介</p>
                <a href="" class="footerLink__list--item">エネルギー卸・小売り周辺事業</a>
                <a href="" class="footerLink__list--item">エネルギーソリューション事業</a>
                <a href="" class="footerLink__list--item">非エネルギー・海外事業</a>
                <a href="" class="footerLink__list--item">シナネンが描く未来</a>
            </ul>
            <ul class="footerLink__list flex vert noto">
                <p class="footerLink__list--title">インタビュー</p>
                <a href="" class="footerLink__list--item">テキストテキストテキスト</a>
                <a href="" class="footerLink__list--item">テキストテキストテキスト</a>
                <a href="" class="footerLink__list--item">テキストテキストテキスト</a>
                <a href="" class="footerLink__list--item">テキストテキストテキスト</a>
            </ul>
            <ul class="footerLink__list flex vert noto">
                <p class="footerLink__list--title">クロストーク</p>
                <a href="" class="footerLink__list--item">トークテーマが入ります</a>
                <a href="" class="footerLink__list--item">トークテーマが入ります</a>
                <a href="" class="footerLink__list--item">トークテーマが入ります</a>
            </ul>
            <ul class="footerLink__list flex vert noto">
                <p class="footerLink__list--title">採用情報</p>
                <a href="" class="footerLink__list--item">募集要項</a>
                <a href="" class="footerLink__list--item">求める人物像</a>
                <a href="" class="footerLink__list--item">採用フロー</a>
                <a href="" class="footerLink__list--item">働く環境</a>
                <a href="" class="footerLink__list--item">よくある質問</a>
            </ul>
        </div>
        <div class="footer__logo">
            <img src="<?php echo T_URL ?>img/footer_logo.svg" alt="">
        </div>
</footer>
<script>
    {
        var tUrl = '<?php echo T_URL; ?>'
    }
</script>
<input id="href" type="hidden" value="<?php echo T_URL; ?>" name="href">
<script src="//polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="<?php echo T_URL; ?>js/lib.min.js?<?php echo filemtime(T_PATH . 'js/lib.min.js'); ?>"></script>
<script src="<?php echo T_URL; ?>js/main.min.js?<?php echo filemtime(T_PATH . 'js/main.min.js'); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>
