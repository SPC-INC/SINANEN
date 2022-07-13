<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'crosstalk01', // ページ判別フラグ
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
            <img src="<?php echo HOME; ?>img/crosstalk01_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/crosstalk01_mv_sp.png" alt="" class="sp">
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
                            トレーナー×トレーニー
                        </div>
                    </div>
                </div>
            </h1>
            <div class="wrap w1200 sp-wrap">
                <ul class="crosstalkIntro__list pc-flex bet">
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave1">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_01.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">2020年入社</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">T.Obara</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                タカラビルメン株式会社<br>
                                経営企画本部<br>
                                町田営業所
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave2">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_02.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">2019年入社</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">S.Yamagami</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                株式会社インデス<br>営業1部 PMチーム
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave3">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_03.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">2017年入社</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">T.Mizuta</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンモビリティPLUS株式会社<br>
                                事業運営部
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave4">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk01_member_04.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile">
                            <div class="crosstalkIntro__profile--year">2015年入社</div>
                            <div class="crosstalkIntro__profile--name notos flex vend">
                                <div class="crosstalkIntro__profile--ja">K.Honda</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネン株式会社<br>
                                石油事業本部<br>
                                供給管理部 供給チーム
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
                        シナネンホールディングスの<br>心強いトレーナー×トレーニー制度
                    </div>
                    <div class="sp js-in anime left-in">
                        シナネンホールディングスの<br>心強いトレーナー×トレーニー制度
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                こうやってかつてのトレーナー×トレーニーペアが集まって当時のことを振り返る機会があまりないので今回はちょっと楽しみにしてきました（笑）。Oさんとは今は配属が違ってもよく連絡を取り合っているので、久しぶりな感覚はないですね。せっかくなのでお互いの第一印象を聞いてみたいです。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私がYさんと初めて会ったときの印象は、かっこいい人だと思いました！当初、私は一人暮らしを検討していて、Yさんは住宅関連の職務ということもあり、家を一緒に探してくれましたし、家を選ぶ際に気を付けるべき点やどんな家にしたらいいかを私が聞くと何でも答えてくれました。それにYさんは一緒にいるとき、仕事の電話が絶えず、バリバリ働いている印象でした。私も1年後にはYさんのようにスマートに仕事をこなせるのかな？と思ったことも覚えています。
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk01_sec_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そんなこともあったね。その当時は営業の引き継ぎなどいろいろと業務が重なっている時期だったんです。そんな中、Oさんのトレーナー担当になりましたが、Oさんはとても明るくて元気すぎるぐらいでした！（笑）底知れぬパワーを感じるものがあって何かを成し遂げるというような期待を感じさせてくれる人でした。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私はMさんと初めて会ったとき、体育会系の元気の良さそうな人だと思いました！始業時にエレベーター前で見かけた人全員に「おはようございます！」と挨拶を欠かさないことも好印象でした。
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk01_sec_02.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私のHさんの印象は、男前で、しっかりしていてかっこいい。それと、私はHさんとは入社年は違いますが同い年なので勝手に親近感を抱いていましたね。トレーナーが同い年ということで、初めからHさんには心をオープンにできましたし、頼れる兄貴のような感覚がありました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                トレーナーとトレーニーの関係は一度関係性ができあがれば長く付き合うものだから、そういうふうに思ってもらえると嬉しいです。シナネンホールディングスでは、入社後は必ずこの制度があるため安心感に繋がりますよね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                事前にトレーナー、トレーニーのそれぞれの心構えを学ぶ研修もあるから教えるとはどういうことか、教わる際に大切な姿勢とは？といったことを体系的にいろいろ習得できることも勉強になりました。
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        相手を思いやるコミュニケーションが<br>
                        強固な信頼関係を築く
                    </div>
                    <div class="sp js-in anime left-in">
                        相手を思いやるコミュニケーションが<br>
                        強固な信頼関係を築く
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私も最近、トレーナーとしての役割を担う機会があったのですが、指導する際に心がけていたことは何ですか？
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__img pc-1 flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk01_sec_03.png" alt="">
                        </span>
                    </div>
                    <div class="crosstalkSec__talk pc-2">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                トレーニーの意見に耳を傾けることかな。トレーナーが一方的に指導するのではなく、トレーニーの声に耳を傾け、相手がどんな意図をもって行動を起こしたのか、何がしたいのかを聞く。そうすることによって、相互のコミュニケーションが成り立ち、的確なアドバイスに繋がると考えています。その積み重ねが、トレーニーとの信頼関係を生み出せると思っています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私が心がけていたのは、プライベートと仕事のラインをしっかりと切り分けることです。この会社は社員同士の距離感が近く、アットホームな雰囲気がいいなと思っています。でも、社会人としてのマナーや真摯に仕事に取り組む姿勢は大切です。仕事は厳しく教えて、プライベートで飲みに行く際はざっくばらんに楽しむというように、オンオフを切り替えることを心がけていました。仕事に対する真摯さが欠落してしまう瞬間が出てこないよう、その点は意識していましたね。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                ありがとうございます。Yさんは頼り甲斐のある先輩で、どんな些細なことも一人で悩まずにまずは相談してほしいといつも伝えてくれたことに感謝しています。私自身もオンオフを切り替えることで目の前のことに打ち込め、安心して仕事を覚えていくことができました。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="crosstalkSec__separate">
            <div class="wrap w1200 sp-wrap">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/crosstalk01_sec.png" alt=""><br>
                </span>
            </div>
        </div>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        仕事における大切な姿勢や考え方を<br>
                        互いに学び合う
                    </div>
                    <div class="sp js-in anime left-in">
                        仕事における大切な姿勢や考え方を<br>
                        互いに学び合う
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                トレーニーとして、印象に残っていることはありますか。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は初期配置で、Yさんと同じくインデスに出向していたのですが、半年経つ頃にタカラビルメンに出向になったんです。トレーナーとトレーニーという関係が解消されることはなかったのですが、突然の辞令だったこともあり内心はとても心細く不安でした。そんな中、数名のメンバーとともにプライベートで行ったゴルフ旅行の際、宿泊先でYさんが「寂しいと思うけど頑張れ。応援してるぞ」と言ってくれたんです。あと「いつも厳しくしてごめんな」とも…。Yさんの気持ちが本当に嬉しくて、新天地でも頑張ろうと思えました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                なんだか恥ずかしいな（笑）。Oさんがタカラビルメンに異動するタイミングは、グループ間でまだタカラビルメンへの出向者がいない時期だったんですよね。これから社内の基盤を整えていかなくてはならないという責任も背負うので、単なる異動とはまた少し違う感じだったと思います。そんな中、Oさんは1年目でその責任を背負うことに不安も感じていたのではないでしょうか。私はその時ふと、Oさんに対してもう少し何かできることがあったのではないかと自問自答することもありました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                なんだか相思相愛で泣けるエピソードですね。私は日頃からHさんの仕事に対する姿勢に刺激を受けていました。私は毎朝Hさんの指導のもと、為替や原油高、世界情勢などを調査して、それに対する見解や今後の動向を自分なりにまとめて報告することを行っていました。Hさん自身はこれを新人時代から行っていたようで、周囲の先輩から「本田は優秀だ」と聞いていましたが、仕事がデキる要因はこういった努力の積み重ねであると感じさせられました。Hさんは仕事に対する姿勢が細やかで、いかに準備をするかということに重きを置いている方です。石油事業の仕事は世の中の動きが商売に大きく関連する側面が大きいため、多くの情報を取り入れ、なおかつ先見性をもって取り組むことがキーとなります。私の現在の仕事に対する姿勢や基盤は、Hさんとのトレーニング時代に培った部分が大きいと思っています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そんなことがあったんですね！Mさんも毎日報告を絶やさずに頑張っていたんですね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                正直毎朝必死でしたよ（笑）。通勤の電車の中でニュースを調べて考えて、Hさんにいざ報告すると、調べただけのことはお見通しで、そこから何を感じたか、考えたかの深掘りがありました。当時はすごく辛かったですけど、そのおかげで知識が身ついていくのを実感していました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私たちの所属していた供給チームは、シナネンホールディングスグループの石油の大元となる仕入れ部門だったので、仕事の緊張感を常に持っていてほしいと考えていました。Mさんが毎日そうやって考えてきてくれることに私自身も刺激を受けていたんですよね。トレーニーがこんなにも一生懸命取り組んでくれるから、私も頑張ろうと思えました。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        この先も共に歩み続ける同志として
                    </div>
                    <div class="sp js-in anime left-in">
                        この先も共に歩み続ける同志として
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                シナネンホールディングスグループのトレーナー×トレーニー文化はお互いにとっての良い成長や気づきの機会になっていますよね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね。私とMさんはよく仕事中に互いの意見を遠慮せずに伝え合うようにしていました。そういった関係性はより良い仕事をする上でとても大切なことだと思います。トレーナーとトレーニーという関係では私が何かを教える立場でしたが、勤務歴が長くなると同じフィールドで切磋琢磨する同志であり、ライバルのような関係になるものだと感じます。それにMさんはちゃんと自分の意見を持っていて、ガッツがある。過去にはオフィスなどでバチバチに言い合いをしたこともありましたよね（笑）。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね（笑）。私も当初、仕事を覚えていく段階で、身近な先輩がこんなにも仕事ができるのに、なぜ自分はできないんだろうという悔しい思いもありました。でも、自分の意見もきちんと伝えたかったのでHさんには包み隠さずに気持ちをぶつけたこともあります。そういったときも全部話を聞いて気持ちを理解してくれて嬉しかったです。また、自分が今トレーナーを経験して、通常業務だけでも手一杯なのに、Hさんはトレーニーのことをよく気にかけて見てくれていたんだなと実感しています。Hさんの仕事に対する姿勢を改めて、本当に尊敬しています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私もOさんの現在の活躍ぶりを素直にすごいと感じています。全体集会などで、多くの人を前に事業部の財務報告をしている姿を見て、本当にプレゼンがうまくて驚きました。あの時はまるでどこかの政治家のような佇まいだったよ！プレゼンだけじゃなく、Oさんはもともと人とコミュニケーションを取るのがうまく、トレーナーの私からすると自慢できる後輩です。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                Yさんにそう言われると嬉しいです！こうやって当時を振り返り、お互いの近況を知ると刺激になってより一層仕事に励もうという気持ちになれますね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                今後もシナネンホールディングスグループという一つのチームメンバーとしてお互いに切磋琢磨しながら頑張りましょう！これからもよろしくお願いします！
                            </p>
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
    ########     ###    ########    ###
    ##     ##   ## ##      ##      ## ##
    ##     ##  ##   ##     ##     ##   ##
    ##     ## ##     ##    ##    ##     ##
    ##     ## #########    ##    #########
    ##     ## ##     ##    ##    ##     ##
    ########  ##     ##    ##    ##     ##
*/
?>
        <section class="crosstalkData">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkData__head anime__wrapper">
                    <div class="pc js-in anime text-in">
                        インタビューメンバーの経歴
                    </div>
                    <div class="sp js-in anime left-in">
                        インタビューメンバーの経歴
                    </div>
                </h2>
                <ul class="crosstalkData__list">
                    <?php
                    $arrMember = array(
                        '01' => array(
                            'name' => 'T.Obara',
                            'desc' => '2020年に入社し、株式会社インデスにて集合住宅の設備工事、メンテナンスの現場管理を経験。2020年10月よりタカラビルメン新規営業部、2021年4月よりBM事業本部にて営業を経験し、2022年4月からはタカラビルメン町田営業所の経営企画本部にて営業から事業所の立ち上げまで幅広く従事。',
                        ),
                        '02' => array(
                            'name' => 'S.Yamagami',
                            'desc' => '2019年に入社して以来3年間株式会社インデスに所属。サービス部にて現場管理の経験を積み、2020年1月からは営業一部PMチームに移動。現在は賃貸物件の管理を行っている管理会社の窓口となり空室物件の現状回復工事や不具合の調整を行っている。',
                        ),
                        '03' => array(
                            'name' => 'T.Mizuta',
                            'desc' => '2017年に入社後、シナネン株式会社に配属され、石油の受発注、供給に関する業務を経験。2018年4月にシナネンサイクル株式会社シェアサイクル事業部での業務を経て、2019年シナネンモビリティ＋株式会社営業部に異動。2022年からは同社事業運営部に所属。',
                        ),
                        '04' => array(
                            'name' => 'K.Honda',
                            'desc' => '2015年に入社して以来シナネン株式会社に所属。ソリューション事業本部営業企画部受発注チーム、供給部供給チーム、石油事業部 広域営業 第一チ－ムと石油に関する業務を行い、現在も供給管理部 供給チームにてタンクオペレーションや石油の仕入れに関する交渉を行っている。',
                        ),
                    );
                    foreach ($arrMember as $key =>  $val) {
                        ?>
                    <li class="crosstalkData__item">
                        <dl class="crosstalkData__profile">
                            <dt class="crosstalkData__profile--name notos">
                                <?php echo $val['name']; ?>
                            </dt>
                            <dd class="crosstalkData__profile--desc">
                                <?php echo $val['desc']; ?>
                            </dd>
                        </dl>
                    </li>
                    <?php
                    } ?>
                </ul>
                <div class="crosstalkData__more">
                    <a href="<?php echo HOME; ?>person/" class="crosstalkData__btn md-btn red">
                        インタビュー一覧へ
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.493 6.909" class="icon">
                            <g id="コンポーネント_13_1" data-name="コンポーネント 13 – 1" transform="translate(0.5 0.683)">
                                <line id="線_11" data-name="線 11" x2="70.309" transform="translate(0 5.542)" fill="none" stroke-linecap="round" stroke-width="1" />
                                <line id="線_12" data-name="線 12" x2="9.573" y2="5.543" transform="translate(60.736)" fill="none" stroke-linecap="round" stroke-width="1" />
                            </g>
                        </svg>
                    </a>
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
