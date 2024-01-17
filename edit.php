<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit your flower</title>
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