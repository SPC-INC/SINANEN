<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'challenge-evolution', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/challengeEvolution_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/challengeEvolution_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime left-in">Challenge</span>
                <span class="pageHead__text--ja js-in anime left-in">シナネンHDグループの挑戦と進化</span>
            </h1>
        </div>
    </div>

    <div class="challengeEvolution">
<?php
/*
    #### ##    ## ######## ########   #######
     ##  ###   ##    ##    ##     ## ##     ##
     ##  ####  ##    ##    ##     ## ##     ##
     ##  ## ## ##    ##    ########  ##     ##
     ##  ##  ####    ##    ##   ##   ##     ##
     ##  ##   ###    ##    ##    ##  ##     ##
    #### ##    ##    ##    ##     ##  #######
*/
?>
        <section class="challengeEvolutionIntro">
            <div class="wrap w1200 sp-wrap">
                <div class="challengeEvolutionIntro__img">
                    <img src="<?php echo HOME; ?>img/challengeEvolution_intro.png" alt="">
                </div>
                <p class="challengeEvolutionIntro__text">
                    1927年の創業以来、エネルギーや社会の変化とともに進化してきたシナネンHDグループ。私たちの挑戦と進化の歴史をご紹介します。そしてこれからも、環境問題や人権問題、多様化する生活様式など、様々な課題を抱える社会の中で、快適で豊かな暮らしのために挑戦し続けます。
                </p>
            </div>
        </section>

<?php
/*
     ######   ########   #######  ##     ## ########
    ##    ##  ##     ## ##     ## ##     ## ##     ##
    ##        ##     ## ##     ## ##     ## ##     ##
    ##   #### ########  ##     ## ##     ## ########
    ##    ##  ##   ##   ##     ## ##     ## ##
    ##    ##  ##    ##  ##     ## ##     ## ##
     ######   ##     ##  #######   #######  ##
*/
?>
        <section class="challengeEvolutionSec challengeEvolutionGroup">
            <div class="wrap w1200 sp-wrap">
                <h2 class="challengeEvolutionSec__head notos js-in anime left-in">
                    これからのシナネンHDグループ
                </h2>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet">
                    <div class="challengeEvolutionGroup__text">
                        <h3 class="challengeEvolutionGroup__head notos">
                            風土改革
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                            </span>
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            創業100周年に向けた定性目標の一つとして「社員の考え方・慣習・行動様式の変革」を掲げています。<br>
                            風土改革と働き方改革の本質には、「個を高め、活かし合う」という考え方があります。「個を高め」とは、Employabilityを意識し、個としての価値や雇用される能力を高めていくことを、「活かし合う」は、個を尊重し、認め合い、強みを活かし合うこと（D&I）を意味しています。<br>
                            組織ビジョンを「Spiral Up Company～情熱とワクワクのエネルギー好循環組織～」として、従業員の声や意思を尊重し、経営層とディスカッションを重ねながら、これらの改革を推進しています。
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet">
                    <div class="challengeEvolutionGroup__text pc-2">
                        <h3 class="challengeEvolutionGroup__head notos">
                            グループコンテスト
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                            </span>
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            受賞者の努力や成果等を評価し仕事への意欲を高めること、社員に対して優秀事例等を配信し競争意識の醸成することを目的に年に1度実施しています。<br>
                            表彰部門には、成果や取り組みが評価される社長賞や、若手社員を対象にした「ルーキー部門」、新しい取り組みへの挑戦を評価する「チャレンジ部門」など様々で、若手社員の受賞事例も多くあります。<br>
                            表彰式では、受賞者が一堂に会し、グループシナジーの向上にも繋がるイベントとなっています。
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img pc-1">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_02.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet">
                    <div class="challengeEvolutionGroup__text">
                        <h3 class="challengeEvolutionGroup__head notos">
                            SDGs達成へ
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                            </span>
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            シナネンHDグループでは、バリュー（価値観）である「信義・進取・楽業」の考えに則り、地域に密着した総合エネルギーサービス企業として、「SDGs」実現に向けた取り組みを行っています。エネルギーを主力商品として扱う企業グループだからこそ、この取り組みに注力し、地球課題の解決、そしてSDGsの達成に貢献します。
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_03.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet">
                    <div class="challengeEvolutionGroup__text pc-2">
                        <h3 class="challengeEvolutionGroup__head notos">
                            本社移転
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                            </span>
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            当社は、創業当時に煉炭・豆炭の製造・販売をしていた祖業の地である東品川（東京都品川区）に、2024年の夏に本社を移転します。保有資産である土地を有効活用するため、2027年の創業100周年に向け祖業の地への回帰を決めました。<br>
                            2021年に新本社ビル建設向けたプロジェクトを立ち上げ、20～30代の若手社員を中心に幅広い年代の社員が会社や部門を越えてプロジェクトメンバーとして有志で参画しています。ワークショップを重ねて、新しいオフィスで実現したい行動やコミュニケーションについて意見を出し合い、オフィスのコンセプト設計から検討を進めています。
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img pc-1">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_04.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </section>

<?php
/*
    ##     ## ####  ######  ########  #######  ########  ##    ##
    ##     ##  ##  ##    ##    ##    ##     ## ##     ##  ##  ##
    ##     ##  ##  ##          ##    ##     ## ##     ##   ####
    #########  ##   ######     ##    ##     ## ########     ##
    ##     ##  ##        ##    ##    ##     ## ##   ##      ##
    ##     ##  ##  ##    ##    ##    ##     ## ##    ##     ##
    ##     ## ####  ######     ##     #######  ##     ##    ##
*/
?>
        <section class="challengeEvolutionSec challengeEvolutionHistory">
            <div class="wrap w1200 sp-wrap">
                <h2 class="challengeEvolutionSec__head notos js-in anime left-in">
                    これまでのシナネンHDグループ
                </h2>
                <div class="challengeEvolutionHistory__container flex bet">
                    <div class="challengeEvolutionHistory__timeline flex vert vcenter">
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>20
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>30
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>40
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>50
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>60
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>70
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>80
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">19</span>90
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">20</span>00
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter">
                            <span class="small">20</span>10
                        </div>
                    </div>
                    <div class="challengeEvolutionHistory__node challengeEvolutionHistory__company flex vert vend">
                        <div class="challengeEvolutionHistory__node--head flex vcenter hcenter">
                            シナネンの歩み
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 6.3rem;">
                            1927年4月　創業
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 3.2rem;">
                            1934年4月　<br>
                            豆炭の製造販売・豆炭燃焼器具販売を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 7.6rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_company_01.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 6rem;">
                            1952年9月　<br>
                            石油製品、同器具の販売を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 3.5rem;">
                            1955年4月　<br>
                            LPガス・同器具の取り扱い開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 3.5rem;">
                            1959年9月　<br>
                            品川あんか発売
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 3.3rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_company_02.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 6.3rem;">
                            1984年<br>
                            新規事業として抗菌事業をスタート
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 10.5rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 11rem;">
                            テキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 10.3rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </div>
                    <div class="challengeEvolutionHistory__node challengeEvolutionHistory__industry flex vert vstart">
                        <div class="challengeEvolutionHistory__node--head flex vcenter hcenter">
                            エネルギー産業のうごき
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 3.7rem;">
                            薪炭から石炭へエネルギーの主力が移り変わり<br>
                            1920年に石炭の割合が過去最高に
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 11.1rem;">
                            ガス事業の普及拡大<br>
                            多くのガス事業者が誕生した
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 3.1rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_01.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 3.5rem;">
                            第二次世界大戦以後、国を復興させる重要な産業として<br>
                            傾斜生産方式が導入される。<br>
                            1950年に政府による統制が撤廃され、<br>
                            石炭企業は自由競争市場へ復帰する。
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 8.2rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_02.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 5rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 5.5rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 9.2rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 7.2rem;">
                            テキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </div>
                </div>
                <div class="challengeEvolutionHistory__next">
                    次の100年へ
                </div>
            </div>
        </section>

<?php
/*
    ########  #######   #######  ######## ######## ########
    ##       ##     ## ##     ##    ##    ##       ##     ##
    ##       ##     ## ##     ##    ##    ##       ##     ##
    ######   ##     ## ##     ##    ##    ######   ########
    ##       ##     ## ##     ##    ##    ##       ##   ##
    ##       ##     ## ##     ##    ##    ##       ##    ##
    ##        #######   #######     ##    ######## ##     ##
*/
?>
        <section class="aboutUsCommon">
                <div class="wrap w1200 sp-wrap">
                <h2 class="aboutUsCommon__head notos">
                    会社紹介
                </h2>
                <div class="aboutUsCommon__link pc-flex bet">
                    <a href="<?php echo HOME; ?>aboutus/topmessage/" class="aboutUsCommon__btn md-btn red left-text">
                        社長メッセージ
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>aboutus/SDGs" class="aboutUsCommon__btn md-btn red left-text">
                        SDGsへの貢献
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="aboutUsCommon__entry">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
