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
                <span class="pageHead__text--ja js-in anime left-in">わたしたちの挑戦と進化</span>
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
                <p class="challengeEvolutionIntro__text">
                    1927年の創業以来、エネルギーや社会の変化とともに進化してきたシナネンホールディングスグループ。これからも、環境問題や人権問題、多様化する生活様式など、様々な課題を抱える社会の中で、快適で豊かな暮らしのために挑戦し続けます。
                </p>
            </div>
        </section>

<?php
/*
    ##    ##    ###    ##     ##
    ###   ##   ## ##   ##     ##
    ####  ##  ##   ##  ##     ##
    ## ## ## ##     ## ##     ##
    ##  #### #########  ##   ##
    ##   ### ##     ##   ## ##
    ##    ## ##     ##    ###
*/
?>
        <ul class="sp challengeEvolutionTab flex" id="spNavTop">
            <li class="challengeEvolutionTab__item flex vcenter hcenter js-challengeEvolution-tab current" data-tab="history">
                これまでの100年
            </li>
            <li class="challengeEvolutionTab__item flex vcenter hcenter js-challengeEvolution-tab" data-tab="future">
                次の100年に向けての<br>取り組み
            </li>
        </ul>

<?php
/*
    ######## ##     ## ######## ##     ## ########  ########
    ##       ##     ##    ##    ##     ## ##     ## ##
    ##       ##     ##    ##    ##     ## ##     ## ##
    ######   ##     ##    ##    ##     ## ########  ######
    ##       ##     ##    ##    ##     ## ##   ##   ##
    ##       ##     ##    ##    ##     ## ##    ##  ##
    ##        #######     ##     #######  ##     ## ########
*/
?>
    <section class="challengeEvolutionFuture challengeEvolutionSec challengeEvolutionTab__tabItem js-challengeEvolution-tabItem" id="future">
        <div class="wrap w1200 sp-wrap">
            <div class="challengeEvolutionFuture__inner">
                <h2 class="pc challengeEvolutionSec__head notos js-in anime left-in">
                    次の100年に向けての取り組み
                </h2>
                <section class="challengeEvolutionFuture__sec">
                    <h2 class="challengeEvolutionFuture__head notos">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                脱炭素社会実現への貢献
                            </div>
                            <div class="sp js-in anime left-in">
                                脱炭素社会実現への貢献
                            </div>
                        </div>
                    </h2>
                    <div class="challengeEvolutionFuture__wrapper">
                        <div class="challengeEvolutionFuture__container pc-flex bet">
                            <div class="challengeEvolutionFuture__text flex vert">
                                <h3 class="challengeEvolutionFuture__subhead">
                                    多様な再生可能エネルギー関連事業への挑戦
                                </h3>
                                <p class="challengeEvolutionFuture__desc">
                                    地球環境に優しい再生可能エネルギー事業を積極的に推進し、CO2 排出削減に貢献しています。実質再生可能エネルギー100％の電力メニューの提供や、クリーン電力の利用料金の一部を森林保護活動などに充てる「シナネンあかりの森プロジェクト」などを展開し、環境配慮型電力の普及を通じて脱炭素社会の実現に貢献します。
                                </p>
                            </div>
                            <div class="challengeEvolutionFuture__img">
                                <span class="js-in anime slideImg">
                                    <img src="<?php echo HOME; ?>img/future_lifestyle_01.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="challengeEvolutionFuture__container pc-flex bet">
                            <div class="challengeEvolutionFuture__text flex vert">
                                <h3 class="challengeEvolutionFuture__subhead">
                                    グループの総合力で快適な住まいと暮らしづくりに貢献
                                </h3>
                                <p class="challengeEvolutionFuture__desc">
                                    主力事業であるエネルギーの安定供給に加え、リフォーム・住宅設備のご提案、環境配慮型のモビリティであるシェアサイクルサービスの運営、廃棄物リサイクル燃料や原料の製造など様々なサービスの提供を通じて、脱炭素社会の実現に挑戦するとともに、すべてのお客様の快適な暮らしづくりに貢献します。
                                </p>
                            </div>
                            <div class="challengeEvolutionFuture__img">
                                <span class="js-in anime slideImg">
                                    <img src="<?php echo HOME; ?>img/future_lifestyle_02.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="challengeEvolutionFuture__sec">
                    <h2 class="challengeEvolutionFuture__head notos">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                誰もが働きやすく生きやすく
                            </div>
                            <div class="sp js-in anime left-in">
                                誰もが働きやすく生きやすく
                            </div>
                        </div>
                    </h2>
                    <div class="challengeEvolutionFuture__wrapper">
                        <div class="challengeEvolutionFuture__container pc-flex bet">
                            <div class="challengeEvolutionFuture__text flex vert">
                                <h3 class="challengeEvolutionFuture__subhead">
                                    年齢・国籍・性別にとらわれない”個人”を尊重する環境
                                </h3>
                                <p class="challengeEvolutionFuture__desc">
                                    従業員一人ひとりが、それぞれに合った環境で能力を発揮出来る環境をつくるため、社員の希望に応じて定年退職後も引き続き当社グループで働き続けられるように、再雇用制度を制定したり、従業員が仕事と子育てを両立させることができる働きやすい環境となるよう、次世代育成支援行動計画を策定したりしています。また、女性のキャリア形成支援の促進や育児支援策の充実、女性マネジメント職の登用拡大のための環境づくりにも積極的に取り組んでいます。
                                </p>
                            </div>
                            <div class="challengeEvolutionFuture__img">
                                <span class="js-in anime slideImg">
                                    <img src="<?php echo HOME; ?>img/future_workstyle_01.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="challengeEvolutionFuture__sec">
                    <h2 class="challengeEvolutionFuture__head notos">
                        <div class="anime__wrapper">
                            <div class="pc js-in anime text-in">
                                持続的成長可能な組織の実現
                            </div>
                            <div class="sp js-in anime left-in">
                                持続的成長可能な組織の実現
                            </div>
                        </div>
                    </h2>
                    <div class="challengeEvolutionFuture__wrapper">
                        <div class="challengeEvolutionFuture__container pc-flex bet">
                            <div class="challengeEvolutionFuture__text flex vert">
                                <h3 class="challengeEvolutionFuture__subhead">
                                    新規事業の創出
                                </h3>
                                <p class="challengeEvolutionFuture__desc">
                                    シナネンホールディングスグループは、これまでも時代の変化に合わせて様々な事業を展開してきました。それは、エネルギー領域に留まらず、近年では、シェアサイクル事業や、シェアオフィス事業など、新たな可能性に挑戦しています。これからも時代の変化を敏感にとらえ、ゼロからの立ち上げのみならず、グループ各社のリソースを掛け合わせることで新たなビジネス創出の可能性も検討し、積極的に新規事業開発を推進していきます。
                                </p>
                            </div>
                            <div class="challengeEvolutionFuture__img">
                                <span class="js-in anime slideImg">
                                    <img src="<?php echo HOME; ?>img/future_workstyle_02.png" alt="">
                                </span>
                            </div>
                        </div>
                        <div class="challengeEvolutionFuture__container pc-flex bet">
                            <div class="challengeEvolutionFuture__text flex vert">
                                <h3 class="challengeEvolutionFuture__subhead">
                                    社員の考え方・慣習・行動様式の変革
                                </h3>
                                <p class="challengeEvolutionFuture__desc">
                                    第三次中期経営計画、そして2027年の創業100周年に向けてさらなる躍進と飛躍をするために、2020年度より第二次中期経営計画をスタートしました。その定性目標の一つとして「社員の考え方・慣習・行動様式の変革」を掲げ、風土改革と働き方改革を推進しています。風土改革と働き方改革の本質には「個を高め、活かし合う」という考え方があります。「個を高め」とは、Employabilityを意識し、個としての価値や雇用される能力を高めていくことを、「活かし合う」は、個を尊重し、認め合い、強みを活かし合うこと（D&I）を意味しています。<br>
                                    組織ビジョンを「Spiral Up Company～情熱とワクワクのエネルギー好循環組織～」として、従業員の声や意思を尊重し、経営層とディスカッションを重ねながら、これらの改革を推進しています。
                                </p>
                            </div>
                            <div class="challengeEvolutionFuture__img">
                                <span class="js-in anime slideImg">
                                    <img src="<?php echo HOME; ?>img/future_company_01.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
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
        <section class="challengeEvolutionSec challengeEvolutionHistory challengeEvolutionTab__tabItem js-challengeEvolution-tabItem show" id="history">
            <div class="wrap w1200 sp-wrap">
                <h2 class="pc challengeEvolutionSec__head notos js-in anime left-in">
                    これまでの100年
                </h2>
                <div class="challengeEvolutionHistory__container flex bet">
                    <div class="challengeEvolutionHistory__timeline flex vert vcenter">
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 4rem;">
                            <span class="small">19</span>20
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 10rem;">
                            <span class="small">19</span>30
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 12rem;">
                            <span class="small">19</span>40
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 10rem;">
                            <span class="small">19</span>50
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 12rem;">
                            <span class="small">19</span>60
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 10rem;">
                            <span class="small">19</span>70
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 12rem;">
                            <span class="small">19</span>80
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 10rem;">
                            <span class="small">19</span>90
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 12rem;">
                            <span class="small">20</span>00
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 10rem;">
                            <span class="small">20</span>10
                        </div>
                        <div class="challengeEvolutionHistory__timeline--year flex vcenter hcenter" style="margin-top: 40.9rem;">
                            <span class="small">20</span>20
                        </div>
                    </div>
                    <div class="pc challengeEvolutionHistory__node challengeEvolutionHistory__company flex vert vend">
                        <div class="challengeEvolutionHistory__node--head flex vcenter hcenter">
                            わたしたちの歩み
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 9.5rem;">
                            <span class="year">1927年</span><br>
                            朝鮮平壌無煙炭の販売を目的に(資)電興無煙炭商会を創立
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2.4rem;">
                            <span class="year">1929年</span><br>
                            東京無煙炭(株)へ改組し、練炭の製造販売へ進出
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2.4rem;">
                            <span class="year">1934年</span><br>
                            品川豆炭(株)を設立し、豆炭の製造販売へ進出
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2.4rem;">
                            <span class="year">1936年</span><br>
                            品川豆炭(株)から品川燃料(株)に商号変更
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 2.2rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_company_01.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">1952年</span><br>
                            石油製品と同器具の販売開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">1955年</span><br>
                            LPガスと同器具の取り扱い開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">1962年</span><br>
                            社是「信義」「進取」「楽業」を制定
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">1963年</span><br>
                            東京証券取引所市場第二部に株式上場
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 3.3rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_company_02.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 10.8rem;">
                            <span class="year">1983年</span><br>
                            東京証券取引所市場第一部に指定変更
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 7.2rem;">
                            <span class="year">1991年</span><br>
                            (株)シナネンゼオミックを設立
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2.2rem;">
                            <span class="year">1998年</span><br>
                            品川燃料(株)からシナネン(株)<br>
                            （現シナネンホールディングス(株)）に商号変更
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2.1rem;">
                            <span class="year">2004年</span><br>
                            品川開発(株)（現シナネンエコワーク(株)）が<br>
                            木くずリサイクル施設「千葉リサイクルセンター」の操業開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 8.1rem;">
                            <span class="year">2012年</span><br>
                            建物総合メンテナンス事業を展開する<br>(株)インデスの全株式を取得
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2014年</span><br>
                            シナネン(株)が電力販売を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2015年</span><br>
                            持株会社体制移行によりシナネンホールディングス(株)が誕生
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2017年</span><br>
                            建物維持管理事業の中核となる<br>タカラビルメン(株)の全株式を取得
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2019年</span><br>
                            シェアサイクル事業を展開する<br>シナネンモビリティPLUS(株)を設立
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2020年</span><br>
                            シェアオフィス「seesaw」を立ち上げ、本格稼働を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2022年</span><br>
                            東京証券取引所プライム市場に移行
                        </div>
                    </div>
                    <div class="pc challengeEvolutionHistory__node challengeEvolutionHistory__industry flex vert vstart">
                        <div class="challengeEvolutionHistory__node--head flex vcenter hcenter">
                            エネルギー産業の動き
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 3.3rem;">
                            薪炭から石炭へエネルギーの主力が移り変わり<br>
                            1920年に石炭の割合が過去最高に
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 13.5rem;">
                            ガス事業の普及が拡大し<br>
                            多くのガス事業者が誕生
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 1.9rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_01.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 7.9rem;">
                            第二次世界大戦以後、国を復興させる重要な産業として傾斜生産方式が導入<br>
                            1950年に政府による統制が撤廃され、石炭企業は自由競争市場へ復帰
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            原子力の平和的利用が進められ、<br>
                            1951年にアメリカで原子力発電が開始<br>
                            日本でも1950年代中頃に法律や体制の整備と共に導入
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            LPガスが日本国内の過程用燃料として急速に普及する
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 6.2rem;">
                            メタンを主成分とする天然ガスが無公害で理想的なエネルギーとして注目を集め、日本でも1969年に導入
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">1973年</span><br>
                            第四次中東戦争をきっかけに第一次オイルショック勃発
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            フランスで太陽光発電所が稼働開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">1979年</span><br>
                            イラン革命をきっかけに第二次オイルショック勃発
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            二度のオイルショックにより石油エネルギーへの依存が明瞭に<br>
                            エネルギーの多様化が必須となり、原子力発電所の建設・復旧が世界的に加速
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 2rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_02.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 1.8rem;">
                            1997年に行われた地球温暖化防止京都会議で、<br>
                            二酸化炭素排出量の削減目標などが制定
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 11.1rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_03.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 2rem;">
                            <span class="year">2011年</span><br>
                            東日本大震災・福島第一原子力発電所事故により、<br>
                            エネルギーの安全性が見直され、<br>
                            再生可能エネルギーの導入が加速
                        </div>
                        <div class="challengeEvolutionHistory__node--img" style="margin-top: 4.4rem;">
                            <img src="<?php echo HOME; ?>img/challengeEvolution_history_industry_04.png" alt="">
                        </div>
                        <div class="challengeEvolutionHistory__node--text" style="margin-top: 1.8rem;">
                            2050年カーボンニュートラル宣言により、<br>
                            再生可能エネルギーへの注目が更に高まる
                        </div>
                    </div>
<?php
/*
   ######  ########
  ##       ##     ##
   ######  ########
        ## ##
   ######  ##
*/
?>
                    <div class="sp challengeEvolutionHistory__node">
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            薪炭から石炭へエネルギーの主力が移り変わり、1920年に石炭の割合が過去最高に
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1927年</span>
                            朝鮮平壌無煙炭の販売を目的に(資)電興無煙炭商会を創立
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1929年</span>
                            東京無煙炭(株)へ改組し、練炭の製造販売へ進出
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            ガス事業の普及が拡大し多くのガス事業者が誕生
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1934年</span>
                            品川豆炭(株)を設立し、豆炭の製造販売へ進出
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1936年</span>
                            品川豆炭(株)から品川燃料(株)に商号変更
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            第二次世界大戦以後、国を復興させる重要な産業として、傾斜生産方式が導入。1950年に政府による統制が撤廃され、石炭企業は自由競争市場へ復帰
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1952年</span>
                            石油製品と同器具の販売開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1955年</span>
                            LPガスと同器具の取り扱い開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            原子力の平和的利用が進められ、1951年にアメリカで原子力発電が開始。日本でも1950年代中頃に法律や体制の整備と共に導入
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            LPガスが日本国内の過程用燃料として急速に普及する
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1962年</span>
                            社是「信義」「進取」「楽業」を制定
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1963年</span>
                            東京証券取引所市場第二部に株式上場
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            メタンを主成分とする天然ガスが無公害で理想的なエネルギーとして注目を集め、日本でも1969年に導入
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            <span class="year">1973年</span>
                            第四次中東戦争をきっかけに第一次オイルショック勃発
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            フランスで太陽光発電所が稼働開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            <span class="year">1979年</span>
                            イラン革命をきっかけに第二次オイルショック勃発
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1983年</span>
                            東京証券取引所市場第一部に指定変更
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            二度のオイルショックにより石油エネルギーへの依存が明瞭に。エネルギーの多様化が必須となり、原子力発電所の建設・復旧が世界的に加速
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1991年</span>
                            (株)シナネンゼオミックを設立
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            1997年に行われた地球温暖化防止京都会議で、二酸化炭素排出量の削減目標などが制定
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">1998年</span>
                            品川燃料(株)からシナネン(株)（現シナネンホールディングス(株)）に商号変更
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2004年</span>
                            品川開発(株)（現シナネンエコワーク(株)）が木くずリサイクル施設「千葉リサイクルセンター」の操業開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            <span class="year">2011年</span>
                            東日本大震災・福島第一原子力発電所事故により、エネルギーの安全性が見直され、再生可能エネルギーの導入が加速
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2012年</span>
                            建物総合メンテナンス事業を展開する(株)インデスの全株式を取得
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2014年</span>
                            シナネン(株)が電力販売を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2015年</span>
                            持株会社体制移行によりシナネンホールディングス(株)が誕生
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2017年</span>
                            建物維持管理事業の中核となるタカラビルメン(株)の全株式を取得
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2019年</span>
                            シェアサイクル事業を展開するシナネンモビリティPLUS(株)を設立
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--industry">
                            2050年カーボンニュートラル宣言により、再生可能エネルギーへの注目が更に高まる
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2020年</span>
                            シェアオフィス「seesaw」を立ち上げ、本格稼働を開始
                        </div>
                        <div class="challengeEvolutionHistory__node--text challengeEvolutionHistory__node--company">
                            <span class="year">2022年</span>
                            東京証券取引所プライム市場に移行
                        </div>
                    </div>
                </div>
                <div class="challengeEvolutionHistory__next">
                    次の100年へ
                </div>
            </div>
        </section>

        <ul class="sp challengeEvolutionTab challengeEvolutionTab--bottom flex">
            <li class="challengeEvolutionTab__item flex vcenter hcenter js-challengeEvolution-tab-bottom current" data-tab="history">
                <a href="#spNavTop" class="challengeEvolutionTab__item--link flex vcenter hcenter">これまでの100年</a>
            </li>
            <li class="challengeEvolutionTab__item flex vcenter hcenter js-challengeEvolution-tab-bottom" data-tab="future">
                <a href="#spNavTop" class="challengeEvolutionTab__item--link flex vcenter hcenter">次の100年に向けての<br>取り組み</a>
            </li>
        </ul>

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
                    会社を知る
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
    </div>
</article>
<?php
require_once $include . '_footer.php';
