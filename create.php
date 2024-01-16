<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new dried flower item</title>
</head>
<body>
    <h1>Create new dried flower item</h1>

    <form action="index.php?action=create" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>

        <button type="sumit">Create new item</button>

    </form>
</body>
</html>