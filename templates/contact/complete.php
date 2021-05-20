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
<div class="content_complete">
    <?= $this->Form->create(null,[
        'url' => [
            'controller' => 'main','action' => 'index']
    ])?>
    <h1 class="content_complete_title">Thank you!</h1>
            <h3 class="content_complete_sub_title">お問い合わせが送信されました</h3>
    <div class="content_complete_context">
        <p>お問い合わせありがとうございます。<br/>
        お問い合わせ内容につきましては、メールにて返信させていただきます。</p>
    </div>
    <?= $this->Form->button('トップページへ戻る')?>
</div>
