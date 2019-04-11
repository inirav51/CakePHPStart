
<div class="container">
    <div class="row">


        <div class="col-md-6">
            <?php if ($this->fetch('kraft')): ?>
                <?= $this->fetch('title'); ?>
                <?= $this->fetch('kraft') ?>

            <?php endif ?>
        </div>

        <?php if ($this->fetch('links')): ?>

        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                    Actions
                    <?= $this->fetch('links') ?>
            </ul>

        </nav>
        <?php endif ?>

    </div>
</div>

<?= $this->fetch('content') ?>




