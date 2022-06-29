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
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2020年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">G.Obara</div>
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
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2019年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
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
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2017年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
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
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2015年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
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
                        身近で頼れる兄貴のような先輩トレーナー
                    </div>
                    <div class="sp js-in anime left-in">
                        身近で頼れる兄貴のような先輩トレーナー
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
                                こうやってかつてのトレーナー×トレーニーペアが集まって当時のことを振り返る機会があまりないので今回はちょっと楽しみにしてきました（笑）。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                わかります！でも、今は配属が違ってもよく連絡を取り合っているので久しぶりな感覚はないですね。せっかくなのでお互いの第一印象の話を聞いてみたいです。
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
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                いいね！私は水田さんと初めて会ったとき、体育会系の元気の良さそうな人だと思いましたよ！始業時にエレベーター前で見かけた人にも自ら進んで「おはようございます！」と挨拶を欠かさないことも好印象でした。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                ありがとうございます！！私は本田さんのことは男前でかっこいいと思っていました。あと私は本田さんとは入社年は違いますが同い年なので勝手に親近感を抱いていましたね。
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
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私が山上さんと初めて会ったときの印象は、かっこいい。山上さんは1年先輩でしたが一緒にいるときは仕事の電話が絶えず、バリバリ働いている印象でした。私も1年後には山上さんのようにスマートに仕事をこなせるのかな？と思ったことも覚えています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうだったんだね！小原さんはとても明るくて元気すぎるぐらいでしたよ！（笑）底知れぬパワーを感じるものがあって何かを成し遂げるというような期待を感じさせてくれる人でした。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                それぞれいろんな印象を持っていたんだね！他社だと若手の育成は年次の長い社員やマネージャークラスが担当することも少なくないらしいけれど、今回の私たちの場合、年齢が近いということもあり、初めからお互いに心をオープンにして受け入れ合える雰囲気があったのかもしれないですね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね。身近で頼れるアニキのような先輩がいて私の場合は良かったと思います。
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        相手を思いやるコミュニケーションが<br>
                        互いの成長の種となる
                    </div>
                    <div class="sp js-in anime left-in">
                        相手を思いやるコミュニケーションが<br>
                        互いの成長の種となる
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
                                私も最近、トレーナーとして新人担当になる機会があったのですが、指導する際に心がけていたことは何ですか？
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
                                トレーニーの意見に耳を傾けることかな。トレーナーが一方的に指導するのではなく、トレーニーがどんな意図をもって行動を起こしたのか、何がしたいのかを聞くことによって相互のコミュニケーションが成り立ってトレーニーへの的確なアドバイスに繋がると思っています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は社会人としてのマナーや仕事は厳しく教えていましたが、プライベートで飲みに行く際はオンオフを切り分けてざっくばらんに楽しむことを心がけていました。小原さんは人懐こくて人当たりも良いので、切替をすることで慣れ合いになるのを防ぎました。仕事に対する真摯さが欠落してしまう瞬間が出てこないようその点は意識していましたね。
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
                                ありがとうございます。山上さんは頼り甲斐のある先輩で、どんな些細なことも一人で悩まずにまずは相談してほしいといつも伝えてくれたことに感謝しています。私自身もオンオフを心地よく切り替えながら過ごせたおかげで自分らしくいられて安心して仕事を覚えていけました。
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
                        トレーナーから教わったことは<br>
                        すべて今に繋がっている
                    </div>
                    <div class="sp js-in anime left-in">
                        トレーナーから教わったことは<br>
                        すべて今に繋がっている
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
                                じゃあ次は、トレーニング中に印象に残っていることを聞いてみたいですね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                じつは私は初め、山上さんと同じインデスに所属していたのですが、半年経つ頃にタカラビルメンに出向になったんです。トレーナーとトレーニーという関係が解消されることはなかったのですが、突然の辞令だったこともあり内心はとても心細く不安でした。そんな中、数名のメンバーとともにプライベート行ったゴルフ旅行の際、宿泊先で山上さんが「寂しいと思うけど頑張れ。応援してるぞ」と言ってくれたんです。あと「いつも厳しくしてごめんな」とも……。山上さんの気持ちが本当に嬉しくて、新天地でも頑張ろうと思えました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                なんだか恥ずかしいな（笑）。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は日頃から本田さんの仕事に対する姿勢に刺激を受けていました。毎朝、為替や原油高、世界情勢などを調査して、それに対する見解や今後の動向を自分なりにまとめて報告することを徹底していました。本田さん自身はこれを新人時代から行っていたようで本田さんの優秀さの要因はこういった努力の積み重ねであると感じさせられました。私の現在の仕事に対する姿勢は、本田さんとのトレーニング時代に培った部分が大きいと思っています。
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
                        互いの成長や気づきを促す<br>
                        ライバルのような存在
                    </div>
                    <div class="sp js-in anime left-in">
                        互いの成長や気づきを促す<br>
                        ライバルのような存在
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
                                シナネンのトレーナー×トレーニー文化はお互いにとっての良い成長や気づきの機会になっていますよね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね。私と水田さんはよく仕事中に互いの意見を遠慮せずに伝え合うようにしていましたね。そういった関係性はより良い仕事をする上でとても大切なことだと思います。私は水田さんを良きライバルのように感じていたのかもしれません。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_03.png" alt=""><br>
                                Mさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                ありがとうございます。私も当初、仕事を覚えていく段階だったので、身近な先輩がこんなにも仕事ができるのに、なぜ自分はできないんだろうという悔しい思いもありました。でも、それも必要なステップであったと振り返っています。また、自分が今トレーナーを経験して、通常業務だけでも慌ただしい中、本田さん達は私たちトレーニーのことをよく気遣ってくれたのだと分かり、すごいと思いました！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_01.png" alt=""><br>
                                Oさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですよね。私たちも今やシナネンHDを担う人材としていろいろなことに挑戦しています。こうやって当時を振り返り、お互いの近況を知ると刺激になってより一層仕事に励もうという気持ちになれますね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk01_talk_04.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                今後もシナネンHDグループの一つのチームとしてお互いに切磋琢磨しながら頑張りましょう！
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
                <h2 class="crosstalkData__head notos anime__wrapper">
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
                            'name' => 'G.Obara',
                            'desc' => '2020年に入社し、株式会社インデスにて集合住宅の設備工事、メンテナンスの現場管理を経験。2020年10月よりタカラビルメン新規営業部、2021年4月よりBM事業本部にて営業を経験し、2022年4月からはタカラビルメン町田営業所の営業として従事。',
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
