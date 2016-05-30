<div class="confirms index large-9 medium-8 columns content">
    <h3><?= __('Confirmações') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('confirm') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('quantidy') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($confirms as $confirm): ?>
            <tr>
                <td><?= h($confirm->confirm) ?></td>
                <td><?= h($confirm->name) ?></td>
                <td><?= h($confirm->quantidy) ?></td>
                <td><?= h($confirm->phone) ?></td>
                <td><?= h($confirm->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $confirm->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $confirm->id], ['confirm' => __('Tem certeza que deseja apagar essa confirmação?')]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
