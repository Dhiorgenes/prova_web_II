<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reserve $reserve
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reserve'), ['action' => 'edit', $reserve->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reserve'), ['action' => 'delete', $reserve->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reserve->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reserves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reserve'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reserves view large-9 medium-8 columns content">
    <h3><?= h($reserve->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reserve->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($reserve->id_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vehicle') ?></th>
            <td><?= $this->Number->format($reserve->id_vehicle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Reserv') ?></th>
            <td><?= h($reserve->date_reserv) ?></td>
        </tr>
    </table>
</div>
