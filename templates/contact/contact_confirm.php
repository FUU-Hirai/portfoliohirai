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
    <h1 class="contact_title">Confirm</h1>
    <h3 class="content_confirm_sub_title">お問い合わせ</h3>
    <div class="contact_form">
        <p class="contact_desc">こちらは確認画面です。<br/>
        以下の内容でお間違いないかご確認下さい。</p>
        <div class="contact_form">
            <?= $this->Form->create($contactUserInfoEntity) ?>
            <table>
                <tbody>
                <tr>
                    <th>会社名</th>
                    <td><?= $sPost['company_name'] ?></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><?= $sPost['email'] ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?= $sPost['tel'] ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><?= $sPost['message'] ?></td>
                </tr>
            </table>
        </div>
        <?= $this->Form->button('入力画面へ戻る',['type' => 'button',
            'onclick' => 'history.back()']) ?>
        <?= $this->Form->submit('送信') ?>
        <?= $this->Form->end()?>
    </div>
</div>
