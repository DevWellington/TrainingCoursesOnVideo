<?php
require_once 'autoloader.php';

use CodeEducation\Produto\Produto;

$produtos = [
    new Produto(1, 'Produto 1'),
    new Produto(2, 'Produto 2'),
    new Produto(3, 'Produto 3'),
    new Produto(4, 'Produto 4'),
    new Produto(5, 'Produto 5'),	
];

$iterator = new CodeEducation\Produto\IteratorFiltravel($produtos);
foreach($iterator as $produto) {
    var_dump($produto);	
}

