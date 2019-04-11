<?php
$this->extend('/Common/view');

?>


<?php $this->start('viewKraft'); ?>

<h1><?= $article->title ?></h1>
<h3><?= $article->body ?></h3>
<p>Created: <?= $article->created->format(DATE_RFC850) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>

<?php $this->end(); ?>
