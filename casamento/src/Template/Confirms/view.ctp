<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Confirm'), ['action' => 'edit', $confirm->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Confirm'), ['action' => 'delete', $confirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $confirm->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Confirms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Confirm'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="confirms view large-9 medium-8 columns content">
    <h3><?= h($confirm->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($confirm->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($confirm->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($confirm->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= $this->Number->format($confirm->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($confirm->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($confirm->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Send Message') ?></th>
            <td><?= $confirm->send_message ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($confirm->message)); ?>
    </div>
</div>
