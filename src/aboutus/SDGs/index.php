<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'SDGs', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/sdgs_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/sdgs_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en">SDGs</span>
                <span class="pageHead__text--ja">SDGsへの取り組み</span>
            </h1>
        </div>
    </div>

    <div class="sdgs">
        <div class="pc sdgs__bg"></div>
<?php
/*
       ###    ########   #######  ##     ## ########
      ## ##   ##     ## ##     ## ##     ##    ##
     ##   ##  ##     ## ##     ## ##     ##    ##
    ##     ## ########  ##     ## ##     ##    ##
    ######### ##     ## ##     ## ##     ##    ##
    ##     ## ##     ## ##     ## ##     ##    ##
    ##     ## ########   #######   #######     ##
*/
?>
        <section class="sdgsAbout">
            <div class="wrap w1200 sp-wrap">
                <h2 class="sdgsAbout__head notos js-in anime left-in">
                    SDGsとは
                </h2>
                <div class="sdgsAbout__wrapper pc-flex vcenter bet">
                    <div class="sdgsAbout__img js-in anime bottom-in">
                        <img src="<?php echo HOME; ?>img/sdgs_about_01.png" alt="">
                    </div>
                    <p class="sdgsAbout__text js-in anime bottom-in">
                        SDGs（持続可能な開発目標）とは、2015年に国際サミットで採択された国際目標です。17のゴール、169のターゲットから構成されており、地球上の「誰一人取り残さない」ことを誓っています。<br>
                        シナネンHDグループは限りある資源を扱う企業として、地球課題の解決、SDGsの達成に貢献します。
                    </p>
                </div>
                <div class="sdgsAbout__wrapper pc-flex vcenter bet">
                    <div class="sdgsAbout__img js-in anime bottom-in">
                        <img src="<?php echo HOME; ?>img/sdgs_about_02.png" alt="">
                    </div>
                    <div class="sdgsAbout__text js-in anime bottom-in">
                        <p class="">
                            渡邊工務店のSDGsの達成に向けた積極的な活動は、外務省ホームページの「JAPAN SDGs Action Platform」にも事例のひとつとして取り上げられ、「SDGsジャパンロゴマーク」の使用が認められました。
                        </p>
                        <p class="">
                            <a href="#" target="_blank" class="">外務省　JAPAN SDGs Action Platform</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

<?php
/*
     ######  ########  ######
    ##    ## ##       ##    ##
    ##       ##       ##
     ######  ######   ##
          ## ##       ##
    ##    ## ##       ##    ##
     ######  ########  ######
*/
?>
        <section class="sdgsSec">
            <div class="sdgsSec__bg sdgsSec__bg--left js-in anime left-in">
                <img src="<?php echo HOME; ?>img/sdgs_bg_01.png" alt="">
            </div>
            <div class="wrap w1200 sp-wrap">
                <h2 class="sdgsSec__head notos pc-flex bet js-in anime bottom-in">
                    地球環境とエネルギー
                    <img src="<?php echo HOME; ?>img/sdgs_01.png" alt="">
                </h2>
                <dl class="sdgsSec__data">
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        産業廃棄物を再資源化
                    </dt>
                    <dd class="sdgsSec__dtl">
                        当社グループ会社のシナネンエコワークス株式会社では独自の木くず処理、リサイクル体制を確立し、自社事業で排出した、木くずや廃プラスチックといった産業廃棄物を、化石燃料に代わるボイラー用燃料や、バイオマス発電用燃料として再資源化し販売しています。
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        再生可能エネルギー関連事業の積極的な推進
                    </dt>
                    <dd class="sdgsSec__dtl">
                        昨今各国で著しい進歩が見られる再生可能エネルギーの研究開発にシナネンHDグループも積極的に取り組んでいます。大韓民国での大型陸上風力発電事業への参画や、福島県天栄村への大型太陽光発電施設所の建設に加え、2020年2月には、国内外での再生可能エネルギーの普及を目指し、マイクロ風車搭載製品の開発・販売・メンテナンス事業を展開する「Sinagy Revo株式会社」を設立しました。
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        環境配慮型電力メニューの提供
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        社内ペーパーレス化の推進
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                </dl>
            </div>
        </section>

        <section class="sdgsSec">
            <div class="sdgsSec__bg sdgsSec__bg--right js-in anime right-in">
                <img src="<?php echo HOME; ?>img/sdgs_bg_02.png" alt="">
            </div>
            <div class="wrap w1200 sp-wrap">
                <h2 class="sdgsSec__head notos pc-flex bet js-in anime bottom-in">
                    すべての人の快適な暮らしを守る
                    <img src="<?php echo HOME; ?>img/sdgs_02.png" alt="">
                </h2>
                <dl class="sdgsSec__data">
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        シェアサイクル事業の展開
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        年に1度のガス点検「ひまわり点検」の実施
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        空き家管理代行サービス
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        建物のメンテナンス事業の拡大
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                </dl>
            </div>
        </section>

        <section class="sdgsSec">
            <div class="sdgsSec__bg sdgsSec__bg--left js-in anime left-in">
                <img src="<?php echo HOME; ?>img/sdgs_bg_03.png" alt="">
            </div>
            <div class="wrap w1200 sp-wrap">
                <h2 class="sdgsSec__head notos pc-flex bet js-in anime bottom-in">
                    誰もが働きやすい会社を目指して
                    <img src="<?php echo HOME; ?>img/sdgs_03.png" alt="">
                </h2>
                <dl class="sdgsSec__data">
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        各種制度を整えることによるワークライフバランスの充実
                    </dt>
                    <dd class="sdgsSec__dtl">
                        仕事とプライベートのどちらも充実させるため、ノー残業デー・フレックスタイム制度・介護や育児との両立のための制度などを十分に整え、利用を推奨しています。各制度は社員全員が平等に利用することが出来、最近では育児休暇や時短勤務の制度を利用する男性も増えてきています。
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        ダイバーシティ＆インクルージョン
                    </dt>
                    <dd class="sdgsSec__dtl">
                        当社グループでは、積極的に女性の活躍を推進すべく「女性活躍推進行動計画」を2016年に策定し、女性社員の採用・定着・登用を進めています。また、グループ一丸となって、年齢や、障がいの有無にとらわれない採用を進め、誰もが働きやすい会社から住みやすい社会の実現を目指しています。
                    </dd>
                </dl>
            </div>
        </section>

        <section class="sdgsSec">
            <div class="sdgsSec__bg sdgsSec__bg--right js-in anime right-in">
                <img src="<?php echo HOME; ?>img/sdgs_bg_04.png" alt="">
            </div>
            <div class="wrap w1200 sp-wrap">
                <h2 class="sdgsSec__head notos pc-flex bet js-in anime bottom-in">
                    よりよい社会・未来のために
                    <img src="<?php echo HOME; ?>img/sdgs_04.png" alt="">
                </h2>
                <dl class="sdgsSec__data">
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        農福連携自然栽培パーティ全国協議会の活動への参画
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        「子供地球基金」への協賛
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        SDGs・環境保全の啓発活動の実施
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                    <dt class="sdgsSec__ttl js-acc js-in anime bottom-in">
                        次世代人材育成のためのイベントを開催
                    </dt>
                    <dd class="sdgsSec__dtl">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </dd>
                </dl>
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
                    <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="aboutUsCommon__btn md-btn red left-text js-in anime bottom-in">
                        シナネンHDグループの<br class="sp">挑戦と進化
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
