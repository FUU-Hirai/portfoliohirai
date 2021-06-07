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
<!--        TODO サイト完成次第リンク挿入-->
<!--        <a href="https://matsuozouen.com/">-->
            <img class="work_detail_imag" src="../webroot/img/main_image/pawel-kadysz-CuFYW1c97w8-unsplash.jpg" alt="松尾自然園">
<!--        </a>-->
    </div>
    <div class="work_detail_des">
        <div class="work_detail_title">
            案件名：某システム
        </div>
        <div class="work_detail_tool">
            ツール：php
        </div>
        <div class="work_detail_text">
            Cakephpを使ってシステムを開発中です。<br/>
            決済システムと連携して、サブスクリプション機能を追加しようかと、、、。<br/>
            完成はまだ先ですが、開発したら公開します！
        </div>
    </div>
</div>
<?= $this->Form->create(null,[
    'url' => [
        'controller' => 'main','action' => 'index']
])?>
<?= $this->Form->button('トップページへ戻る')?>


