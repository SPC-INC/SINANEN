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

    <div class="topMessage">
        <div class="pc topMessage__bg"></div>
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
        <section class="topMessageIntro">
            <div class="wrap w1200 sp-wrap">
                <p class="topMessageIntro__text">
                    若手社員が、社長の描くシナネンHDグループの未来や、今、社長に聞いてみたいことをインタビューしました。
                </p>
                <div class="topMessageIntro__img">
                    <img src="<?php echo HOME; ?>img/topMessage_intro.png" alt="" class="pc">
                    <img src="<?php echo HOME; ?>img/topMessage_intro_sp.png" alt="" class="sp">
                </div>
            </div>
        </section>

<?php
/*
    ##     ## ######## ##     ## ########  ######## ########
    ###   ### ##       ###   ### ##     ## ##       ##     ##
    #### #### ##       #### #### ##     ## ##       ##     ##
    ## ### ## ######   ## ### ## ########  ######   ########
    ##     ## ##       ##     ## ##     ## ##       ##   ##
    ##     ## ##       ##     ## ##     ## ##       ##    ##
    ##     ## ######## ##     ## ########  ######## ##     ##
*/
?>
        <section class="topMessageMember">
            <div class="wrap w1200 sp-wrap">
                <div class="topMessageMember__container pc-flex bet">
                    <div class="topMessageMember__ceo flex vcenter">
                        <div class="topMessageMember__ceo--img">
                            <img src="<?php echo HOME; ?>img/topMessage_ceo.png" alt="">
                        </div>
                        <div class="topMessageMember__ceo--text">
                            <div class="topMessageMember__ceo--pos">
                                代表取締役社長
                            </div>
                            <div class="topMessageMember__ceo--name notos">
                                山﨑 正毅
                            </div>
                        </div>
                    </div>
                    <ul class="topMessageMember__member flex bet">
                        <li class="topMessageMember__member--item">
                            <div class="topMessageMember__member--img">
                                <img src="<?php echo HOME; ?>img/topMessage_member_01.png" alt="">
                            </div>
                            <div class="topMessageMember__member--text">
                                2021年入社<br>
                                稲葉 琉佳<br>
                                シナネンホールディングス株式会社
                            </div>
                        </li>
                        <li class="topMessageMember__member--item">
                            <div class="topMessageMember__member--img">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                            </div>
                            <div class="topMessageMember__member--text">
                                2021年入社<br>
                                田野 葉子<br>
                                シナネン株式会社
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

<?php
/*
    #### ##    ## ######## ######## ########  ##     ## #### ######## ##      ##
     ##  ###   ##    ##    ##       ##     ## ##     ##  ##  ##       ##  ##  ##
     ##  ####  ##    ##    ##       ##     ## ##     ##  ##  ##       ##  ##  ##
     ##  ## ## ##    ##    ######   ########  ##     ##  ##  ######   ##  ##  ##
     ##  ##  ####    ##    ##       ##   ##    ##   ##   ##  ##       ##  ##  ##
     ##  ##   ###    ##    ##       ##    ##    ## ##    ##  ##       ##  ##  ##
    #### ##    ##    ##    ######## ##     ##    ###    #### ########  ###  ###
*/
?>
        <section class="topMessageInterview">
            <div class="pc topMessageInterview__bg topMessageInterview__bg--1"></div>
            <div class="wrap w1200 sp-wrap">
                <h2 class="topMessageInterview__head notos">
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ
                </h2>
                <div class="topMessageInterview__wrapper pc-flex">
                    <div class="topMessageInterview__img">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/topMessage_interview_01.png" alt="">
                        </span>
                    </div>
                    <div class="topMessageInterview__text">
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_01.png" alt="">
                                田野
                            </div>
                            <p class="topMessageInterview__talk--text">
                                社長はこれまでどのようなキャリアを歩んでこられましたか？
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                                山﨑社長
                            </div>
                            <p class="topMessageInterview__talk--text">
                                私がシナネンホールディングスの代表取締役社長に就任したのが2019年のことでしたね。それまでは、大学卒業後はずっと外資系の企業に勤めていました。保険会社に7年間勤めていたとき、アメリカの本社で3年間過ごしたこともあります。その後は、アメリカのウォルト・ディズニー社で約5年間勤め、世界的に有名なコンソールのゲーム機を展開するゲームメーカー、大手日系企業の鉄鉱石を取り扱う企業などを経て今に至ります。
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                                稲葉
                            </div>
                            <p class="topMessageInterview__talk--text">
                                すごいですね。では、ほとんどのキャリアを海外で過ごされたのですね。社長が私たちのような若手時代に苦労したことはありますか？
                            </p>
                        </div>
                    </div>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                        山﨑社長
                    </div>
                    <div class="">
                        <p class="topMessageInterview__talk--text">
                            仕事上の苦労でいうと、ディズニーの研修は大変でした。ディズニーの研修は世界的にも有名で、日本でも人材育成に関する著述がありますよね。もちろん、こんなに楽しい研修でいいのかな？と思うようなこともありますが、シンガポールで3~40名ほど集まって開催された擬似会社経営を体験する研修には驚きました。
                        </p>
                        <p class="topMessageInterview__talk--text">
                            内容は5つほどのグループに分かれて、あらかじめ与えられた情報や条件設定のある「架空の会社」を経営するというものなんだけど、直面している課題なども決められていて、それぞれ自分の役割も割り振られます。
                        </p>
                    </div>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        稲葉
                    </div>
                    <p class="topMessageInterview__talk--text">
                        それはとても複雑そうな研修ですね。
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                        山﨑社長
                    </div>
                    <div class="">
                        <p class="topMessageInterview__talk--text">
                            そうだよ。すべてまとめたものを資料として渡されるんだけど、私の役は「科学技術者」。よりによってさらに難しいそうな役だよね。翌日、インプットした内容をもとにディスカッションするんだけど、資料はすべて英語で書かれているし、その上専門用語も多い。~40名ほど集まって開催された擬似会社経営を体験する研修には驚きました。
                        </p>
                        <p class="topMessageInterview__talk--text">
                            でも、全て覚えていかなければ研修は受けられないし周りの迷惑にもなってしまうという状況でね。夜、辞書を引きながら必死で覚えましたよ。そのときは本当に嫌だ、日本に帰りたいと思いましたね。あのときは確か、32歳頃だったかな。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="topMessageInterview__separate">
            <span class="js-in anime slideImg">
                <img src="<?php echo HOME; ?>img/topMessage_interview.png" alt="">
            </span>
        </div>

        <section class="topMessageInterview">
            <div class="pc topMessageInterview__bg topMessageInterview__bg--2"></div>
            <div class="wrap w1200 sp-wrap">
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_01.png" alt="">
                        田野
                    </div>
                    <p class="topMessageInterview__talk--text">
                        社長にも投げ出したくなるほど大変なことがあったんですね。逆に、嬉しかったことは何ですか？
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                        山﨑社長
                    </div>
                    <div class="">
                        <p class="topMessageInterview__talk--text">
                            やはり海外は多様性を認める文化が進んでいると思いましたね。日本は島国で同民族が同じ言葉で話し、同じ歴史を共有しているからか、一つの事柄や言葉に対しての受け取り方に大きな違いが見られない傾向にある。けれど、海外は全然違うんですよ。
                            </p>
                            <p class="topMessageInterview__talk--text">
                                例を挙げると、海外の会議ではよく質問に対して「Good question」と声をかけるシーンが頻繁です。それを初めのうちは、なぜそんな当たり前のことを聞くのだろうと不思議に思っていましたが、後にそれがとても大切なことだと気付かされました。
                            </p>
                            <p class="topMessageInterview__talk--text">
                                人間だから、意見や考え方が違うのは当然のことであって、質問をした人は自分と相手との意見の違いを踏まえた上で、本当に分からないから真意を確認したくて質問しているんです。日本なら塞ぎ込んだままにするような質問も、あえて声に出しているんですね。
                        </p>
                    </div>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        稲葉
                    </div>
                    <p class="topMessageInterview__talk--text">
                        そうすると一人ひとりが会議に主体的に参加する姿勢や雰囲気にも繋がりますし、一歩踏み込んだ質問からさらにアイデアが膨らむこともあるので、建設的で有意義な会議だと感じます。
                    </p>
                </div>
                <div class="topMessageInterview__wrapper pc-flex">
                    <div class="topMessageInterview__img pc-2">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/topMessage_interview_02.png" alt="">
                        </span>
                    </div>
                    <div class="topMessageInterview__text pc-1">
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_member_01.png" alt="">
                                田野
                            </div>
                            <p class="topMessageInterview__talk--text">
                                そういった社長の過去の経験からも、今シナネンHDグループに「風土改革」が必要だと感じているのですね？
                            </p>
                        </div>
                        <div class="topMessageInterview__talk flex vcenter">
                            <div class="topMessageInterview__talk--img flex vert vcenter">
                                <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                                山﨑社長
                            </div>
                            <div class="">
                                <p class="topMessageInterview__talk--text">
                                    そうですね。今は「心理的安全性」ということもキーワードに掲げて、社員一人ひとりが過剰なストレスを受けることなく、自分らしさを大切にしながら、相手と認め合えるような組織作りを進めています。それによって、社員間の上下関係の縛りが緩やかになり、一方的な会議ではなく、互いにディスカッションができるような会議に変わってきたかなという印象があります。
                                </p>
                                <p class="topMessageInterview__talk--text">
                                    風土改革は「個人」が成長していくことが一番重要と考えています。もちろん、個人の成長が会社の成長に繋がります。でも、自分が成長していければ、人生の舵を手放さず、他人に左右されない自分だけの人生を切り拓いていけるはずです。そうなってくると、仕事も自然とおもしろくなってくると思うんです。誰かにいわれてやる仕事よりも、自分が「やりたい」と思えることに力を注いでほしい。それは決して仕事だけでなく、プライベートもです。
                                </p>
                                <p class="topMessageInterview__talk--text">
                                    月曜日から金曜日まで良い時間の過ごし方ができれば、週末は仕事のことを忘れてめいっぱい楽しい時間を過ごすことも大切です。自分の人生だから、社員一人ひとりに楽しい人生を送ってほしいと思っています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_member_02.png" alt="">
                        稲葉
                    </div>
                    <p class="topMessageInterview__talk--text">
                        最後に、どんな人に入社してもらいたいですか？
                    </p>
                </div>
                <div class="topMessageInterview__talk flex vcenter">
                    <div class="topMessageInterview__talk--img flex vert vcenter">
                        <img src="<?php echo HOME; ?>img/topMessage_ceo_interview.png" alt="">
                        山﨑社長
                    </div>
                    <div class="">
                        <p class="topMessageInterview__talk--text">
                            そうですね。まずは多様性を重要視する人。一つの事柄に対して、あらゆる心の目を持ち、人や自分自身をも見つめられる人ですね。そして、自分の目標をしっかり持っている人。将来像を描ける人は、そこに突き進んでいくことができますし、そのパワーは計り知れません。
                        </p>
                        <p class="topMessageInterview__talk--text">
                            私たちはそんなやる気のある社員をもっともっと増やして、「この会社にいれば自分のやりたいことができる」、「成長できる」と感じてもらい、みんなの能力が発揮できる会社にしていきたいと考えています。
                        </p>
                    </div>
                </div>
                <div class="topMessageInterview__separate">
                    <span class="js-in anime slideImg">
                        <img src="<?php echo HOME; ?>img/topMessage_interview_03.png" alt="">
                    </span>
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
                        シナネンHDグループの<br class="sp">挑戦と進化
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
