<?php
$arrInterview = array(
    '01' => array(
        'copy' => '人と社会を支えるインフラをチームで守り続けるという使命感',
        'pos' => 'BtoC事業<br>営業',
        'name' => '2014年入社<br>S.Takahashi',
    ),
    '02' => array(
        'copy' => '「自転車で社会を変える」事業ステージは、街づくりの観点へ',
        'pos' => '非エネルギー事業<br>営業',
        'name' => '2016年入社<br>K.Kasamatsu',
    ),
    '03' => array(
        'copy' => '建物維持管理事業の未来を創り、守り、そして広める',
        'pos' => '非エネルギー事業<br>施工管理',
        'name' => '2019年入社<br>K.Yanagihara',
    ),
    '04' => array(
        'copy' => 'エシカル消費を推進する再生可能エネルギーの可能性',
        'pos' => 'BtoB事業<br>管理',
        'name' => '2017年入社<br>S.Kanno',
    ),
);
?>
<ul class="<?php if (IS_PAGE !== 'person') {
    echo 'pc';
} ?> interviewList pc-flex hcenter">
<?php
$num = 1;
foreach ($arrInterview as $key =>  $val) {
    if (IS_PAGE !== 'interview'.$key) {
        ?>
    <li class="interviewItem interviewItem--<?php echo $key; ?>">
        <a href="<?php echo HOME; ?>person/interview<?php echo $key; ?>/" class="interviewItem__link sp-flex js-in anime bottom-in wave<?php echo $num; ?>">
            <div class="interviewItem__img">
                <img src="<?php echo HOME ?>img/interview_list_<?php echo $key; ?>.png" alt="" class="pc">
                <img src="<?php echo HOME ?>img/interview_list_<?php echo $key; ?>_sp.png" alt="" class="sp">
            </div>
            <div class="interviewItem__text bgbottom">
                <div class="interviewItem__text--bg sp-flex vert bet">
                    <div class="interviewItem__text--ttl js-t8 line2">
                        <?php echo $val['copy']; ?>
                    </div>
                    <div class="interviewItem__text--positon">
                        <?php echo $val['pos']; ?><br>
                        <span class="join"><?php echo $val['name']; ?></span>
                    </div>
                </div>
            </div>
        </a>
    </li>
<?php
    }
    $num++;
} ?>
</ul>

<?php if (IS_PAGE !== 'person') { ?>
<div class="sp interviewSlide flex bet js-in anime left-in js-inteviewList-slide swiper-container">
    <ul class="swiper-wrapper">
<?php
foreach ($arrInterview as $key =>  $val) {
    ?>
    <li class="interviewItem interviewItem--<?php echo $key; ?> swiper-slide">
        <a href="<?php echo HOME; ?>person/interview<?php echo $key; ?>/" class="interviewItem__link">
            <div class="interviewItem__img">
                <img src="<?php echo HOME ?>img/interview_list_<?php echo $key; ?>.png" alt="">
            </div>
            <div class="interviewItem__text bgbottom">
                <div class="interviewItem__text--bg sp-flex vert bet">
                    <div class="interviewItem__text--ttl notos js-t8 line2">
                        <?php echo $val['copy']; ?>
                    </div>
                    <div class="interviewItem__text--positon">
                        <?php echo $val['pos']; ?><br>
                        <span class="join"><?php echo $val['name']; ?></span>
                    </div>
                </div>
            </div>
        </a>
    </li>
<?php
} ?>
    </ul>
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
