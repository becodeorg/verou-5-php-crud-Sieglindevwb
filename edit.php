<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit your flower</title>
    <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }
        form {
            margin-bottom: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        input {
            margin-bottom: 10px;
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
    <h1>Edit your item</h1>
    <form action="index.php?action=edit&id=<?= $card['id']; ?>" method="post">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $card['name']?>" required><br>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" value="<?= $card['color'] ?>" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>