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
            <?= $this->Html->link(__('Edit Mailing Lists User'), ['action' => 'edit', $mailingListsUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mailing Lists User'), ['action' => 'delete', $mailingListsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingListsUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mailing Lists Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mailing Lists User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mailingListsUsers view content">
            <h3><?= h($mailingListsUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Mailing List') ?></th>
                    <td><?= $mailingListsUser->has('mailing_list') ? $this->Html->link($mailingListsUser->mailing_list->name, ['controller' => 'MailingLists', 'action' => 'view', $mailingListsUser->mailing_list->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $mailingListsUser->has('user') ? $this->Html->link($mailingListsUser->user->id, ['controller' => 'Users', 'action' => 'view', $mailingListsUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mailingListsUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
