
<?php

function findAllProducts() : array 
{

$products = [];

$product1 = [
    "imagePath" => "https://static.fandomspot.com/images/07/7615/12-kiyotaka-ayanokoji-classroom-of-the-elite.jpg",
    "name" => "Ayanokoji",
    "price" => 3,
    "id" => 1
];

$product2 = [
    "imagePath" => "https://i.pinimg.com/originals/27/fd/ed/27fdedc32af3de54854acf497f410b88.jpg",
    "name" => "Hori",
    "price" => 3000,
    "id" => 2
];

$product3 = [
    "imagePath" => "https://i.pinimg.com/736x/34/a4/93/34a4932eb49fc76c34542fb56eb0aff7.jpg",
    "name" => "Makoto",
    "price" => 30000,
    "id" => 3
];

$products[] = $product1;
$products[] = $product2;
$products[] = $product3;

    return $products;

}


function findOneProduct(int $id) : ?array
{
    $products = findAllProducts();

    foreach($products as $item)
    {
        if($item['id'] === $id){
            return $item;
        }
    }
    return null;
}
?>