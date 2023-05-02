
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create category</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<?php require_once __DIR__ . "/menu.php"; ?>

    <form method="POST" action="storecategory.php" class="categoryForm">
    <label for="category">Name: </label>
    <input type="text" name="category" id="category" placeholder="insert category..."/>
    <button type="submit">Add category</button>
    </form>
 
</body>
</html>

