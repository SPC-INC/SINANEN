<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'crosstalk02', // ページ判別フラグ
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
            <img src="<?php echo HOME; ?>img/crosstalk02_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/crosstalk02_mv_sp.png" alt="" class="sp">
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
                            13年目×5年目×3年目対談
                        </div>
                    </div>
                </div>
            </h1>
            <div class="wrap w1200 sp-wrap">
                <ul class="crosstalkIntro__list pc-flex bet">
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave1">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk02_member_01.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2018年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">S.Takada</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                ミライフ株式会社<br>
                                南関東支店<br>
                                卸営業チーム 藤沢オフィス
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave2">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk02_member_02.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2020年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">N.Yamamoto</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネン株式会社<br>
                                経営管理部<br>
                                経営管理・広報チーム
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave3">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk02_member_03.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2010年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">K.Ikeya</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス株式会社<br>
                                成長戦略部<br>
                                グループ連携推進チーム
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
                    <div class="js-in anime text-in">
                        脈々と受け継がれていく<br>
                        人の温かさ
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                学生時代は専門商社に絞って就職活動をしていました。エネルギーのほかにも、食品や繊維なども視野に入れていましたが、社会を支えるインフラに関われるやりがいに惹かれてエネルギー業界を目指しました。当社を選んだのは、圧倒的な人の良さです。多くの就活生がいる中でも、一人ひとりに向き合い、振る舞いや発言の一つひとつから真心が伝わってくるようでした。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                僕はどちらかというと自分の営業力でさまざまなことを提案できるような卸営業に興味を持っていて主に商社を受けていました。そんな中シナネンを知り、選考ステップを踏んでいきました。そのとき印象的だったのは、他社の面接ではガチガチに緊張していたのですが、シナネンはリラックスして受けられたんです。というのも、担当者がどの方も雰囲気が良く、話の振り方や相槌なども心地よくて安心感を感じました。
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk02_sec_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私も2人と似ていますね！緊張していると自分らしさを見失って伝えたいことの半分も伝えられなかったりするものだけど、シナネンは一人ひとりを受け入れてくれる懐の深さのようなものを感じましたね。私は最終面接で役員の方からの優しい心遣いがありましたよ。その方が私の気持ちを代弁してくれるかのように「あなたがやってきたことはこういうことですね？」と要約してくれたことに対して私が「ありがとうございます！」と元気よく返答した瞬間、会場全体が大きな笑いに包まれたことは忘れません（笑）。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                （笑）。素敵なエピソードですね。会社に根付く人の温かさは毎日働いている中でも感じています。常に相手の立場に立って行動できる風土は脈々と受け継がれていくものなのですね。
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk02_sec_02.png" alt="">
                        </span>
                    </div>
                </div>
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="js-in anime text-in">
                        多様なジョブチェンジを経て得られる<br>自己成長
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                池谷さんは2010年の入社ですが、これまでどのようなキャリアを歩んできましたか？
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__img pc-1 flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk02_sec_03.png" alt="">
                        </span>
                    </div>
                    <div class="crosstalkSec__talk pc-2">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私はこれまでシナネン、ミライフ、シナネンHDと3つのグループ企業を経験しました。主に営業を担当してきましたが、2021年よりシナネンHDのグループ連携室で働いています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                グループ連携室は比較的新しい事業部ですよね。そこではどんなことを目的としているんですか？
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                シナネンが多角的な事業展開をスタートさせたのが2000年代のことで、2015年に初めて電気事業に参画したんだよね。そうすることでシナネンは石油、ガス、電気といったエネルギー事業を統括した形になっただけでなく、シェアサイクルや建物維持管理、抗菌事業など多岐にわたる企業活動を行なっています。そんな中、各事業や各社の連携を強くして、事業間に横串を刺す動きを活性化させようと立ち上がったのがグループ連携室。また、グループ内だけでなく、外部企業との連携を図ることで新たな事業創出をすることも求められています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                これまでの池谷さんの多彩な経験が活きてきそうな事業ですね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                さまざまな部署を経験してきたからこそ、全体の動きが見えやすいのは確かです。でも2人もいろいろと経験を積んできたのではないですか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね。僕は2年目にモビリティPLUSへ出向になったときのことはとくに印象的でした。立ち上げのタイミングだったので新規顧客の開拓も地道にコツコツと取り組んで、初めは先が見えずに不安に感じることもありましたが、徐々に道筋が見えてくると同時に仕事へのやりがいも増していきました。山夲さんはどうですか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私はまだ1つの部署しか経験していませんが、入社後すぐに自社Webサイトのリニューアルを任されたことが印象に残っています。Web関連の知識もなかったため、わからないことは自分で調べたり、周囲の人に聞いたりと手探りで進めていきました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                当社はジョブチェンジが前提にあるため、本当にいろいろな経験を積めることが魅力ですね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね！いつどこに異動になってもそれを楽しめるようになりたいと思います。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="crosstalkSec__separate">
            <div class="wrap w1200 sp-wrap">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/crosstalk02_sec.png" alt=""><br>
                </span>
            </div>
        </div>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="js-in anime text-in">
                        グループ全体が一つのチームとして<br>
                        より強く、しなやかに
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                みんなはこれからどんなことに挑戦したいですか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                僕は現在の営業としてのスキルアップを図りたいです。さらにいうと、今後どんな事業に携わることになっても即戦力で活躍できるような爆発力のある営業になりたいですね。そのためには日々の業務を着実に行うことに加えて、専門性の高い資格を取得するなどの自己研鑽も必要と考えています。社内のサポート制度も利用して、どんどん成長していきたいです！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は経営管理部のトピックスにも頻繁に挙がるCSR活動の推進に挑戦したいです！CSR活動を社内にさらに浸透させていくことと「あかりの森でんきプロジェクト」のような新規のCSR活動を立ち上げたいと思っています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                素晴らしいですね。私たちのグループは、人や社会、地球全体に密接に関連している商材を多く取り扱っているため、企業活動を通して社会に貢献していくという姿勢は大切です。私は東日本大震災の際にそのことを再認識しました。実際にプロパンガスを全国からかき集めて被災地に持っていったとき、温かい飲み物が飲める、お風呂に入れると皆さんに感謝されて、普段は当たり前と感じていたことや私自身の仕事も意義深いことだと気づかせてもらいました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                グループの連携化が進めば、私たちがさらに世の中に提供できる価値も増えていきますね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_03.png" alt=""><br>
                                Iさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね！今回ここに集まって話ができたことも私にとって貴重な時間になりました。私が今取り組んでいることは新しい事業であり、誰も正解を知りません。でも、これからこんなふうにいろいろな社員が顔を合わせて共創していくことで新しい何かが生まれると思うとワクワクするんです。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_02.png" alt=""><br>
                                Yさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                池谷さんのように勤続歴の長い方なのに、変わらずにずっと仕事を楽しめている姿を見ると刺激になります。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk02_talk_01.png" alt=""><br>
                                Tさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                これからも皆さんシナネンHDのチームとして、よろしくお願いします！
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
                    <div class="js-in anime text-in">
                        インタビューメンバーの経歴
                    </div>
                </h2>
                <ul class="crosstalkData__list">
                    <?php
                    $arrMember = array(
                        '01' => array(
                            'name' => 'K.Ikeya',
                            'desc' => '2010年に入社し、シナネン株式会社東北支社に営業職で配属される。その後、シナネン株式会社北東北支店森岡営業所、ミライフ東日本株式会社営業統括部での営業を経て、現在はシナネンHD株式会社成長戦略部 グループ連携推進チームでチーム長を務める。',
                        ),
                        '02' => array(
                            'name' => 'S.Takada',
                            'desc' => '2018年に入社し、シナネンサイクル株式会社に配属される。2年目にシナネンモビリティPLUSに出向となり、シェアサイクルのステーション開拓業務に従事。3年目からはミライフ株式会社営業チームに移動し、LPガスや石油の営業を行っている。',
                        ),
                        '03' => array(
                            'name' => 'N.Yamamoto',
                            'desc' => '2020年に入社して以来現在にいたるまでシナネン株式会社経営管理部経営管理・広報チームに所属。会社ホームページのリニューアルや更新作業、プレスリリースの配信、全社会議の運営、新聞に掲載する広告の作成、サテライトオフィスの管理など幅広い業務を担当。',
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
