<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Template[]|\Cake\Collection\CollectionInterface $templates
 */
?>
<div class="templates index content">
    <?= $this->Html->link(__('New Template'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Templates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($templates as $template): ?>
                <tr>
                    <td><?= $this->Number->format($template->id) ?></td>
                    <td><?= h($template->name) ?></td>
                    <td><?= h($template->created) ?></td>
                    <td><?= h($template->modified) ?></td>
                    <td><?= h($template->active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $template->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $template->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $template->id], ['confirm' => __('Are you sure you want to delete # {0}?', $template->id)]) ?>
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
