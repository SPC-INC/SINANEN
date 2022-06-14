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
                    <div class="js-in anime text-in">
                        在宅勤務制度は子育ての心強い味方<br>
                        時間を有効活用して、仕事と家庭を両立できる
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                現在は、シナネンの住宅営業部・開発営業チームに所属しています。シナネンHDグループの個社は専門商社が多い中、当社はメーカーとして機能しているちょっとユニークな会社です。主に「洗濯機防水パン」と呼ばれる商品の製造販売をしている会社で私は主にお客様への提案やアフターフォローなどのお客様対応を行なっています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私は2022年よりシナネンHDの法務室に勤務しています。グループ全体から集まってくるさまざまな様式の契約書に目を通し、適切であるかをチェックしています。また、法人登記の更新や新規手続きなども私たちの役目です。個社が多いため、毎日多くの書類が届きますが、法律という未経験のジャンルに知的好奇心がくすぐられています（笑）。
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
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                韓さんは現職の前に出産休暇を取っていたんですね。復帰してからの働き方に変化はありましたか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね。産休を経てからの働き方は、以前より格段に働きやすくなったと実感しています！私が子どもを出産した直後に世界中で新型コロナウイルス感染が拡大したため、復帰後はテレワークがグループ全体で導入されていて例に漏れずに私も在宅勤務となりました。現在、在宅勤務は社内の正式な制度として導入されているため、全社員が規定に則って、在宅勤務を行う体制が整っていますね。
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
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                はい。私も営業ですが在宅勤務の日もあります。アポがあるときは自宅から取引先へ向かい、商談後は自宅に戻って作業をすることもしばしばです。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                時間を有効活用できていいですよね。子どもが小さいうちは突然熱を出してしまうこともあるけど、朝病院へ連れて行っても10時頃には就業できるので助かっています。
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="js-in anime text-in">
                        互いを尊重する文化が<br>
                        女性の多彩なキャリアを推進していく
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                國居さんはかねてから現在の部署への異動希望があったと聞きましたがどんな理由からですか？
                            </p>
                        </div>
                    </div>
                </div>
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
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                以前、経営企画部にいた際、仕事の特性上さまざまな個社の情報を耳にしていました。その中で今の部署のことを知って興味を持ったんです。当社は「洗濯機防水パン」をメインで作っている会社として国内でも希少なメーカーです。自社で商品開発から製造、販売を行なっているため、他のグループ会社と比べると、大いに自社製品愛を発揮しても良いというか、そんなおもしろさを感じました（笑）。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                なるほど！メーカーなら、自分が企画した新商品の開発から関われるチャンスもあるかもしれないですよね。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="crosstalkSec__wrapper pc-flex">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうなんです。そういった事業展展開の幅もひと味違って魅力的です。異動希望がいつも100%叶うかというと一概にはいえませんが、やりたい！と思うことを年次や性別問わず受け入れてくれる土壌に感謝しています。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                私も現在を含めると、４つの部署を経験してきました。もともと英語を使って海外展開を行う事業に携わりたいと考えていて、実際に希望が叶いました。現在のような未知の分野に飛び込むことも刺激的ですが、自分の興味や関心が活かされる仕事に就けることも嬉しいことですね！
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                普段から1on1面談も盛んで上司と話をする機会が多いため、日々のフィードバックなどができて、必要なときに相談しやすい関係が自然と自分の意見を伝えやすい環境を作っているのかもしれませんね。
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
                    <div class="js-in anime text-in">
                        ママもパパも！<br>
                        シナネンHD独自の働きやすさへの取り組み
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                当社の産休取得率は100％といっても過言ではないですよね。私もこの先のことを考えると、やはり安心材料になります。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                そうですね。働きやすさでいうと、当社の時短勤務の規定は国が明示していることよりもさらに寛容な独自制度を設けているんですよ。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                どんな内容ですか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                基本的に、国は企業に対して3歳までの子どもがいる家庭には時短勤務を設けることが望ましいとしていますが、その制限を小学校３年生まで、と定めているんです。そういったことからも、当社は女性の働きやすさにも目を行き届かせ、長期的な活躍に期待してくれているんですよね。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                それはありがたい情報です。女性の場合、結婚や出産といったライフイベントによって、予測しきれないことがありますよね。でもこういった制度を活用することで家庭もキャリアも両立しやすい働き方ができる気がしてきました。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                近年は、パパである男性も女性と同じように、産休・育休を取得する流れも活発になってきました。國居さんも、こういった会社の制度を最大限に活用して、好きな仕事を続けてくださいね！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="crosstalkSec crosstalkSec--gray">
            <div class="wrap w1200 sp-wrap">
                <h2 class="crosstalkSec__head notos anime__wrapper">
                    <div class="js-in anime text-in">
                        多様性を認め合い、<br>
                        すべての人の働きやすさを叶える
                    </div>
                </h2>
                <div class="crosstalkSec__wrapper">
                    <div class="crosstalkSec__talk">
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                当社は今、風土改革への取り組みが推進されています。國居さんは、働いている中で取り組みの動きを実感することはありますか？
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_02.png" alt=""><br>
                                R.Kunisue
                            </div>
                            <p class="crosstalkSec__talk--text">
                                はい。風土改革を専門的に推進していく部署ができたこともあり、全社員が注目し、意識していることと感じています。驚いたのが、初めに風土改革をしようと声を上げたのが、一人の社員だったということ。その意見を汲み取って、実際に全社の取り組みに落とし込んでいく社長の寛大さと決断力にも脱帽です。
                            </p>
                        </div>
                        <div class="crosstalkSec__talk--item flex">
                            <div class="crosstalkSec__talk--img">
                                <img src="<?php echo HOME; ?>img/crosstalk03_talk_01.png" alt=""><br>
                                H.Hann
                            </div>
                            <p class="crosstalkSec__talk--text">
                                グループ間の連携や繋がりを目的とした各社混合のオンライン会議なども導入されて、よりグループとしても強固なチームになってきたと感じるね。議題に挙がるのは、「D&I（ダイバーシティ＆インクルージョン）」といったキーワード。個人を尊重して、多様性を活かし合うといった意味合いが含まれています。そういった風土のもと、女性だけでなく、誰にとっても働きやすい会社をみんなで作っていきたいですね。
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
