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
                <span class="pageHead__text--en js-in anime left-in">SDGs</span>
                <span class="pageHead__text--ja js-in anime left-in">SDGsへの取り組み</span>
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
                <h2 class="sdgsAbout__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        SDGsとは
                    </div>
                    <div class="sp js-in anime left-in">
                        SDGsとは
                    </div>
                </h2>
                <div class="sdgsAbout__wrapper pc-flex vcenter bet">
                    <div class="sdgsAbout__img">
                        <img src="<?php echo HOME; ?>img/sdgs_about_01.png" alt="">
                    </div>
                    <p class="sdgsAbout__text">
                        SDGs（持続可能な開発目標）とは、2015年に国際サミットで採択された国際目標です。17のゴールと169のターゲットから構成されており、地球上の「誰一人取り残さない」ことを誓っています。<br class="pc">シナネンホールディングスグループはエネルギーを扱う企業グループとして、地球課題の解決、SDGsの達成に貢献します。
                    </p>
                </div>
                <div class="sdgsAbout__wrapper pc-flex vcenter bet">
                    <div class="sdgsAbout__img">
                        <img src="<?php echo HOME; ?>img/sdgs_about_02.png" alt="">
                    </div>
                    <div class="sdgsAbout__text">
                        <p class="">
                            シナネンホールディングスグループのSDGsへの取り組みが外務省に評価され、SDGsジャパンロゴマークの使用を許可されています。
                        </p>
                        <p class="">
                            <a href="https://www.mofa.go.jp/mofaj/gaiko/oda/sdgs/index.html" target="_blank" class="">外務省　JAPAN SDGs Action Platform</a>
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
        <div class="sdgsContainer">
            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                地球環境に優しいエネルギーの供給を手段とし、お客様の快適な住まいと暮らしを実現することを目的とする企業グループへ
                            </div>
                            <div class="sp js-in anime left-in">
                                地球環境に優しいエネルギーの供給を手段とし、お客様の快適な住まいと暮らしを実現することを目的とする企業グループへ
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_07.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_11.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_13.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            産業廃棄物を再資源化
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのシナネンエコワーク株式会社では、自社による木くず処理・リサイクル体制を確立し、産業廃棄物から燃料や原料等の再資源化をする事業を行っています。<br>
                            環境意識が高まっている現在、""真の循環型社会の構築""に向け、資源の有効活用を積極的に進めています。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            住み続けられる住まいを実現
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのミライフ西日本株式会社、ミライフ株式会社、ミライフ東日本株式会社では、ガスの取り扱いだけでなく、住まいを良い状態のまま、長く、快適に使っていただく取り組みとしてリフォーム事業にも着手しています。<br>
                            お客様に住まいを長く使っていただくことで、森林伐採が減り、資源が維持されることで環境負荷の軽減にもつながっています。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            安心安全なエネルギーの供給
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのミライフ西日本株式会社、ミライフ株式会社、ミライフ東日本株式会社では、法定で義務付けられた4年に1度の法定点検とは別に、お客様の要望に応えた自主保安点検として「ひまわり点検」を無償で実施しています。<br>
                            今後もエネルギーを多くの方に、そして安全に届けるため、取り組みを続けていきます。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            「放置空き家」問題の解決
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループの日高都市ガス株式会社では、2020年2月より、埼玉県の日高市内で問題となっている空き家を、所有者に代わり定期的に巡回・管理する空き家管理代行サービスを開始しています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                多様な再生可能エネルギー関連事業を推進し、脱炭素社会の実現に貢献
                            </div>
                            <div class="sp js-in anime left-in">
                                多様な再生可能エネルギー関連事業を推進し、脱炭素社会の実現に貢献
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_07.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_12.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_15.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            再生可能エネルギー関連事業の<br>積極的な推進
                        </dt>
                        <dd class="sdgsSec__dtl">
                            昨今各国で著しい進歩が見られる再生可能エネルギー事業に当社グループも積極的に取り組んでいます。2016年より福島県岩瀬郡天栄村で太陽光発電所「天栄村ソーラーパーク」を建設しました。ここでは施設の一角を借りている「羽鳥湖高原レジーナの森」に電力を供給するほか、周辺施設で使用することで「再生可能エネルギーの地産地消」を推進しています。この活動により、天栄村行政が目指す「再生可能エネルギー導入促進」にも貢献しています。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            環境配慮型電力メニューの提供
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのシナネン株式会社では、日本でも数少ない、実質再生可能エネルギー100％の電力メニューを提供しています。この電力メニューは一般財団法人日本品質保証機構（JQA）による第三者検証を受けています。また、2020年から取り組んでいる、シナネン　あかりの森プロジェクト」の一環として、2021年3月より家庭向けにも環境配慮型電力の供給をスタートしました。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            エネルギーソリューション事業の展開
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのシナネン株式会社では、これまでエネルギー事業で培った知見を活かし、特定のエネルギーやメーカーにとらわれず、中立的な立場でお客様に最適なソリューションを提供するエネルギーソリューション事業を展開することで、省エネや光熱費削減につなげています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                シェアサイクル事業を推進し、健康で環境に優しい移動手段を構築
                            </div>
                            <div class="sp js-in anime left-in">
                                シェアサイクル事業を推進し、健康で環境に優しい移動手段を構築
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_11.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_13.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_17.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            シェアサイクル事業の展開
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのシナネンモビリティPLUS株式会社では、シェアサイクルブランド「ダイチャリ」を展開し、環境配慮型の交通インフラを提供しています。このサービスは、ソフトバンクグループのOpenStreet社と提携し、シェアサイクリングサービス「HELLOCYCLING」のシステムを利用しており、2022年3月末現在、ステーション数は2,200カ所、自転車数10,000台の日本最大級のシェアサイクルサービスとなっています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                安心・安全な施設維持、運営を提供する建物維持管理事業の拡大
                            </div>
                            <div class="sp js-in anime left-in">
                                安心・安全な施設維持、運営を提供する建物維持管理事業の拡大
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_08.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_11.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            安心して暮らせる街づくりに貢献
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのタカラビルメン株式会社では、ビル・施設管理、病院運営サポート、斎場関連事業等のファシリティマネジメントまで建物維持管理のスペシャリストとして安心・安全な施設維持・運営に貢献しています。<br>
                            また、当社グループの株式会社インデスでは、アパート・マンションの原状回復工事や共有部の定期清掃、ハウスクリーニングなど清掃業務から施設管理を担っています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                風土改革、働き方改革、人財育成を三位一体で推進
                            </div>
                            <div class="sp js-in anime left-in">
                                風土改革、働き方改革、人財育成を三位一体で推進
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_05.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_08.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_09.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            社員の行動変容を促す「風土改革」の推進
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループでは、これからもお客様のご期待に応えられる会社であり続けるため、会社としての持続的成長を目標に掲げています。<br>
                            2020年にスタートした第二次中期経営計画では社員一人一人が挑戦できるマインドと環境を整えるため、風土改革プロジェクトを立ち上げ、これからの社会変容にも柔軟に対応できる組織への変革を目指しています。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            各種制度の整備による<br>ワークライフバランスの充実
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループでは、次世代育成支援行動計画に基づき、 ①ノー残業デー、フレックスタイム制度などによる『就業時間中に業務を終わらせる』社風づくり意識・行動改革を推進 ②育児・介護と仕事の両立を果たせるような勤務時間短縮措置等の推進・実施 ③子供の健全育成と豊かな心を育む子供・子育てに関する社会貢献活動の実施 ④ワークライフバランスの充実を図るため、有給休暇取得推進 を行っています。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            ダイバーシティ＆インクルージョン
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループでは、積極的に女性の活躍を推進すべく「女性活躍推進行動計画」を2016年に策定し、女性社員の採用・定着・登用を進めています。<br>
                            また、グループ一丸となって、年齢や、障がいの有無にとらわれない採用を進め、誰もが働きやすい会社から住みやすい社会の実現を目指しています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                地球環境や再生可能エネルギーに関する啓発活動を通じ、SDGsへの理解を促進
                            </div>
                            <div class="sp js-in anime left-in">
                                地球環境や再生可能エネルギーに関する啓発活動を通じ、SDGsへの理解を促進
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_04.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_07.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_13.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            児童や学生に対する啓発活動
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループでは、SDGsや再生可能エネルギーへの理解促進を図るため、次世代を担う児童や学生を対象に、啓発活動を実施しています。環境について積極的に学ぶ場を設けている中学校の学生へオンライン授業を実施したり、当社グループの日高都市ガス株式会社が、地域の小学生が参加する体験授業に協力・参加し、「クリーンエネルギー」をテーマにした授業を実施したりしています。
                        </dd>
                        <dt class="sdgsSec__ttl js-acc">
                            豊かな森を守る大切さを学べる絵本の制作
                        </dt>
                        <dd class="sdgsSec__dtl">
                            当社グループのシナネン株式会社は、2020年から取り組んでいる「シナネン あかりの森プロジェクト」の一環として、持続可能な社会の実現および地球環境の保護、省エネルギーの大切さを分かりやすく学んでいただくことを目的に、絵本「シナモロールとあかりの森のポポネン」を制作しています。この絵本を通じて、地球環境保護について、小さなお子様にも親しみやすく、ご家族で一緒に楽しみながら学んでいただくことができます。<br>
                            また、制作した絵本は、交流のある地域の幼稚園や保育園を中心に配布し、環境教育に役立てていただいています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                農福連携への協力を通じた障がい者の雇用支援と地域社会への貢献
                            </div>
                            <div class="sp js-in anime left-in">
                                農福連携への協力を通じた障がい者の雇用支援と地域社会への貢献
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_02.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_03.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_10.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            「農福連携」活動への参画
                        </dt>
                        <dd class="sdgsSec__dtl">
                            農業を通じて障がい者の雇用支援等を目指す「農福連携」を推進する一般社団法人 農福連携自然栽培パーティ全国協議会の活動に2020年から参画しています。現在は、埼玉県熊谷市で農福連携に取り組む埼玉福興株式会社の方々とともに、当社が委託するコシヒカリの田んぼ一反にて田植え・稲刈りを実施。収穫されたお米はすべて、当社にご縁がある東京都品川区・港区・埼玉県熊谷市の子ども食堂に寄付しています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                「子供地球基金」への協賛による、子どもたちの成長支援と国際貢献
                            </div>
                            <div class="sp js-in anime left-in">
                                「子供地球基金」への協賛による、子どもたちの成長支援と国際貢献
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_01.png" alt="">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_10.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            「子供地球基金」への参加
                        </dt>
                        <dd class="sdgsSec__dtl">
                            病気や紛争、災害などで心に傷を負った子どもたちへ経済支援や絵本、画材、医薬品などの寄付活動を行うNPO法人「子供地球基金」の活動に参加しています。当社では、基金に寄せられた子どもたちの絵を企業カレンダーに採用することで、子どもたちの成長と幸せに生きられるための国際貢献に向けた活動を支援しています。
                        </dd>
                    </dl>
                </div>
            </section>

            <section class="sdgsSec">
                <div class="wrap w1200 sp-wrap">
                    <h2 class="sdgsSec__head notos pc-flex bet vcenter">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                各世代の状況に合わせた次世代人材の育成支援
                            </div>
                            <div class="sp js-in anime left-in">
                                各世代の状況に合わせた次世代人材の育成支援
                            </div>
                        </div>
                        <div class="sdgsSec__img">
                            <img src="<?php echo HOME; ?>img/sdgs_icon_04.png" alt="">
                        </div>
                    </h2>
                    <dl class="sdgsSec__data">
                        <dt class="sdgsSec__ttl js-acc">
                            ファミリー向けの体験型イベントへの出展
                        </dt>
                        <dd class="sdgsSec__dtl">
                            毎日新聞社が主催するファミリー向けの体験型イベントに2019年から出展しています。様々な企業・NPOが、小学生向けにわかりやすく記念になるような体験やお土産を提供しています。2020年からは、当社グループのシナネンゼオミック株式会社の協力のもと、「抗菌戦隊　メタリックゼオ」というキャラクターと一緒に身近にある抗菌の作用について学べるイベントを実施しています。
                        </dd>
                    </dl>
                </div>
            </section>
        </div>
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
                    <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="aboutUsCommon__btn md-btn red left-text">
                        わたしたちの<br class="sp">挑戦と進化
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
