<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MailingListsUser $mailingListsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mailingListsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mailingListsUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mailing Lists Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mailingListsUsers form content">
            <?= $this->Form->create($mailingListsUser) ?>
            <fieldset>
                <legend><?= __('Edit Mailing Lists User') ?></legend>
                <?php
                    echo $this->Form->control('mailing_list_id', ['options' => $mailingLists]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
