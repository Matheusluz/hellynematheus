<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Confirm'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="confirms index large-9 medium-8 columns content">
    <h3><?= __('Confirms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('send_message') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($confirms as $confirm): ?>
            <tr>
                <td><?= $this->Number->format($confirm->id) ?></td>
                <td><?= h($confirm->name) ?></td>
                <td><?= $this->Number->format($confirm->phone) ?></td>
                <td><?= h($confirm->email) ?></td>
                <td><?= h($confirm->send_message) ?></td>
                <td><?= h($confirm->created) ?></td>
                <td><?= h($confirm->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $confirm->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $confirm->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $confirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $confirm->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
