<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $confirm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $confirm->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Confirms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="confirms form large-9 medium-8 columns content">
    <?= $this->Form->create($confirm) ?>
    <fieldset>
        <legend><?= __('Edit Confirm') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
            echo $this->Form->input('message');
            echo $this->Form->input('send_message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
