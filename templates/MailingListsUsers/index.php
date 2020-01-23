<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MailingListsUser[]|\Cake\Collection\CollectionInterface $mailingListsUsers
 */
?>
<div class="mailingListsUsers index content">
    <?= $this->Html->link(__('New Mailing Lists User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mailing Lists Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mailing_list_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mailingListsUsers as $mailingListsUser): ?>
                <tr>
                    <td><?= $this->Number->format($mailingListsUser->id) ?></td>
                    <td><?= $mailingListsUser->has('mailing_list') ? $this->Html->link($mailingListsUser->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $mailingListsUser->mailing_list->id]) : '' ?></td>
                    <td><?= $mailingListsUser->has('user') ? $this->Html->link($mailingListsUser->user->id, ['controller' => 'Users', 'action' => 'view', $mailingListsUser->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mailingListsUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mailingListsUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mailingListsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingListsUser->id)]) ?>
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
