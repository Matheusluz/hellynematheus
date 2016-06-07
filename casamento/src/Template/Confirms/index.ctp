<div class="confirms index large-9 medium-8 columns content">
    <h3><?= __('Confirmações') ?></h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3 col-md-3"><h3><small>Nome</small></h3></div>
            <div class="col-xs-2 col-md-2"><h3><small>Confirmado?</small></h3></div>
            <div class="col-xs-1 col-md-1"><h3><small>Quantidade</small></h3></div>
            <div class="col-xs-2 col-md-2"><h3><small>Telefone</small></h3></div>
            <div class="col-xs-2 col-md-2"><h3><small>Email</small></h3></div>
            <div class="col-xs-2 col-md-2"><h3><small>Ações</small></h3></div>
        </div>
        <?php foreach ($confirms as $confirm): ?>
            <div class="row confirm">
                <div class="col-xs-3 col-md-3"><?= h($confirm->name) ?></div>
                <div class="col-xs-2 col-md-2"><?= h($confirm->confirm) ? "Sim" : "Não" ?></div>
                <div class="col-xs-1 col-md-1"><?= h($confirm->quantidy) ?></div>
                <div class="col-xs-2 col-md-2"><?= h($confirm->phone) ?></div>
                <div class="col-xs-2 col-md-2"><?= h($confirm->email) ?></div>
                <div class="col-xs-2 col-md-2">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $confirm->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $confirm->id], ['confirm' => __('Tem certeza que deseja apagar essa confirmação?')]) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('voltar')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
