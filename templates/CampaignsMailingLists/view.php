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
            <?= $this->Html->link(__('Edit Campaigns Mailing List'), ['action' => 'edit', $campaignsMailingList->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Campaigns Mailing List'), ['action' => 'delete', $campaignsMailingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsMailingList->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Campaigns Mailing Lists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Campaigns Mailing List'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campaignsMailingLists view content">
            <h3><?= h($campaignsMailingList->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Campaign') ?></th>
                    <td><?= $campaignsMailingList->has('campaign') ? $this->Html->link($campaignsMailingList->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $campaignsMailingList->campaign->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Mailing List') ?></th>
                    <td><?= $campaignsMailingList->has('mailing_list') ? $this->Html->link($campaignsMailingList->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $campaignsMailingList->mailing_list->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($campaignsMailingList->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
