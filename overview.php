<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flowerpower - track your collection of dried flowers</title>
     <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .create-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>

<h1>Flowerpower - track your collection of dried flowers</h1>

<a href="./?action=create" class="create-link">Create new item</a>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li>
            <strong>Name:</strong><?= $card['name'] ?> <br>
            <strong>Color:</strong><?= $card['color'] ?> <br>
            <a href="index.php?action=edit&id=<?= $card['id'] ?>">Edit</a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>