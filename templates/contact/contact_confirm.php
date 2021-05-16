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

<div class="contact">
    <h2 class="contact_title">Contact</h2>
    <div class="contact_form">
        <p class="contact_desc">こちらはお問い合わせフォームです。<br/>
            WEB制作やライティングのお仕事についてのご依頼、<br/>
            もしくはちょっとした質問でも構いません。お待ちしております。</p>
        <div class="contact_form">
            <?= $this->Form->create($contactUserInfoEntity) ?>
            <p>会社名</p>
            <?= $sPost['company_name'] ?>
            <p>メールアドレス</p>
            <?= $sPost['email'] ?>
            <p>電話番号</p>
            <?= $sPost['tel'] ?>
            <p>お問い合わせ内容</p>
            <?= $sPost['message'] ?>
            <?= $this->Form->submit('送信') ?>
            <?= $this->Form->end()?>
        </div>
    </div>
</div>
