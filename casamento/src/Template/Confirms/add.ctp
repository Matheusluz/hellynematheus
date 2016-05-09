<div class="confirms form large-9 medium-8 columns content">
    <?= $this->Form->create($confirm) ?>
    <fieldset>
        <legend><?= __('Add Confirm') ?></legend>
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
