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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contactUserInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contactUserInfo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contact User Info'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactUserInfo form content">
            <?= $this->Form->create($contactUserInfo) ?>
            <fieldset>
                <legend><?= __('Edit Contact User Info') ?></legend>
                <?php
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('message');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
