<?php 
    
// Loops
	$ninjas = ['darwin', 'carl', 'von'];


	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	$i = 0;

	while($i < count($products)){
		echo $products[$i]['name'];
		echo '<br />';
		$i++;
	}

// Booleans
    
	// echo true // echo's "1"
	// echo false // echo's ""

	// numbers
	echo 10 < 20;

	// strings
	echo 'darwin' < 'mario';

// Coditional statements

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){

		if($product['price'] < 15 && $product['price'] > 2){
			echo $product['name'] . '<br />';
		}

		if($product['price'] > 20 || $product['price'] < 10){
			echo $product['name'] . '<br />';
		}

    }
    
// Functions

    function sayHello($name = 'shaun', $time = 'morning'){
        echo "Good $time, $name";
    }

    sayHello('yoshi', 'night');

    function formatProduct($product){
        return "The {$product['name']} costs £{$product['price']} to buy <br />";
}

?>



<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
	<title>LO2, Darwin Albos</title>
</head>

<body>
	<h1>Products</h1>
	<ul>
		<?php foreach($products as $product){ ?>
			<h3><?php echo $product['name']; ?></h3>
			<p>£<?php echo $product['price']; ?></p>
		<?php } ?>
	</ul>
</body>
</html>