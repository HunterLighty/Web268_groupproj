<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animal $animal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Animal'), ['action' => 'edit', $animal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Animal'), ['action' => 'delete', $animal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Animals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Animal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="animals view content">
            <h3><?= h($animal->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($animal->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Breed') ?></th>
                    <td><?= h($animal->breed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sex') ?></th>
                    <td><?= h($animal->sex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comments') ?></th>
                    <td><?= h($animal->comments) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($animal->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
