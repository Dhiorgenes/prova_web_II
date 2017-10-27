<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve $reserve
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reserves'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="reserves form large-9 medium-8 columns content">
    <?= $this->Form->create($reserve) ?>
    <fieldset>
        <legend><?= __('Add Reserve') ?></legend>
        <?php
            echo $this->Form->control('date_reserv');
            echo $this->Form->control('id_user');
            echo $this->Form->control('id_vehicle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>