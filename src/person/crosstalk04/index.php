<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'crosstalk04', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="crosstalk">
        <div class="pc crosstalk__bg crosstalk__bg--left"></div>
        <div class="pc crosstalk__bg crosstalk__bg--right"></div>
<?php
/*
    ##     ## ##     ##
    ###   ### ##     ##
    #### #### ##     ##
    ## ### ## ##     ##
    ##     ##  ##   ##
    ##     ##   ## ##
    ##     ##    ###
*/
?>
        <section class="crosstalkMv">
            <img src="<?php echo HOME; ?>img/crosstalk04_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/crosstalk04_mv.png" alt="" class="sp">
        </section>

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
        <section class="crosstalkIntro">
            <h1 class="crosstalkIntro__head notos js-in anime text-line-in">
                <div class="crosstalkIntro__head--wrapper">
                    <div class="anime__wrapper">
                        <div class="crosstalkIntro__head--inner flex vcenter js-in anime text-in wave3">
                            社長×若手社員
                        </div>
                    </div>
                </div>
            </h1>
            <div class="wrap w1200 sp-wrap">
                <ul class="crosstalkIntro__list pc-flex aro">
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave1">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk04_member_01.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">代表取締役社長</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">山﨑 正毅</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス株式会社
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave2">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk04_member_02.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">2021年入社</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">R.Inaba</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス株式会社
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave3">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk04_member_03.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">2021年入社</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">Y.Tano</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス
                            </div>
                        </div>
                    </li>
                </ul>
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
        <section class="crosstalkSec">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        「個」の成長が重要。<br>
                        会社だけでなく、自分自身の人生の舵を手放さず、<br class="pc">未来を切り拓いていく人が活躍できるシナネンホールディングスグループへ
                    </div>
                    <div class="sp js-in anime left-in">
                        「個」の成長が重要。<br>
                        会社だけでなく、自分自身の人生の舵を手放さず、<br class="pc">未来を切り拓いていく人が活躍できるシナネンホールディングスグループへ
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk pc-2">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_02.png" alt="">
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                社長はこれまでどのようなキャリアを歩んでこられましたか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_ceo.png" alt="">
                                山崎
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私がシナネンホールディングスの代表取締役社長に就任したのが2019年のことでしたね。それまでは、大学卒業後はずっと外資系の企業に勤めていました。保険会社に7年間勤めていたとき、アメリカの本社で3年間過ごしたこともあります。その後は、アメリカのウォルト・ディズニー社で約5年間勤め、世界的に有名なコンソールのゲーム機を展開するゲームメーカー、大手日系企業の鉄鉱石を取り扱う企業などを経て今に至ります。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_01.png" alt="">
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                すごいですね。では、ほとんどのキャリアを海外で過ごされたのですね。社長が私たちのような若手時代に苦労したことはありますか？
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert pc-1">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk04_sec_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_ceo.png" alt="">
                                山崎
                            </div>
                            <div class="">
                            <p class="crosstalkSec__talk--text">
                                仕事上の苦労でいうと、ディズニーの研修は大変でした。ディズニーの研修は世界的にも有名で、日本でも人材育成に関する著述がありますよね。もちろん、こんなに楽しい研修でいいのかな？と思うようなこともありますが、シンガポールで3~40名ほど集まって開催された擬似会社経営を体験する研修には驚きました。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                内容は5つほどのグループに分かれて、あらかじめ与えられた情報や条件設定のある「架空の会社」を経営するというものなんだけど、直面している課題なども決められていて、それぞれ自分の役割も割り振られます。
                            </p>
                            </div>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_01.png" alt="">
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                それはとても複雑そうな研修ですね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_ceo.png" alt="">
                                山崎
                            </div>
                            <div class="">
                            <p class="crosstalkSec__talk--text">
                                そうだよ。すべてまとめたものを資料として渡されるんだけど、私の役は「科学技術者」。よりによってさらに難しいそうな役だよね。翌日、インプットした内容をもとにディスカッションするんだけど、資料はすべて英語で書かれているし、その上専門用語も多い。~40名ほど集まって開催された擬似会社経営を体験する研修には驚きました。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                でも、全て覚えていかなければ研修は受けられないし周りの迷惑にもなってしまうという状況でね。夜、辞書を引きながら必死で覚えましたよ。そのときは本当に嫌だ、日本に帰りたいと思いましたね。あのときは確か、32歳頃だったかな。
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="crosstalkSec__separate">
            <div class="wrap w1200 sp-wrap">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/crosstalk04_sec.png" alt=""><br>
                </span>
            </div>
        </div>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_02.png" alt="">
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                社長にも投げ出したくなるほど大変なことがあったんですね。逆に、嬉しかったことは何ですか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_ceo.png" alt="">
                                山崎
                            </div>
                            <div class="">
                            <p class="crosstalkSec__talk--text">
                                やはり海外は多様性を認める文化が進んでいると思いましたね。日本は島国で同民族が同じ言葉で話し、同じ歴史を共有しているからか、一つの事柄や言葉に対しての受け取り方に大きな違いが見られない傾向にある。けれど、海外は全然違うんですよ。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                例を挙げると、海外の会議ではよく質問に対して「Good question」と声をかけるシーンが頻繁です。それを初めのうちは、なぜそんな当たり前のことを聞くのだろうと不思議に思っていましたが、後にそれがとても大切なことだと気付かされました。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                人間だから、意見や考え方が違うのは当然のことであって、質問をした人は自分と相手との意見の違いを踏まえた上で、本当に分からないから真意を確認したくて質問しているんです。日本なら塞ぎ込んだままにするような質問も、あえて声に出しているんですね。
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk04_sec_02.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_01.png" alt="">
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうすると一人ひとりが会議に主体的に参加する姿勢や雰囲気にも繋がりますし、一歩踏み込んだ質問からさらにアイデアが膨らむこともあるので、建設的で有意義な会議だと感じます。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_02.png" alt="">
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そういった社長の過去の経験からも、今シナネンHDグループに「風土改革」が必要だと感じているのですね？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_ceo.png" alt="">
                                山崎
                            </div>
                            <div class="">
                            <p class="crosstalkSec__talk--text">
                                そうですね。今は「心理的安全性」ということもキーワードに掲げて、社員一人ひとりが過剰なストレスを受けることなく、自分らしさを大切にしながら、相手と認め合えるような組織作りを進めています。それによって、社員間の上下関係の縛りが緩やかになり、一方的な会議ではなく、互いにディスカッションができるような会議に変わってきたかなという印象があります。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                風土改革は「個人」が成長していくことが一番重要と考えています。もちろん、個人の成長が会社の成長に繋がります。でも、自分が成長していければ、人生の舵を手放さず、他人に左右されない自分だけの人生を切り拓いていけるはずです。そうなってくると、仕事も自然とおもしろくなってくると思うんです。誰かにいわれてやる仕事よりも、自分が「やりたい」と思えることに力を注いでほしい。それは決して仕事だけでなく、プライベートもです。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                月曜日から金曜日まで良い時間の過ごし方ができれば、週末は仕事のことを忘れてめいっぱい楽しい時間を過ごすことも大切です。自分の人生だから、社員一人ひとりに楽しい人生を送ってほしいと思っています。
                            </p>
                            </div>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_01.png" alt="">
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                最後に、どんな人に入社してもらいたいですか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk04_talk_ceo.png" alt="">
                                山崎
                            </div>
                            <div class="">
                            <p class="crosstalkSec__talk--text">
                                そうですね。まずは多様性を重要視する人。一つの事柄に対して、あらゆる心の目を持ち、人や自分自身をも見つめられる人ですね。そして、自分の目標をしっかり持っている人。将来像を描ける人は、そこに突き進んでいくことができますし、そのパワーは計り知れません。
                            </p>
                            <p class="crosstalkSec__talk--text">
                                私たちはそんなやる気のある社員をもっともっと増やして、「この会社にいれば自分のやりたいことができる」、「成長できる」と感じてもらい、みんなの能力が発揮できる会社にしていきたいと考えています。
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="crosstalkSec__note">
                    ※掲載内容は2022年5月時点のものです。
                </p>
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
        <section class="crosstalkFooter">
            <div class="wrap w1200 sp-wrap">
                <div class="crosstalkFooter__entry js-in anime bottom-in">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
