<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'topmessage', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/topMessage_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/topMessage_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">Message</span>
                <span class="pageHead__text--ja js-in anime text-in">社長メッセージ</span>
            </h1>
        </div>
    </div>

    <section class="topMessage">
        <div class="pc topMessage__bg"></div>
        <div class="wrap w1200 sp-wrap">
            <div class="topMessage__head pc-flex bet">
                <div class="topMessage__head--img pc-2">
                    <img src="<?php echo HOME; ?>img/topMessage_01.png" alt="">
                </div>
                <div class="topMessage__head--text pc-1">
                    <h2 class="topMessage__head--ttl">
                        一人ひとりが自責の念を持って成長し、互いを高め合い、多様性を尊重できる魅力ある人に
                    </h2>
                    <p class="topMessage__head--sign">
                        代表取締役社長　山﨑 正毅
                    </p>
                </div>
            </div>
            <div class="topMessage__body">
                <p class="topMessage__body--text">
                    シナネンホールディングスグループは、「エネルギーと住まいと暮らしのサービスで地域すべてのお客様の快適な生活に貢献する」を企業理念に掲げ、グローバル総合エネルギー企業グループとして歩みを進めてきました。現在は、家庭向けエネルギー卸・小売周辺事業のほか、法人向けエネルギーソリューション事業、非エネルギー事業を展開しています。また、新規事業にも注力しており、脱炭素社会の実現へ向けた再生可能エネルギー事業や再資源化・廃棄物処理、水質浄化、シェアサイクル事業、抗菌事業など、時代が求める事業展開を推進しています。
                </p>
                <p class="topMessage__body--text">
                    いつの時代も私たちを取り巻く社会環境は、継続的に変化し続けています。私たちは、常に社会に求められる企業になるために果敢に挑み続けてきました。<br>
                    そして今、シナネンホールディングスグループがこれからも持続的に成長する組織となるため、第二次中期経営計画として、「風土改革プロジェクト」を立ち上げました。これは、社員一人一人が自責の念を持って成長し、互いを高め合うことを趣旨としています。風土改革に取り組むことによって、皆が当社グループで働きながら、自身の「マーケットバリュー」を高めることを目指しています。
                </p>
                <div class="topMessage__body--img">
                    <img src="<?php echo HOME; ?>img/topMessage_02.png" alt="">
                </div>
                <p class="topMessage__body--text">
                    私たちは不確実性が高まる世の中で、個人の普遍的価値を高めることが組織をより強く、しなやかにすると考えています。社員一人一人が自信とやりがいに満ち、日々成長してこそ、各事業を通じて社会的責任を果たしていくことができるのです。<br>
                    当社グループは次の時代に向けて、個々の考え方や慣習、行動様式の変革を最重要課題と捉えており、社員一人一人が“自責の念”を身につけるべきと考えています。自責とは、物事を自分事として受け取り、全ての問題に対して積極的に取り組み、解決する姿勢です。その積み重ねによって人は成長し、いかなる変化にも対応できる人間になれます。
                </p>
                <p class="topMessage__body--text">
                    また、社会全体で多様性の視点を持つ重要性が認識されています。当社グループでも“ダイバーシティ&インクルージョン”への取り組みを推進し、さまざまな個性が発揮されることに期待しています。年齢、性別、役職などを問わず、皆が自分の意見を発信し、多様性を持って、社員全員が会社を変えていこうとする姿勢、行動を大切にしています。
                </p>
                <p class="topMessage__body--text">
                    このように当社グループは役員を含め、一人一人の普遍的価値の向上や自己成長が企業の成長の基盤と考え、さまざまな取り組みを行なっています。私は、当社グループで働くことにより、多様性を認め合い他者理解をするとともに、さらに自己理解も深め、自分の個性や専門性を高めてほしいと考えています。そうすることで全社員が、それぞれ自分の人生を切り拓き、心豊かで幸せであることを願っています。そして、自律的な個の集合体となったシナネンホールディングスグループのさらなる発展を目指しています。
                </p>
                <p class="topMessage__body--text">
                    学生のみなさんにはぜひ、会社だけにとらわれず、「キャリア＝人生」と捉え、広く自分だけの人生を創り出していく経験と力をつけてほしいと思います。もちろん、みなさんの新しい感覚やアイデアは当社グループ入社後もそれぞれの必要とされる場所で活かされるでしょう。<br>
                    そして、自律的な個の集合体となったシナネンホールディングスグループのさらなる発展を目指す仲間として、共に歩みを進めましょう。
                </p>
                <p class="topMessage__body--text">
                    当社グループでは多くの挑戦のチャンスがあります。それらのチャンスを掴むことで得られる様々な出会いや経験を通して、みなさんが成長できることをお約束します。
                </p>

                <p class="topMessage__body--signature flex pc-vert pc-vend sp-hend sp-break">
                    <span class="topMessage__body--sign topMessage__body--co">シナネンホールディングス株式会社</span>
                    <span class="topMessage__body--sign topMessage__body--pos">代表取締役社長</span>
                    <span class="topMessage__body--sign topMessage__body--name">山﨑 正毅</span>
                </p>
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
                    <a href="<?php echo HOME; ?>aboutus/challenge-evolution/" class="aboutUsCommon__btn md-btn red left-text">
                        わたしたちの<br class="sp">挑戦と進化
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo HOME; ?>aboutus/SDGs" class="aboutUsCommon__btn md-btn red left-text">
                        SDGsへの取り組み
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
