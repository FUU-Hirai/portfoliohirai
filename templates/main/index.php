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
<?= $this->Flash->render('contact_success') ?>
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
                <a class="button about" href="about/index">about Me</a>
            </div>
            <div class="form_right">
                <h2 class="float-right_title">contact</h2>
                <p class="right_form">WEB制作やライティングをしています。<br/>
                お仕事の相談はこちら！</p>
                <a class="button contact" href="contact/index">contact</a>
            </div>
        </div>
    </div>
    <div class="back_image after_about">

    </div>
    <div class="skills">
        <h1 class="skills_title">MY SKILLS</h1>
        <div class="skills_context">
            <div class="skills_writing">
                <h2 class="skills_writing_title">Writing<div class="skills_writing_sub_title">ライティング</div></h2>
                <div class="inline_main_skill_icon">
                    <i class="main_skill_icon fas fa-pen-fancy"></i>
                </div>
                <div class="skills_text">現在エンジニアや転職に関する記事を<br/>
                    執筆しています。<br/>
                また、ワードプレスへの入稿やアウトライン作成も可能です。<br/>
                自身のブログサイトも育てて行きます。</div>
            </div>
            <div class="skills_wordpress">
                <h2 class="skills_wordpress_title">WEB production<div class="skills_wordpress_sub_title">ウェブ制作</div></h2>
                <div class="inline_skill_wordpress_icon">
                    <i class="main_skill_icon fas fa-laptop-code"></i>
                </div>
                <div class="skills_text">
                    ワードプレスやcakePHPでウェブ制作を行います。<br/>
                    また、現在サイトを運営中です。<br/>
                    お仕事依頼など、どんどんご相談ください！</div>
            </div>
            <div class="skills_products">
                <h2 class="skills_products_title">Development<div class="skills_products_sub_title">システム開発</div></h2>
                <div class="skills_products_icon">
                    <i class="main_skill_icon far fa-file-code"></i>
                </div>
                <div class="skills_text">
                    PHP,HTML,CSS,JavaScript<br/>
                    を使ってのシステム開発経験があります。<br/>
                    ご興味ある方は、お問い合わせからご連絡下さい。
                    </div>
            </div>
        </div>
    </div>
    <div class="back_image after_skills">

    </div>
    <div class="work">
        <h1 class="work_title">WORKS</h1>
        <div class="work_context">
            <div class="work_child part1">
                <img class="work_image" src="./webroot/img/main_image/hao-pan-6AW09_kJMaw-unsplash.jpg" alt="制作事例１">
                <div class="work_des">
                    <p class="work_text">一つ目の事例タイトル<br/>
                        ツール：WordPress<br/>
                        簡単な紹介をします。
                    </p>
                    <a href="work/index" class="button works">READ MORE</a>
                </div>
            </div>
            <div class="work_child part2">
                <img class="work_image" src="./webroot/img/main_image/img.png" alt="制作事例２">
                <div class="work_des">
                    <p class="work_text">一つ目の事例タイトル<br/>
                        使用言語：HTML,CSS,JavaScript<br/>
                        簡単な紹介をします。
                    </p>
                    <a href="work/index" class="button works">READ MORE</a>
                </div>
            </div>
            <div class="work_child part3">
                <img class="work_image" src="./webroot/img/main_image/pawel-kadysz-CuFYW1c97w8-unsplash.jpg" alt="制作事例３">
                <div class="work_des">
                    <p class="work_text">一つ目の事例タイトル<br/>
                        使用言語：php<br/>
                        簡単な紹介をします。
                    </p>
                    <a href="work/index" class="button works">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content" style="background-color: blueviolet">

    </div>
</div>

