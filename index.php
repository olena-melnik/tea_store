<?php

// $sql='SELECT * FROM `unit`';
// $select=$db->pdo->query($sql);
// var_dump($select->fetchAll());
// use model\Unit;
require_once 'model/Unit.php';
require_once 'model/Category.php';
require_once 'model/StatusProduct.php';
require_once 'model/Product.php';

$unit=new Unit();
$unit->find(28);
$unit->name="0,357 кг";
// $unit->save();
echo '<pre>';
var_dump($unit);
// var_dump($unit2);
echo '</pre>';
// $unit->save();


// $unit2=new Unit();
// $unit2->name='пачка';

// $unit2->save();

$product=new Product();
$product->find(1);

var_dump($product->categories);

// $status_product=new StatusProduct();
// $status_product->id=2;
// $status_product->find();

// $product=new Product();
// $product->id=5;
// $product->find();

// var_dump($product);


?>