<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUserInfo[]|\Cake\Collection\CollectionInterface $contactUserInfo
 */
?>
<div class="contactUserInfo index content">
    <?= $this->Html->link(__('New Contact User Info'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contact User Info') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('company_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('message') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactUserInfo as $contactUserInfo): ?>
                <tr>
                    <td><?= $this->Number->format($contactUserInfo->id) ?></td>
                    <td><?= h($contactUserInfo->company_name) ?></td>
                    <td><?= h($contactUserInfo->email) ?></td>
                    <td><?= h($contactUserInfo->tel) ?></td>
                    <td><?= h($contactUserInfo->message) ?></td>
                    <td><?= h($contactUserInfo->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contactUserInfo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactUserInfo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactUserInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactUserInfo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
