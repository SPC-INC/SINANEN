<?php
$include = '../../include/'; // パーツ用パス
$home = '../../'; // サイトルートパス
$page = array( // ページデータ
    'flag' => 'personality', // ページ判別フラグ
    'slug' => '', // TOP以降のURL 末尾の/や拡張子まで含める
);
require_once $include . '_header.php';
?>
<article class="contents contents--<?php echo IS_PAGE; ?>">

    <div class="pageHead notos">
        <div class="pageHead__img">
            <img src="<?php echo HOME; ?>img/personality_head.png" alt="" class="pc">
            <img src="<?php echo HOME; ?>img/personality_head_sp.png" alt="" class="sp">
        </div>
        <div class="pageHead__text flex vcenter">
            <h1 class="pageHead__text--inner flex vert">
                <span class="pageHead__text--en js-in anime text-in">Personality</span>
                <span class="pageHead__text--ja js-in anime text-in">求める人物像</span>
            </h1>
        </div>
    </div>

<?php
/*
    ########  ######## ########   ######   #######  ##    ##
    ##     ## ##       ##     ## ##    ## ##     ## ###   ##
    ##     ## ##       ##     ## ##       ##     ## ####  ##
    ########  ######   ########   ######  ##     ## ## ## ##
    ##        ##       ##   ##         ## ##     ## ##  ####
    ##        ##       ##    ##  ##    ## ##     ## ##   ###
    ##        ######## ##     ##  ######   #######  ##    ##
*/
?>
    <section class="personalitySec personalityPerson">
        <div class="wrap w1200 sp-wrap">
            <h2 class="personalitySec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        求める人物像
                    </div>
                    <div class="sp js-in anime left-in">
                        求める人物像
                    </div>
                </div>
            </h2>
            <ul class="personalityPerson__list flex break">
                <li class="personalityPerson__item flex pc-vert vcenter pc-hcenter">
                    <div class="personalityPerson__img">
                        <img src="<?php echo HOME; ?>img/personality_person_01.png" alt="">
                    </div>
                    <dl class="personalityPerson__data flex vert pc-vcenter sp-vstart hcenter">
                        <dt class="personalityPerson__ttl notos">
                            相互啓発力
                        </dt>
                        <dd class="personalityPerson__dtl">
                            他社を尊重し、切磋琢磨しながら<br>
                            互いに成長し合う関係を構築できる
                        </dd>
                    </dl>
                </li>
                <li class="personalityPerson__item flex pc-vert vcenter pc-hcenter">
                    <div class="personalityPerson__img">
                        <img src="<?php echo HOME; ?>img/personality_person_02.png" alt="">
                    </div>
                    <dl class="personalityPerson__data flex vert pc-vcenter sp-vstart hcenter">
                        <dt class="personalityPerson__ttl notos">
                            自発性
                        </dt>
                        <dd class="personalityPerson__dtl">
                            使命感を持ち、自ら進んで考え、<br>
                            周りを巻き込みながら行動できる
                        </dd>
                    </dl>
                </li>
                <li class="personalityPerson__item flex pc-vert vcenter pc-hcenter">
                    <div class="personalityPerson__img">
                        <img src="<?php echo HOME; ?>img/personality_person_03.png" alt="">
                    </div>
                    <dl class="personalityPerson__data flex vert pc-vcenter sp-vstart hcenter">
                        <dt class="personalityPerson__ttl notos">
                            チャレンジ精神
                        </dt>
                        <dd class="personalityPerson__dtl">
                            知的好奇心を持ち、<br>
                            変化を恐れず積極的に挑戦できる
                        </dd>
                    </dl>
                </li>
                <li class="personalityPerson__item flex pc-vert vcenter pc-hcenter">
                    <div class="personalityPerson__img">
                        <img src="<?php echo HOME; ?>img/personality_person_04.png" alt="">
                    </div>
                    <dl class="personalityPerson__data flex vert pc-vcenter sp-vstart hcenter">
                        <dt class="personalityPerson__ttl notos">
                            論理的思考
                        </dt>
                        <dd class="personalityPerson__dtl">
                            既存の概念にとらわれず、<br>
                            本質を捉えることが出来る
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
    </section>

<?php
/*
    ########   #######  ##       ####  ######  ##    ##
    ##     ## ##     ## ##        ##  ##    ##  ##  ##
    ##     ## ##     ## ##        ##  ##         ####
    ########  ##     ## ##        ##  ##          ##
    ##        ##     ## ##        ##  ##          ##
    ##        ##     ## ##        ##  ##    ##    ##
    ##         #######  ######## ####  ######     ##
*/
?>
    <section class="personalitySec personalityPolisy">
        <div class="wrap w1200 sp-wrap">
            <h2 class="personalitySec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        社是
                    </div>
                    <div class="sp js-in anime left-in">
                        社是
                    </div>
                </div>
            </h2>
            <ul class="personalityPolisy__list flex sp-vert sp-vcenter pc-bet">
                <li class="personalityPolisy__item js-in anime bottom-in wave0">
                    <dl class="personalityPolisy__data flex vert vcenter pc-hcenter">
                        <dt class="personalityPolisy__ttl notos">
                            進取
                        </dt>
                        <dd class="personalityPolisy__dtl">
                            進取は<br>
                            我社営業の大行である常に停まらず<br>
                            工夫をこらし人の求むるものを知り<br>
                            品位を高め商品の開発に努め<br>
                            社会に奉仕して社益の増進に資する
                        </dd>
                    </dl>
                </li>
                <li class="personalityPolisy__item js-in anime bottom-in wave2">
                    <dl class="personalityPolisy__data flex vert vcenter pc-hcenter">
                        <dt class="personalityPolisy__ttl notos">
                            信義
                        </dt>
                        <dd class="personalityPolisy__dtl">
                            信義は<br>
                            我社経営の大本である人の信頼に応え<br>
                            責任を重んじ業を正し<br>
                            和衷協同して社運の発展を期する
                        </dd>
                    </dl>
                </li>
                <li class="personalityPolisy__item js-in anime bottom-in wave4">
                    <dl class="personalityPolisy__data flex vert vcenter pc-hcenter">
                        <dt class="personalityPolisy__ttl notos">
                            楽業
                        </dt>
                        <dd class="personalityPolisy__dtl">
                            楽業は<br>
                            我社の人の体相である社にある喜びを以て<br>
                            職を楽しみ広く内外に友を求めて<br>
                            社業繁栄のもととする
                        </dd>
                    </dl>
                </li>
            </ul>
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
    <section class="personalitySec personalityMessage">
        <div class="wrap w1200 sp-wrap">
            <h2 class="personalitySec__head notos">
                <div class="anime__wrapper">
                    <div class="pc js-in anime text-in">
                        採用担当からのメッセージ
                    </div>
                    <div class="sp js-in anime left-in">
                        採用担当からのメッセージ
                    </div>
                </div>
            </h2>
            <h3 class="personalityMessage__subhead notos">
                変革を担う仲間として、ともに未来を作る
            </h3>
            <div class="personalityMessage__container">
                <div class="personalityMessage__img">
                    <img src="<?php echo HOME; ?>img/personality_message.png" alt="">
                </div>
                <div class="personalityMessage__text">
                    <p class="">
                        シナネンホールディングスグループは創業以来、時代の変化に対応し、お客様に寄り添いながらエネルギーを安定的に供給してきました。人口減少やガスや電力の自由化などによって「逆境」とも言われるエネルギー業界の中で、「信義」「進取」「楽業」の社是を根底に私たちは挑戦を続け、2027年に創業100周年を迎えます。
                    </p>
                    <p class="">
                        100周年を目の前に、私たちは人財要件である「相互啓発力」「自発性」「チャレンジ精神」「論理的思考」を身につけ、変革を担い活躍したい、人々の暮らしを支えたい、社会に貢献したいという想いがある方を求めています。
                    </p>
                    <p class="">
                        エネルギー卸・小売周辺事業、エネルギーソリューション事業、非エネルギー事業など、幅広くお客様の生活に貢献出来る事業がシナネンホールディングスグループにはあります。それぞれの仕事に誇りを持ち、人とのつながりを大切に、自らの職を楽しみながら働くのがシナネンホールディングスグループの社員です。<br>
                        私たちは、「Challenging New Worlds with Big-Sky Thinking」というスローガンを掲げ、大胆な発想で新しい世界へと挑戦していきます。
                    </p>
                    <p class="">
                        就職活動は、皆さんにとって自分自身を見つめ直す素敵な機会です。<br>
                        大変と感じる方もいるかと思いますが、自分がやりがいを感じたこと、得意なこと、苦手なことをぜひ見つけてください。シナネンホールディングスグループは、D&I（ダイバーシティ＆インクルージョン）の概念を大切に、一人ひとりの個性を掛け合わせることでイノベーションを生み出していける環境を整えています。
                    </p>
                    <p class="">
                        皆さんの個性を最大限に発揮し、変革を担う一員として、私たちと一緒にシナネンホールディングスグループの未来を造りませんか？
                    </p>
                    <p class="">
                        皆さんと一緒に働けることを楽しみにしています！
                    </p>
                </div>
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
<section class="recruitFooter">
    <div class="wrap w1200 sp-wrap">
            <div class="recruitFooter__nav recruitFooter__nav--personality">
                <?php require_once $include . '_recruit.php'; ?>
            </div>
            <div class="pc recruitFooter__entry">
                <?php require_once $include . '_entry.php'; ?>
            </div>
        </div>
    </section>

</article>
<?php
require_once $include . '_footer.php';
