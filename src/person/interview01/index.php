<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'interview01', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="interview">
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
        <section class="interviewMv">
            <div class="interviewMv__img">
                <img src="<?php echo HOME; ?>img/interview01_mv.png" alt="" class="pc">
                <img src="<?php echo HOME; ?>img/interview01_mv_sp.png" alt="" class="sp">
            </div>
            <h1 class="pc interviewMv__copy flex vert">
                <div class="interviewMv__copy--inner js-in anime text-line-in anime__wrapper">
                    <div class="js-in anime text-in wave3">人と社会を支えるインフラを</div>
                </div>
                <div class="interviewMv__copy--inner js-in anime text-line-in anime__wrapper">
                    <div class="js-in anime text-in wave3">守り続けるという使命感</div>
                </div>
            </h1>
            <h1 class="sp interviewMv__copy flex vert">
                <div class="interviewMv__copy--inner js-in anime text-line-in anime__wrapper">
                    <div class="js-in anime left-in wave3">人と社会を支えるインフラを</div>
                </div>
                <div class="interviewMv__copy--inner js-in anime text-line-in anime__wrapper">
                    <div class="js-in anime left-in wave3">守り続けるという使命感</div>
                </div>
            </h1>
            <div class="interviewMv__profile js-in anime left-in">
                <div class="interviewMv__profile--year notos">2014年入社</div>
                <div class="interviewMv__profile--name notos flex vend">
                    <div class="interviewMv__profile--ja">S.Takahashi</div>
                </div>
                <div class="interviewMv__profile--pos notos">
                    ミライフ株式会社<br>
                    営業統括部 電力推進チーム<br>
                    チーム長
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
        <section class="interviewSec">
            <div class="pc interviewSec__bg interviewSec__bg--left"></div>
            <div class="pc interviewSec__bg interviewSec__bg--right"></div>
            <div class="wrap w1200 sp-wrap">
                <div class="interviewSec__wrapper pc-flex bet">
                    <div class="interviewSec__text pc-1">
                        <h2 class="interviewSec__head notos anime__wrapper">
                            <div class="pc js-in anime text-in">
                                一人ひとりを見ていてくれるから<br>自分らしく居られる場所
                            </div>
                            <div class="sp js-in anime left-in">
                                一人ひとりを見ていてくれるから<br>自分らしく居られる場所
                            </div>
                        </h2>
                        <div class="sp interviewSec__img pc-2">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/interview01_sec_01.png" alt="">
                            </span>
                        </div>
                        <p class="interviewSec__desc">
                            現在は、ミライフ株式会社の電力推進チームで働いています。主に製造工場やテナント、老人ホームや道の駅などの法人企業様への販売と、ミライフ全体の電力仕入を担当しています。そもそもシナネンホールディングスに入社を決めたのは、人の暮らしと密接に関わる仕事に就きたいと思ったからです。中でも、人を支える縁の下の力持ちのような立ち回りが私の強みであると感じており、陰ながら生活や社会を支えるインフラ業界に携わりたいと考えていました。他社も検討していましたが、最終的な決め手となったのは、各採用ステップの中で、担当者の方から面接に関するフィードバック（FB）をもらえたことです。一次面接後に合格の電話連絡があった際、私の面接時を振り返り、良かった点と改善点を丁寧に教えてくれました。他社も同じようなタイミングで採用スケジュールが進む中、時間をかけて丁寧にFBをくれたのはここだけでした。そんな姿勢に、「この会社は一人一人をちゃんと見てくれている」と感じられ入社を決めました。
                        </p>
                    </div>
                    <div class="pc interviewSec__img pc-2">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/interview01_sec_01.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="interviewSec__wrapper pc-flex bet">
                    <div class="interviewSec__text pc-2">
                        <h2 class="interviewSec__head notos anime__wrapper">
                            <div class="pc js-in anime text-in">
                                石油、ガス、電気<br>人と社会を支えるインフラに携われるやりがい
                            </div>
                            <div class="sp js-in anime left-in">
                                石油、ガス、電気<br>人と社会を支えるインフラに携われるやりがい
                            </div>
                        </h2>
                        <div class="sp interviewSec__img pc-1">
                            <span class="js-in anime slideImg">
                                <img src="<?php echo HOME; ?>img/interview01_sec_02.png" alt="">
                            </span>
                        </div>
                        <p class="interviewSec__desc">
                            入社後は、石油事業のバックオフィスを経験し、その後、ガス事業へ異動。現在のミライフ株式会社が電気事業に参入するタイミングで電力事業部に異動となりました。今振り返ると、入社1年目が1番大変だったと思います。というのも、社会人としての基本的なマナーを覚えることに加えて、エネルギー業界は専門用語も多いため、基本的な知識を習得するのに苦労しました。また、石油や電気ならではの特徴として価格変動が激しく、石油のバックオフィス業務では1度決定したにも関わらず、後から仕入れ先を変更するのは日常茶飯事であり、業界の背景を知らなかった私は、おもしろいほど対応に踊らされていました（笑）。しかし、がむしゃらに取り組み続けた日々を振り返ると、忙しい中でも仕事をやり切る達成感や誰かの役に立てているという充足感を得られた貴重な1年間だったと思います。
                        </p>
                    </div>
                    <div class="pc interviewSec__img pc-1">
                        <span class="js-in anime slideImg">
                            <img src="<?php echo HOME; ?>img/interview01_sec_02.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
            <div class="interviewSec__img js-in anime right-in">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/interview01_sec_03.png" alt="">
                </span>
            </div>
            <div class="wrap w1200 sp-wrap">
                <div class="interviewSec__text">
                    <h2 class="interviewSec__head notos anime__wrapper">
                        <div class="pc js-in anime text-in">
                            誰一人取り残さず、<br>「チーム」としての一体感を大切にしたい
                        </div>
                    </h2>
                        <div class="sp js-in anime left-in">
                            誰一人取り残さず、<br>「チーム」としての一体感を大切にしたい
                        </div>
                    <p class="interviewSec__desc">
                        入社して4年ほどでシナネンホールディングスの主力事業である石油・ガス・電気を経験したわけですが、私の場合、毎度異なる商材を扱う部署への異動となり、少しユニークなキャリアを経験してきました。配属の度に新しいことを学ぶのは大変でしたが、その様々な部署での経験が自己成長に大きく寄与してくれたと思います。<br>
                        業務に従事する上で心掛けていることは、相手のことを理解しようとする姿勢です。その上で、同じチームで働くメンバーが日々取り組んでいる仕事への理解と的確なFBをするように心掛けています。それにはまず、仕事の話だけでなく、普段から他愛ない雑談やプライベートな相談にも耳を傾けることも大切だと感じています。そうやって心の障壁をクリアにしておくことでいつでも相談しやすい関係性が築けるからです。関係性の基盤があれば、指導やアドバイスが他人事でなく、より一人ひとりの心に届きやすくなることにもつながります。何か困っていることや悩みがある時、相談しづらい環境は居心地がいいとは言えません。職場の快適さは仕事のしやすさだけでなく、生産性にも関係してきます。皆が気持ちよく働き、自分の意見を声にして仕事を一緒に進めていける一体感は私にとって重要なことです。決して一人で悩むことのないようすべてのメンバーへの心配りを忘れたくありません。この考え方は、私自身がこれまでに多くの先輩方から受け継いできたマインドです。それほど当社は人を大切にする文化が根付いていると感じています。
                    </p>
                </div>
            </div>
            <div class="interviewSec__img">
            </div>
            <div class="wrap w1200 sp-wrap">
                <div class="interviewSec__text">
                    <h2 class="interviewSec__head notos anime__wrapper">
                        <div class="pc js-in anime text-in">
                            次代を支える<br>新たなビジネスチャンスを掴む挑戦
                        </div>
                        <div class="sp js-in anime left-in">
                            次代を支える<br>新たなビジネスチャンスを掴む挑戦
                        </div>
                    </h2>
                    <p class="interviewSec__desc">
                        さまざまな事業や職種を経験してきた今、エネルギーというかけがえのない商材を扱うこの仕事を誇りに思っています。同時に、脱炭素社会等を背景としたエネルギー業界の大変革は今後もさらに加速していくと感じます。私は仕事を通していろいろな企業様のお話を聞く機会があるため、いつでも新しい情報をキャッチしたり、先見性をもって物事を捉えたりするようにしています。人や暮らしに根付くエネルギーは、あらゆるモノ・コトと結びついているため、際限ない好奇心や興味、関心を持ち続けられることもこの仕事の魅力です。次のビジネスチャンスがどこに潜んでいるのか？そうやって世の中を見てみると、新たな発想や発見を得られるものです。今後も進取の精神で仕事に臨み、シナネンホールディングスが一体となり、次代を支え続けるイノベーションを起こしていきたいです。
                    </p>
                </div>
            </div>
        </section>

<?php
/*
     ######   ######  ##     ## ######## ########  ##     ## ##       ########
    ##    ## ##    ## ##     ## ##       ##     ## ##     ## ##       ##
    ##       ##       ##     ## ##       ##     ## ##     ## ##       ##
     ######  ##       ######### ######   ##     ## ##     ## ##       ######
          ## ##       ##     ## ##       ##     ## ##     ## ##       ##
    ##    ## ##    ## ##     ## ##       ##     ## ##     ## ##       ##
     ######   ######  ##     ## ######## ########   #######  ######## ########
*/
?>
        <section class="interviewSchedule">
            <div class="interviewSchedule__container js-stickyNav-target">
                <div class="interviewSchedule__wrapper pc-flex">
                    <div class="interviewSchedule__head">
                        <h2 class="interviewSchedule__head--text notos js-stickyNav">
                            <div class="anime__wrapper">
                                <div class="pc js-in anime text-in">
                                    1日のスケジュール
                                </div>
                                <div class="sp js-in anime left-in">
                                    1日のスケジュール
                                </div>
                            </div>
                        </h2>
                    </div>
                    <div class="interviewSchedule__dtl">
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                9:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    出社
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        業界紙などからマーケット情報や業界トレンドをチェック
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                10:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    チームミーティング
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        お客様への提案内容・電力仕入情報の共有など
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                12:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    昼食
                                </p>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                13:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    お客様訪問（工場・病院・介護施設など）
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        新規提案・既存供給先への提案商談
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                17:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    帰社
                                </p>
                                <div class="interviewSchedule__desc--dtl pc-flex">
                                    <p class="interviewSchedule__desc--text">
                                        翌日の営業準備
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="interviewSchedule__item flex">
                            <div class="interviewSchedule__time">
                                18:00
                            </div>
                            <div class="interviewSchedule__desc">
                                <p class="interviewSchedule__desc--ttl">
                                    退社
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
/*
    ##     ## ########  ######   ######     ###     ######   ########
    ###   ### ##       ##    ## ##    ##   ## ##   ##    ##  ##
    #### #### ##       ##       ##        ##   ##  ##        ##
    ## ### ## ######    ######   ######  ##     ## ##   #### ######
    ##     ## ##             ##       ## ######### ##    ##  ##
    ##     ## ##       ##    ## ##    ## ##     ## ##    ##  ##
    ##     ## ########  ######   ######  ##     ##  ######   ########
*/
?>
        <section class="interviewMessage pc-flex">
            <div class="interviewMessage__img">
                <span class="js-in anime slideImg">
                    <img src="<?php echo HOME; ?>img/interview01_message.png" alt="">
                </span>
            </div>
            <div class="interviewMessage__text">
                <h2 class="interviewMessage__head">
                    <div class="anime__wrapper">
                        <div class="pc js-in anime text-in">
                            未来の仲間へ
                        </div>
                        <div class="sp js-in anime left-in">
                            未来の仲間へ
                        </div>
                    </div>
                </h2>
                <p class="interviewMessage__desc">
                    やるからには全力で、楽しんで仕事をしたいと思いませんか？当社には、そんなふうに仕事をしている仲間がたくさんいます。私も今、仕事がとても楽しいです。私自身が楽しいと、なんだかそんな気持ちが周りにも好循環をもたらすような気がしています。いつも職場は明るいパワーがみなぎるようで活気に満ちています。そこであなたもイキイキと自分らしく働いているイメージをしてみてください！きっと、あなたは当社で居場所を見つけることができると思います！
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
        <section class="interviewFooter">
            <div class="wrap w1200 sp-wrap">
                <h2 class="interviewFooter__head notos">
                    その他の先輩社員のインタビュー
                </h2>
                <div class="interviewFooter__list interviewFooter__list--01">
                    <?php require_once $include . '_interview.php';?>
                </div>
                <div class="interviewFooter__entry">
                    <?php require_once $include . '_entry.php'; ?>
                </div>
            </div>
        </section>

</article>
<?php
require_once $include . '_footer.php';
