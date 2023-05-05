<?php 
require_once __DIR__ . "/../autoland.php";
$sqls = "SELECT * from brands";
$statement = $pdoconn->query($sqls);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexlist</title>
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles//menu.css">
    <link rel="stylesheet" type="text/css" href="/../8.oop-PDO-eexercises/cssfiles//indexlist.css">
</head>
<body>
    <?php require_once __DIR__ . "/../menu.php";?>
    <div class="listtabela"> 
    <table>
        <th>
           <tr>
                <td>#</td>
                <td>Name</td>
                <td>Actions</td>
            </tr>
        </th>
<tbody>
<?php 
if($statement->rowCount() == 0){
           echo "<tr>
                <td colspan='2'>No added brands yet </td>
                </tr>";
} else {
    $counter = 1;
    while($rowBrand = $statement->fetch()){
        $id_encrypt = encrypt($rowBrand['id']);
        $id_encrypt = urlencode($id_encrypt); 
 
        echo "<tr>
                <td>{$counter}</td>
                <td>{$rowBrand['name']}</td>
                <td>
                <a href='view.php?id={$id_encrypt}'>View</a> 
                <a href='edit.php?id={$id_encrypt}'>Edit</a>
                <a href='delete.php?id={$id_encrypt}'>Delete</a>  
                </td>
                </tr>";
                $counter++;
    }
}


?>
</tbody>
</table>
</div>
</body>
</html>