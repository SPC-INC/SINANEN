<?php
$arrInterview = array(
    '01' => array(
        'copy' => 'キャッチコピー（仮）テキストテキストテキストテキストテキスト',
        'pos' => '部署（所属）',
        'name' => '0000年入社　●● ●●',
    ),
    '02' => array(
        'copy' => 'キャッチコピー（仮）',
        'pos' => '部署（所属）',
        'name' => '0000年入社　●● ●●',
    ),
    '03' => array(
        'copy' => 'キャッチコピー（仮）テキストテキストテキストテキストテキスト',
        'pos' => '部署（所属）',
        'name' => '0000年入社　●● ●●',
    ),
    '04' => array(
        'copy' => 'キャッチコピー（仮）テキストテキストテキストテキストテキスト',
        'pos' => '部署（所属）',
        'name' => '0000年入社　●● ●●',
    ),
);
?>
<div class="<?php if (IS_PAGE !== 'person') {
    echo 'pc';
} ?> interviewList pc-flex hcenter js-in anime left-in">
<?php
foreach ($arrInterview as $key =>  $val) {
    ?>
    <a href="<?php echo HOME; ?>person/interview<?php echo $key; ?>/" class="interviewItem interviewItem--<?php echo $key; ?> sp-flex">
        <div class="interviewItem__img">
            <img src="<?php echo HOME ?>img/interview_list_<?php echo $key; ?>.png" alt="" class="pc">
            <img src="<?php echo HOME ?>img/interview_list_<?php echo $key; ?>_sp.png" alt="" class="sp">
        </div>
        <div class="interviewItem__text bgbottom">
            <div class="interviewItem__text--bg sp-flex vert bet">
                <div class="interviewItem__text--ttl notos">
                    <?php echo $val['copy']; ?>
                </div>
                <div class="interviewItem__text--positon">
                    <?php echo $val['pos']; ?><br>
                    <span class="join"><?php echo $val['name']; ?></span>
                </div>
            </div>
        </div>
    </a>
<?php
} ?>
</div>

<?php if (IS_PAGE !== 'person') { ?>
<div class="sp interviewSlide flex bet js-in anime left-in js-inteviewList-slide swiper-container">
    <div class="swiper-wrapper">
<?php
foreach ($arrInterview as $key =>  $val) {
        ?>
    <a class="interviewItem swiper-slide">
        <div class="interviewItem__img">
            <img src="<?php echo HOME ?>img/interview_list_<?php echo $key; ?>.png" alt="">
        </div>
        <div class="interviewItem__text bgbottom">
            <div class="interviewItem__text--bg sp-flex vert bet">
                <div class="interviewItem__text--ttl notos">
                    <?php echo $val['copy']; ?>
                </div>
                <div class="interviewItem__text--positon">
                    <?php echo $val['pos']; ?><br>
                    <span class="join"><?php echo $val['name']; ?></span>
                </div>
            </div>
        </div>
    </a>
<?php
    } ?>
    </div>
    <div class="interviewSlide__btn interviewSlide__btn--prev js-inteviewList-prev swiper-button-prev">
        <svg id="コンポーネント_14_1" data-name="コンポーネント 14 – 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" class="icon">
            <circle id="楕円形_14" data-name="楕円形 14" cx="26.5" cy="26.5" r="26.5" fill="#1a1a1a" />
            <g id="left-arrow" transform="translate(-81.48 16)">
                <g id="グループ_727" data-name="グループ 727" transform="translate(101.48 0)">
                    <path id="パス_696" data-name="パス 696" d="M105.624,10.5l7.854-7.854a1.151,1.151,0,0,0,0-1.624L112.79.336a1.15,1.15,0,0,0-1.624,0l-9.351,9.351a1.159,1.159,0,0,0,0,1.63l9.342,9.342a1.15,1.15,0,0,0,1.624,0l.688-.688a1.15,1.15,0,0,0,0-1.624Z" transform="translate(-101.48 0)" fill="#fff" />
                </g>
            </g>
        </svg>
    </div>
    <div class="interviewSlide__btn interviewSlide__btn--next js-inteviewList-next swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" class="icon icon-next">
            <g id="コンポーネント_14_2" data-name="コンポーネント 14 – 2" transform="translate(53 53) rotate(180)">
                <circle id="楕円形_14" data-name="楕円形 14" cx="26.5" cy="26.5" r="26.5" fill="#1a1a1a" />
                <g id="left-arrow" transform="translate(-81.48 16)">
                    <g id="グループ_727" data-name="グループ 727" transform="translate(101.48 0)">
                        <path id="パス_696" data-name="パス 696" d="M105.624,10.5l7.854-7.854a1.151,1.151,0,0,0,0-1.624L112.79.336a1.15,1.15,0,0,0-1.624,0l-9.351,9.351a1.159,1.159,0,0,0,0,1.63l9.342,9.342a1.15,1.15,0,0,0,1.624,0l.688-.688a1.15,1.15,0,0,0,0-1.624Z" transform="translate(-101.48 0)" fill="#fff" />
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>
<?php } ?>
