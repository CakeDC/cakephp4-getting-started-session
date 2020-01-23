<div class="campaigns dashboard content">
    <h3><?= __('New Campaigns') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($campaigns as $campaign): ?>
                <tr>
                    <td><?= h($campaign->name) ?></td>
                    <td class="actions">
                        <?= $this->Form->postLink(__('Send'), [
                            'action' => 'send',
                            $campaign->id
                        ], [
                            'confirm' => __('Are you sure you want to send campaign {0}?', $campaign->name)
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
