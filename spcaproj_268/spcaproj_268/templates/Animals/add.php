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
            <?= $this->Html->link(__('List Animals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="animals form content">
            <?= $this->Form->create($animal) ?>
            <fieldset>
                <legend><?= __('Add Animal') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('breed');
                    echo $this->Form->control('sex');
                    echo $this->Form->control('comments');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
