<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('action', array('type' => 'Carriers', 'typePlural' => 'Carriers')); ?>
</nav>
<div class="carriers form large-9 medium-8 columns content">
    <?= $this->Form->create($carrier) ?>
    <fieldset>
        <legend><?= __('Add Carrier') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('carrier_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
