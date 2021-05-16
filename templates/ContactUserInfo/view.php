<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUserInfo $contactUserInfo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contact User Info'), ['action' => 'edit', $contactUserInfo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contact User Info'), ['action' => 'delete', $contactUserInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactUserInfo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contact User Info'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contact User Info'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactUserInfo view content">
            <h3><?= h($contactUserInfo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($contactUserInfo->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($contactUserInfo->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($contactUserInfo->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($contactUserInfo->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contactUserInfo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($contactUserInfo->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
