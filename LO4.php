<?php

// Connecting to the database
$conn = mysqli_connect('location', 'darwin', 'test123123', 'pizza_hut');

// Checking for the connection
if($conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// Write query for all pizza
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// Get result
$result = mysqli_query($conn, $sql);

// Fetch results as an array
$pizas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result from its memory
mysqli_free_result($result);

// Closing the connection
mysqli_closs($conn);

// Exploding the Function
explode(',', $pizzas[0]['ingredients'])
?>
?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas! Hut</h4>

    <div class="container">
        <div class="row">
        
        <?php foreach($pizzas as $pizzas){ ?>
            <div class="col m6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizzas['title']); ?></h6> 
                        <div><?php echo htmlspecialchars($pizzas['ingredients']); ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php include('templates/footer.php'); ?>

</html>