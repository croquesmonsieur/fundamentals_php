<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php require 'includes/header.php'?>
<?php /** @var array $products */ ?>
<?php /** @var Product $product */ ?>

<?php if ($_GET['page'] == 'products') : ?>
    <?php foreach ($products as $product) : ?>
        <div>
            <h2><?= $product->getName() ?></h2>
            <p>Price (tax included): €<?= $product->makePriceTaxIncluded($product->getPrice(), $product->getTax()) ?></p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<!--
round($product->getPrice() * (1 + $product->getTax()), 2)
-->