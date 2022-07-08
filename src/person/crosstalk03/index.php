<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'crosstalk03', // ページ判別フラグ
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
            <img src="<?php echo HOME; ?>img/crosstalk03_mv.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/crosstalk03_mv_sp.png" alt="" class="sp">
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
                            女性の活躍について
                        </div>
                    </div>
                </div>
            </h1>
            <div class="wrap w1200 sp-wrap">
                <ul class="crosstalkIntro__list pc-flex aro">
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave1">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk03_member_01.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2012年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">H.Hann</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネンホールディングス株式会社<br>
                                法務室
                            </div>
                        </div>
                    </li>
                    <li class="crosstalkIntro__item sp-flex js-in anime bottom-in wave2">
                        <div class="crosstalkIntro__img">
                            <img src="<?php echo HOME; ?>img/crosstalk03_member_02.png" alt="">
                        </div>
                        <div class="crosstalkIntro__profile notos">
                            <div class="crosstalkIntro__profile--year">2016年入社</div>
                            <div class="crosstalkIntro__profile--name flex vend">
                                <div class="crosstalkIntro__profile--ja">R.Kunisue</div>
                            </div>
                            <div class="crosstalkIntro__profile--pos">
                                シナネン株式会社<br>
                                住宅プロダクツ営業部<br>
                                開発営業チーム
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
                        様々な分野で活躍するシナネングループの女性社員
                    </div>
                    <div class="sp js-in anime left-in">
                        様々な分野で活躍するシナネングループの女性社員
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は現在、シナネン㈱の住宅営業部・開発営業チームに所属しています。当社は主に太陽光発電、電力販売、石油製品販売等を展開しているエネルギー商社ですが、今所属している部署はメーカーとして機能していて、社内では少しユニークな部署です。主に「洗濯機防水パン」と呼ばれる洗濯機の下に敷く商品の製造販売をしていて、私はお客様への提案やアフターフォロー等を行なっています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                毎日お疲れ様です。今の仕事は楽しいですか？
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk03_sec_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                楽しいです！私は以前、当社の経営企画部に所属しており、部署の特性上、社内の様々な部署について見聞きする機会がありました。その中で今の部署のことを知って興味を持ち、異動願いを出して担当出来ることになったんです。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうだったんですね！
                            </p>
                        </div>
                    </div>
                    <div class="crosstalkSec__img flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk03_sec_02.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                「洗濯機防水パン」をメインで作っている会社というのは国内では希少なのですが、自社で商品開発から製造、販売まで行なっているため、お客様からヒアリングしたニーズを社内の会議で開発担当者に伝える等、商品開発にも間接的に携われているという実感があります。今の仕事がとても楽しく、これからもこの仕事を続けたいと考えています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                素敵ですね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                普段から1on1面談が盛んで上司と話をする機会も多いため、自分の意見を伝えやすく、その点も今の部署の魅力だと感じています。将来的には、商品開発にもより積極的に携わってみたいです。<br>
                                Hさんのお仕事についても教えていただけますか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は現在シナネンホールディングスの法務室で働いています。法務室にはグループ全体から日々たくさんの契約書や法務相談が集まってくるので、契約書の法務審査を行ったり、社員の皆様の様々な問題解決の手助けを行ったりしています。他にも債権管理や株主総会支援、登記業務、契約書のひな型整備や法務研修等、幅広い業務を所管しています。業務は難しいのですが、同時にとても楽しいです！毎日非常に勉強になりますし、大きなやりがいも感じられ、私も今の仕事が大好きで、続けていきたいと考えています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                良いですね！Hさんは今まではどんなキャリアを歩んできたのでしょうか。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                シナネンホールディングスに新卒で入社し、シナネンゼオミック（抗菌剤メーカー）、シナネン/舶油チーム、シナネン/海外投資部門、現職という流れでした。営業を担当していた期間が長く、舶油在籍時には欧米の新規開拓を任され、ヨーロッパに2週間出張に行ったりもして、とても忙しくも充実した社会人生活を送ってきました。<br>
                                少し話は変わりますが、今は身近に女性の弁護士やM&Aの知識に長けている方がいらっしゃり、また、妊娠・出産を経て育児の傍ら働いている女性社員もたくさん増えてきていて…。シナネンホールディングスグループでは色んな分野で輝いている女性社員が多く、大変尊敬しますし、日々とても心強いと感じています。
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        妊娠・復職後を支えてくれた“人”と“制度”
                    </div>
                    <div class="sp js-in anime left-in">
                        妊娠・復職後を支えてくれた“人”と“制度”
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__img pc-1 flex vert">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/crosstalk03_sec_03.png" alt="">
                        </span>
                    </div>
                    <div class="crosstalkSec__talk pc-2">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                Hさんは現在、一児の母として育児をしつつ、働いていらっしゃると思いますが、妊娠中・復職後の働き方について教えてください。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                妊娠中、実はつわりがひどく、とても苦労しました。ただ、同じ部署の方々が本当に優しく、常に私の体調を最優先に考え対応してくださり、とても救われました。産休・育休を経て復帰した後も、最初の数か月は子供がよく風邪をひいてしまいましたが、やはり上司も同僚も一貫して、暖かい言葉だけをかけ続けてくれました。もしも少しでも、冗談でも、ネガティブな事や批判的な事を言われていたら落ち込んでしまっていたと思うのですが、皆大変な中で常に思いやりを持って対応をしてくださり、今でも感謝の気持ちでいっぱいです。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうだったんですね。確かに、社内は優しい人が多いような気がしますね。私もそれは入社前の先輩社員懇談会から既に感じていました（笑）。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                Kさんはとても早く見抜いていたんですね！（笑）数字等では表れないですが、優しい人が多いですよね！社風なのかな。 復職後の働き方に関しては、当グループでも在宅勤務が増えてきているので、とても助かっています。子供の通院等近場で所用を済ませた後、10時から勤務を開始出来ますし、通勤時間がないと時間を有効活用できますね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私も営業ですが在宅勤務の日もあります。アポがあるときは自宅から取引先へ向かい、商談後は自宅に戻って作業をすることもしばしばです。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                良いですね！あとは時短勤務が可能なリミットが「子供が小学3年生まで」に近年延長になったグループ会社も多いようで、世の中で一般的な「3歳まで」や「小学校入学前まで」より長く、子育て世代に優しい変化もどんどん生まれている感じがします。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                それはありがたい情報です。女性の場合、妊娠や出産等様々なライフイベントがある中で、こういった制度を活用することで家庭もキャリアも両立しやすい働き方ができますね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                はい。そしてそれを後押しする会社の姿勢があることも良いことですよね。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="crosstalkSec__separate">
            <div class="wrap w1200 sp-wrap">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/crosstalk03_sec.png" alt=""><br>
                </span>
            </div>
        </div>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="pc js-in anime text-in">
                        多様性を認め合い、<br>
                        すべての人の働きやすさを叶える
                    </div>
                    <div class="sp js-in anime left-in">
                        多様性を認め合い、<br>
                        すべての人の働きやすさを叶える
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                当グループは現在、風土改革への取り組みが推進されています。Kさんは、変化を実感することはありますか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                Kさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                はい。風土改革を専門的に推進していく部署ができたこともあり、全社員が注目し、意識していると感じています。驚いたのが、初めに風土改革をしようと声を上げたのは、有志で集まった社員達だったということ。その意見を汲み取って、実際に全社の取り組みに落とし込んだ社長の寛大さと決断力にも脱帽です。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                Hさん
                            </div>
                            <p class="crosstalkSec__talk--text">
                                グループ各社混合のオンラインで話し合う場等も増えてきていて、私も良い刺激を受けています。「ダイバーシティ＆インクルージョン」、「心理的安全性」といった働く上で大切なキーワードも社内に浸透してきていますね。今回のクロストークのテーマは「女性活躍」でしたが、女性だけでなく、全ての方にとって働きやすい会社をみんなで作っていきたいですね。
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
                            'name' => 'H.Hann',
                            'desc' => '2012年に入社後、シナネンゼオミック株式会社での3年間の営業経験を経て、シナネン株式会社舶油チームで3年半営業として務める。同社、再エネ関連チームに移動後、産休、育休を挟み、2022年からはシナネンHD株式会社法務室に所属。',
                        ),
                        '02' => array(
                            'name' => 'R.Kunisue',
                            'desc' => '2016年に入社後、4年間シナネン株式会社経営企画部にてバックオフィス業務に従事。2020年から自らの希望でシナネン株式会社住宅プロダクツ営業部　開発営業チームにて洗濯機防水パンの営業を担当。新商品開発会議にも積極的に参加している。',
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
