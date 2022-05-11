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
                <span class="pageHead__text--en">Challenge</span>
                <span class="pageHead__text--ja">シナネンHDグループの挑戦と進化</span>
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
                <div class="challengeEvolutionIntro__img js-in anime bottom-in">
                    <img src="<?php echo HOME; ?>img/challengeEvolution_intro.png" alt="">
                </div>
                <p class="challengeEvolutionIntro__text js-in anime bottom-in">
                    （例）1927年の創立以来、エネルギーの進歩とともに成長してきたシナネンHDグループ。そんな私たちのこれまでとこれからの挑戦と進化についてご紹介します。環境問題や社会情勢の変化、働き方改革や人々の多様性など、様々な課題をかかえるなかで私たちはこれからも、よりよい社会・暮らしのために歩み続けます。
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
                <div class="challengeEvolutionGroup__wrapper pc-flex bet js-in anime bottom-in">
                    <div class="challengeEvolutionGroup__text">
                        <h3 class="challengeEvolutionGroup__head notos">
                            風土改革
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            詳細テキストが入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト（300文字程度）
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img">
                        <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                    </div>
                </div>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet js-in anime bottom-in">
                    <div class="challengeEvolutionGroup__text pc-2">
                        <h3 class="challengeEvolutionGroup__head notos">
                            グループコンテスト
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            詳細テキストが入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト（300文字程度）
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img pc-1">
                        <img src="<?php echo HOME; ?>img/challengeEvolution_group_02.png" alt="">
                    </div>
                </div>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet js-in anime bottom-in">
                    <div class="challengeEvolutionGroup__text">
                        <h3 class="challengeEvolutionGroup__head notos">
                            SDGsへの貢献
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            詳細テキストが入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト（300文字程度）
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img">
                        <img src="<?php echo HOME; ?>img/challengeEvolution_group_03.png" alt="">
                    </div>
                </div>
                <div class="challengeEvolutionGroup__wrapper pc-flex bet js-in anime bottom-in">
                    <div class="challengeEvolutionGroup__text pc-2">
                        <h3 class="challengeEvolutionGroup__head notos">
                            本社移転
                        </h3>
                        <div class="sp challengeEvolutionGroup__img">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_group_01.png" alt="">
                        </div>
                        <p class="challengeEvolutionGroup__desc">
                            詳細テキストが入りますテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト（300文字程度）
                        </p>
                    </div>
                    <div class="pc challengeEvolutionGroup__img pc-1">
                        <img src="<?php echo HOME; ?>img/challengeEvolution_group_04.png" alt="">
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
                    <div class="challengeEvolutionHistory__timeline flex vert vcenter js-in anime bottom-in">
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
                        <div class="challengeEvolutionHistory__node--head flex vcenter hcenter js-in anime bottom-in">
                            シナネンの歩み
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 6.3rem;">
                            1927年4月　創業
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 3.2rem;">
                            1934年4月　<br>
                            豆炭の製造販売・豆炭燃焼器具販売を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--img js-in anime bottom-in" style="margin-top: 7.6rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_company_01.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 6rem;">
                            1952年9月　<br>
                            石油製品、同器具の販売を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 3.5rem;">
                            1955年4月　<br>
                            LPガス・同器具の取り扱い開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 3.5rem;">
                            1959年9月　<br>
                            品川あんか発売
                        </div>
                        <div class="challengeEvolutionHistory__node--img js-in anime bottom-in" style="margin-top: 3.3rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_company_02.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 6.3rem;">
                            1984年<br>
                            新規事業として抗菌事業をスタート
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 10.5rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 11rem;">
                            テキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 10.3rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </div>
                    <div class="challengeEvolutionHistory__node challengeEvolutionHistory__industry flex vert vstart">
                        <div class="challengeEvolutionHistory__node--head flex vcenter hcenter">
                            エネルギー産業のうごき
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 3.7rem;">
                            薪炭から石炭へエネルギーの主力が移り変わり<br>
                            1920年に石炭の割合が過去最高に
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 11.1rem;">
                            ガス事業の普及拡大<br>
                            多くのガス事業者が誕生した
                        </div>
                        <div class="challengeEvolutionHistory__node--img js-in anime bottom-in" style="margin-top: 3.1rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_01.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 3.5rem;">
                            第二次世界大戦以後、国を復興させる重要な産業として<br>
                            傾斜生産方式が導入される。<br>
                            1950年に政府による統制が撤廃され、<br>
                            石炭企業は自由競争市場へ復帰する。
                        </div>
                        <div class="challengeEvolutionHistory__node--img js-in anime bottom-in" style="margin-top: 8.2rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_02.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 5rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 5.5rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 9.2rem;">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </div>
                        <div class="challengeEvolutionHistory__node--text js-in anime bottom-in" style="margin-top: 7.2rem;">
                            テキストテキストテキストテキストテキストテキストテキスト
                        </div>
                    </div>
                </div>
                <div class="challengeEvolutionHistory__next js-in anime bottom-in">
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
                <h2 class="aboutUsCommon__head notos js-in anime bottom-in">
                    会社紹介
                </h2>
                <div class="aboutUsCommon__link pc-flex bet">
                    <a href="<?php echo HOME; ?>aboutus/topmessage/" class="aboutUsCommon__btn md-btn red left-text js-in anime bottom-in">
                        社長メッセージ
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>aboutus/SDGs" class="aboutUsCommon__btn md-btn red left-text js-in anime bottom-in">
                        SDGsへの貢献
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="aboutUsCommon__entry js-in anime bottom-in">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
