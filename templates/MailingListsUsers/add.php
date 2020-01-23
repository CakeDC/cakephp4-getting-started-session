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
            <?= $this->Html->link(__('List Mailing Lists Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mailingListsUsers form content">
            <?= $this->Form->create($mailingListsUser) ?>
            <fieldset>
                <legend><?= __('Add Mailing Lists User') ?></legend>
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
