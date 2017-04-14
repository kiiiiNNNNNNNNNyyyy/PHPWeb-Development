<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('action', array('type' => 'Invoices', 'typePlural' => 'Invoices')); ?>
</nav>
<div class="invoices form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->control('patient_id', ['options' => $patients]);
            echo $this->Form->control('amount');
            echo $this->Form->control('services');
            echo $this->Form->control('due');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>