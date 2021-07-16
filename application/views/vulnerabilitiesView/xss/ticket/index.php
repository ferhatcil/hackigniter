<!doctype html>
<html lang="en">
<?php $this->load->view("includes/head") ?>
<body class="antialiased">
<div class="page">
    <?php $this->load->view("includes/aside") ?>
    <?php $this->load->view("includes/header") ?>
    <div class="content">
        <?php $this->load->view("{$viewFolder}/{$subViewFolder}/ticket/content") ?>
    </div>
</div>
</body>
</html>