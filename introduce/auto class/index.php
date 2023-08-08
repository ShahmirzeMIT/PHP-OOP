<?php
spl_autoload_register('MyAutoLoad');

function MyAutoLoad($className) {
    $path = "class/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;
    include_once $fullPath;
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $rabbit = new Animal("rabbit", 5, 4);
    echo $rabbit->getData();
    ?>
</body>
</html>
