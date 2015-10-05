<html>
<head>
    <title><?=$this->e($title)?></title>
</head>
<body>

<?php $this->insert('header') ?>

<!-- content -->

<div id="page">
    <?=$this->section('content')?>
</div>

<div id="sidebar">
    <?php if ($this->section('sidebar')): ?>
        <?=$this->section('sidebar')?>
    <?php else: ?>
        <?=$this->fetch('default-sidebar')?>
    <?php endif ?>
</div>

<?php $this->insert('footer') ?>

</body>
</html>