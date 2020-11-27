<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>

<h1> Today tasks :</h1>
    <ul>
    <?php foreach ($tasks as $task) : ?>

        <li>

            <?php if ($task->completed) : ?>
            
                <strike> <?= $task->description; ?> </strike>
            <?php else: ?>

                <?= $task->description; ?>
            <?php endif ?>

        </li>

     <?php endforeach; ?>
    </ul>

</body>
</html>