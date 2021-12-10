<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Animal[]|\Cake\Collection\CollectionInterface $animals
 */
?>
<div class="animals index content">
    <?= $this->Html->link(__('New Animal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Animals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('breed') ?></th>
                    <th><?= $this->Paginator->sort('sex') ?></th>
                    <th><?= $this->Paginator->sort('comments') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?= $this->Number->format($animal->id) ?></td>
                    <td><?= h($animal->name) ?></td>
                    <td><?= h($animal->breed) ?></td>
                    <td><?= h($animal->sex) ?></td>
                    <td><?= h($animal->comments) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $animal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
