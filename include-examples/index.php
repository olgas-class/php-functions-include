<?php
require_once __DIR__ . "/partials/theme.php";

$students = [
    [
        'name' => 'pippo',
        'lastname' => 'neri'
    ],
    [
        'name' => 'pluto',
        'lastname' => 'bianchi'
    ],
    [
        'name' => 'paperino',
        'lastname' => 'rossi'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $color; ?>
    <?php foreach ($students as $student) { ?>
        <?php include __DIR__ . "/partials/template/card.php"; ?>
    <?php } ?>


</body>

</html>