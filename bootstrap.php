<?php
require __DIR__ . '/source/autoload.php';

if (isset($_POST['productValue']) && !empty($_POST['productValue'])) {
    $product = new \Source\App\Product(
        $_POST['productValue'],
        $_POST['taxValue']
    );
} else {
    $product = new \Source\App\Product('', '');
}
