<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CampaignsMailingList[]|\Cake\Collection\CollectionInterface $campaignsMailingLists
 */
?>
<div class="campaignsMailingLists index content">
    <?= $this->Html->link(__('New Campaigns Mailing List'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Campaigns Mailing Lists') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('campaign_id') ?></th>
                    <th><?= $this->Paginator->sort('mailing_list_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campaignsMailingLists as $campaignsMailingList): ?>
                <tr>
                    <td><?= $this->Number->format($campaignsMailingList->id) ?></td>
                    <td><?= $campaignsMailingList->has('campaign') ? $this->Html->link($campaignsMailingList->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $campaignsMailingList->campaign->id]) : '' ?></td>
                    <td><?= $campaignsMailingList->has('mailing_list') ? $this->Html->link($campaignsMailingList->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $campaignsMailingList->mailing_list->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $campaignsMailingList->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campaignsMailingList->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campaignsMailingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsMailingList->id)]) ?>
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
