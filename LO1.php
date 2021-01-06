<?php 

$name = 'Darwin';
$age = '20';
$number = 1;
$peopleOne = ['Ryu', 'Ken', 'Chun-Li'];

$stringOne = "This is a string. It's value is ";
$stringTwo = 'whatever I put here';

$manyArrays = [
    ['First', 'Second', 3],
    ['Fourth', 5, 'Sixth']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LO1 Darwin Albos</title>
</head>
<body>
    <h1>User Profile Page</h1>
     Name: <?php echo $name; ?> <br>
     Age: <?php echo $age; ?>
<br>
     <!-- Concatenation PHP -->
    <?php 
    echo $stringOne.$stringTwo;
    echo "<br> My name is <u>$name</u><br>";
    echo strlen($stringOne) . ' is the length of stringOne variable';
    ?>
<br>
    <!-- Numbers -->
    <?php 
    echo 'Math operation' . ' '. 4 * (4 + 5) / 3;
    ?>
<br>
    <!-- Array -->
    <?php 
    echo 'The value of array is '. $peopleOne[2] . '<br>'; 
    print_r($peopleOne);
    ?>
<br>
    <!-- Multi-dimensional Array -->
    <?php 
    print_r($manyArrays[0][1]);
    ?>


</body>
</html>