<?php

use Codebase42\VideoPHooksAVisibility\NewProduct;
use Codebase42\VideoPHooksAVisibility\Product;

require __DIR__ . '/../vendor/autoload.php';

$product1 = new Product;
$product1->setName('Produto um');
$product1->setPriceInCents(1099);

echo '<p><strong>ID do produto:</strong><br>' . $product1->getId() . '</p>';
echo '<p><strong>Nome do produto:</strong><br>' . $product1->getName() . '</p>';
echo '<p><strong>Preço:</strong><br>R$ ' . $product1->getPriceInReals() . '</p>';

echo '<hr>';

$product2 = new Product;
$product2->setName('Produto dois');
$product2->setPriceInReals(15.78);

echo '<p><strong>ID do produto:</strong><br>' . $product2->getId() . '</p>';
echo '<p><strong>Nome do produto:</strong><br>' . $product2->getName() . '</p>';
echo '<p><strong>Preço:</strong><br>R$ ' . $product2->getPriceInReals() . '</p>';

echo '<hr>';

$product3 = new NewProduct;
$product3->name = 'Produto dois';
$product3->priceInReals = 10.99;

echo '<p><strong>ID do produto:</strong><br>' . $product3->id . '</p>';
echo '<p><strong>Nome do produto:</strong><br>' . $product3->name . '</p>';
echo '<p><strong>Preço:</strong><br>R$ ' . $product3->priceInReals . '</p>';
