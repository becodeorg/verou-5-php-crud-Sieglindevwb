<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete your items</title>
</head>
<body>
    <h1>Delete your item</h1>

    <ul>
        <li>
            <strong>Name:</strong><?= $card['name'] ?> <br>
            <strong>Color:</strong><?= $card['color'] ?> <br>
        </li>
    </ul>

    <form action="index.php?action=delete&id=<?= $card['id'] ?>" method="post">
        <button type="submit">Delete</button>
    </form>
</body>
</html>