<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .create-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
    <title>Create new dried flower item</title>
</head>
<body>
    <h1>Create new dried flower item</h1>

    <a href="./" class="create-link">Back to Overview</a>

    <form action="index.php?action=create" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>

        <button type="sumit">Create new item</button>

    </form>
</body>
</html>