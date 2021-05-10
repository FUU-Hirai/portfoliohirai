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
<?= $this->element('main/header')?>
<div class="container">
    <div class="about">
        <h1 class="site-title">Welcome to my homepage</h1>
        <p class="site-description">
            ようこそお越しくださいました。<br/>
            WEB制作についてお困りではありませんか？<br/>
            WEB制作からライティングまで「ちょっと相談したいな」と思ったらご相談下さい！
        </p>
        <div class="about_me_and_contact">
            <div class="form_left">
                <h2 class="float-left_title">about ME</h2>
                <p class="left_form">現在エンジニアをやっております<br/>
                もっと詳しく知りたい人はこちら！</p>
                <a class="button about" href="main/about">about Me</a>
            </div>
            <div class="form_right">
                <h2 class="float-right_title">contact</h2>
                <p class="right_form">WEB制作やライティングをしています。<br/>
                お仕事の相談はこちら！</p>
                <a class="button contact" href="main/contact">contact</a>
            </div>
        </div>
    </div>
    <div class="skills">
        <h1 class="skills_title">MY SKILLS</h1>
        <div class="skills_context">
        <div class="skills_writing">
            <h2 class="skills_writing_title">Writing<div class="skills_writing_sub_title">ライティング</div></h2>
            <div class="skills_writing_text">記事を執筆いたします。<br/>
            どんどんご相談ください！</div>
        </div>
        <div class="skills_wordpress">
            <h2 class="skills_wordpress_title">WEB production<div class="skills_wordpress_sub_title">ウェブ制作</div></h2>
            <div class="skills_wordpress_text">WEB制作を行います<br/>どんどんご相談ください！</div>
        </div>
        <div class="skills_products">
            <h2 class="skills_products_title">Development<div class="skills_products_sub_title">システム開発</div></h2>
            <div class="skills_products_text">システム開発を行います。<br/>
                どんどんご相談ください！</div>
        </div>
        </div>
    </div>
    <div class="work">
        <h1 class="work_title">WORKS</h1>
        <div class="work_context">
            <div class="work_child1">
                <img class="work_image" src="aaa" alt="制作事例１">
                <p class="work_text">一つ目の事例紹介<br/>
                    簡単な紹介をします。
                </p>
                <a href="main/work" class="button works">READ MORE</a>
            </div>
            <div class="work_child2">
                <img class="work_image" src="aaa" alt="制作事例１">
                <p class="work_text">一つ目の事例紹介<br/>
                    簡単な紹介をします。
                </p>
                <a href="main/work" class="button works">READ MORE</a>
            </div>
            <div class="work_child3">
                <img class="work_image" src="aaa" alt="制作事例１">
                <p class="work_text">一つ目の事例紹介<br/>
                    簡単な紹介をします。
                </p>
                <a href="main/work" class="button works">READ MORE</a>
            </div>
        </div>
    </div>
    <div class="content" style="background-color: blueviolet">

    </div>
    <?= $this->element('main/footer')?>
</div>

