<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Muraltipo $muraltipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Muraltipo'), ['action' => 'edit', $muraltipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Muraltipo'), ['action' => 'delete', $muraltipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $muraltipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Muraltipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Muraltipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="muraltipos view large-9 medium-8 columns content">
    <h3><?= h($muraltipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($muraltipo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($muraltipo->id) ?></td>
        </tr>
    </table>
</div>