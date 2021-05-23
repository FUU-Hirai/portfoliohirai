<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<div class="about_section">
    <div class="about_title">
        <h1 class="about_main_title">ABOUT ME</h1>
        <h3 class="about_sub_title">プロフィール</h3>
    </div>
    <div class="about_me_history">
        <p class="about_me_history_des">
            2014年&#8658;営業として福岡の会社に就職<br/>
            2019年&#8658;エンジニアとしてのキャリアをスタート。<br/>
            2020年&#8658;ランティングを初め、エンジニアについての記事を中心に記事を執筆。<br/>
            現在&#8658;PHP,HTML,CSSを用いたWebアプリケーション開発を行う<br/>
            また、ワードプレスで制作したコーポレートサイトを運営中<br/>
        </p>
    </div>
    <div class="about_my_info">
        <div class="about_my_icon">
        </div>
        <div class="about_speech_balloon">
            <dl>
                <dt>名前：</dt>
                <dd>FUU</dd>
                <dt>所在地：</dt>
                <dd>福岡</dd>
                <dt>趣味：</dt>
                <dd>キックボクシング<br/>
                    怖い話収集<br/>
                    スポーツ観戦</dd>
                <dt>活動内容：</dt>
                <dd>エンジニアとして働きながら、副業としてWeb制作やライティングを行っています！</dd>
            </dl>
        </div>
    </div>
    <div class="skill_section">
        <h3 class="skill_sub_title">スキル</h3>
        <div class="about_skills_context">
        <div class="programming_skill">
            <div class= inline_title "programming_skill_title">①プログラミングスキル</div>
            <div class="inline_skill_icon">
                <i class="skill_icon devicon-html5-plain-wordmark colored"></i>
                <i class="skill_icon devicon-css3-plain-wordmark colored"></i>
                <i class="skill_icon devicon-php-plain colored"></i>
                <i class="skill_icon devicon-javascript-plain colored"></i>
            </div>
                <div class="inline_skill_des programming_skill_des"><p>
                        現在、システム開発ではcakePHPを用いて開発を行っております。<br/>
                        その他、HTML、CSS、javascriptを使ったコーディング経験もあります。<br/>
                    </p></div>
            </div>
            <div class="web_production_skill">
                <div class="inline_title web_production_skill_title">②Web制作経験</div>
                <div class="inline_skill_icon">
                    <i class="skill_icon devicon-wordpress-plain-wordmark colored"></i>
                </div>
                <div class="inline_skill_des web_production_des">
                    <p>ワードプレスを使ったWeb制作の経験があります。<br/>
                        簡単なカスタムやデータ移行を行うことができます。<br/>
                    </p>
                </div>
            </div>
            <div class="writing_skill">
                <div class="inline_title writing_skill_title">③ライティングスキル</div>
                <div class="inline_skill_icon">
                    <i class="skill_icon fas fa-pen-fancy"></i>
                </div>
                <div class="inline_skill_des writing_skill_des"><p>
                        2020年からクラウドソーシングにてライティングを行っています。<br/>
                        エンジニアの記事を中心に20記事以上の記事を執筆(2021年5月現在)<br/>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->create(null,[
        'url' => [
            'controller' => 'main','action' => 'index']
    ])?>
    <?= $this->Form->button('トップページへ戻る')?>
</div>
