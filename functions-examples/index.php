<?php

function say_hello($name) {
    echo 'Hello ' . $name;
}

say_hello('Luca');
say_hello('Marco');
say_hello('Serena');

function is_even($number) {
    return $number % 2 === 0 ? true : false;
}

var_dump(is_even(4));


$products = [
    'mela',
    'pera',
    'latte'
];

$copy_products = $products;

$copy_products[] = 'pane';

var_dump($products, $copy_products);

