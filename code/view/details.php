<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php require 'view/includes/header.php'?>
<?php /** @var array $articles */ ?>
<?php /** @var Article $article */ ?>

<article>
    <h2><?= $article->getTitle() ?></h2>
    <p><?= $article->getContent() ?></p>
</article>


