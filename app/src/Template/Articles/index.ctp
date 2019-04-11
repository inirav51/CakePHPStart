<?php
$this->extend('/Common/index');

$this->start('kraft');?>


<h1><b>Articles</b></h1>

<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>


    <?php foreach ($article as $article): ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>

            <td>
                <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?> <?php echo '/' ?>
                <?= $this->Form->postLink (
                    'Delete',
                    ['action' => 'delete' , $article->slug],
                    ['confirm' => 'Are you sure?'])

                 ?>

            </td>
        </tr>

    <?php endforeach; ?>
</table

<div class="space-articles" style="float: left"><?= $this->Html->link("Add Article", ['action' => 'add']) ?> </div>
<div class="space-articles" style="float: right"><?= $this->Html->link("Logout", ['controller' => 'Users','action' => 'logout']) ?> </div>

<?php $this->end();?>




