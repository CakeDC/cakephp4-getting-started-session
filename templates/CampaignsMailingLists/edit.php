<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampaignsMailingList $campaignsMailingList
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campaignsMailingList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsMailingList->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Campaigns Mailing Lists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campaignsMailingLists form content">
            <?= $this->Form->create($campaignsMailingList) ?>
            <fieldset>
                <legend><?= __('Edit Campaigns Mailing List') ?></legend>
                <?php
                    echo $this->Form->control('campaign_id', ['options' => $campaigns]);
                    echo $this->Form->control('mailing_list_id', ['options' => $mailingLists]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
