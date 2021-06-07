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

<div class="work_detail">
    <div class="work_detail_image">
        <a href="https://matsuozouen.com/">
            <img class="work_detail_imag" src="../webroot/img/main_image/matsuosizenen.jpg" alt="松尾自然園">
        </a>
    </div>
    <div class="work_detail_des">
        <div class="work_detail_title">
            案件名：松尾自然園
        </div>
        <div class="work_detail_tool">
            ツール：WordPress
        </div>
        <div class="work_detail_text">
            WordPressにて、松尾自然園のコーポレートサイトを制作させていただきました。<br/>
            滅多に見る機会のない「樹木」や「庭石」を販売していて、長年の実績を持っている老舗の造園。<br/>
            「商品」と「実績」をアピールするためにどうするか、お客様にヒアリングしながら制作しました。
        </div>
    </div>
</div>
<?= $this->Form->create(null,[
    'url' => [
        'controller' => 'main','action' => 'index']
])?>
<?= $this->Form->button('トップページへ戻る')?>


