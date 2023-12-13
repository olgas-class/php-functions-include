<?php
echo __DIR__;
require_once __DIR__ . "/../theme.php";
?>
<div>
    <p>Tema: <?php echo $color; ?></p>
    <h2><?php echo $student['name']; ?> <?php echo $student['lastname']; ?></h2>
</div>
<hr>