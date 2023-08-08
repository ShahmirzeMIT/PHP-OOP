<?php
 
    // include('./first/first.php');
    include('Person.php');
    // include('./third/index.php');

   

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
    

    $person1 = new Person();
    $person1->setName("John","blue",28); 

    echo $person1->name."<br/>";
    echo $person1->eyeColor."<br/>";
    echo $person1->age."<br/>";
    echo $person1->GetName();
    // echo "DrinkAge:  ". People::$drinkAge ."<br/>";
    // People::SetDrinkAge(18);
    // echo "DrinkAge:  ". People::$drinkAge ;

    ?>
    
</body>
</html>