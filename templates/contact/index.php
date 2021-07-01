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
    <h3 class="content_sub_title">お問い合せフォーム</h3>
    <div class="contact_form">
        <p class="contact_desc">こちらはお問い合わせフォームです。<br/>
        WEB制作やライティングのお仕事についてのご依頼、<br/>
        もしくはちょっとした質問でも構いません。お待ちしております。</p>
        <div class="contact_form">
            <?= $this->Form->create($contactUserInfoEntity) ?>
            <p>会社名　※必須です</p>
                <?= $this->Form->text('company_name',['placeholder' => '会社名', 'class' => 'form name','required' => false]) ?>
                <?= $this->Form->error('company_name')?>
            <p>メールアドレス　※必須です</p>
                <?= $this->Form->email('email',['placeholder' => 'メールアドレス' ,'class' => 'form email','required' => false]) ?>
                <?= $this->Form->error('email')?>
            <p>電話番号</p>
                <?= $this->Form->text('tel',['placeholder' => '電話番号', 'class' => 'form tel','required' => false]) ?>
                <?= $this->Form->error('tel')?>
            <p>お問い合わせ内容</p>
                <?= $this->Form->textarea('message',['placeholder' => 'お問い合わせ内容','class' => 'form_message','required' => false])?>
            <?= $this->Form->error('message')?>
                <?= $this->Form->submit('確認画面へ') ?>
            <?= $this->Form->end()?>
            <?= $this->Form->create(null, ['url' =>['controller' => 'main','action' => 'index']]) ?>
                <?= $this->Form->submit('トップページへ戻る') ?>
            <?= $this->Form->end()?>
        </div>
    </div>
</div>
