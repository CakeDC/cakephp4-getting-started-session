<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Campaign $campaign
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Campaign'), ['action' => 'edit', $campaign->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Campaign'), ['action' => 'delete', $campaign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Campaigns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Campaign'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="campaigns view content">
            <h3><?= h($campaign->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($campaign->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($campaign->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Template') ?></th>
                    <td><?= $campaign->has('template') ? $this->Html->link($campaign->template->name, ['controller' => 'Templates', 'action' => 'view', $campaign->template->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($campaign->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($campaign->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($campaign->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Mailing Lists') ?></h4>
                <?php if (!empty($campaign->mailing_lists)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($campaign->mailing_lists as $mailingLists) : ?>
                        <tr>
                            <td><?= h($mailingLists->id) ?></td>
                            <td><?= h($mailingLists->name) ?></td>
                            <td><?= h($mailingLists->created) ?></td>
                            <td><?= h($mailingLists->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MailingLists', 'action' => 'view', $mailingLists->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MailingLists', 'action' => 'edit', $mailingLists->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MailingLists', 'action' => 'delete', $mailingLists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingLists->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Logs') ?></h4>
                <?php if (!empty($campaign->logs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Campaign Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Subject') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($campaign->logs as $logs) : ?>
                        <tr>
                            <td><?= h($logs->id) ?></td>
                            <td><?= h($logs->campaign_id) ?></td>
                            <td><?= h($logs->user_id) ?></td>
                            <td><?= h($logs->subject) ?></td>
                            <td><?= h($logs->body) ?></td>
                            <td><?= h($logs->reference) ?></td>
                            <td><?= h($logs->status) ?></td>
                            <td><?= h($logs->created) ?></td>
                            <td><?= h($logs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Logs', 'action' => 'edit', $logs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Logs', 'action' => 'delete', $logs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
