<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php require 'view/includes/header.php'?>
<?php /** @var array $articles */ ?>
<?php /** @var Article $article */ ?>
<?php if ($_GET['page'] == 'articles') : ?>
<?php foreach ($articles as $article) : ?>
<div>
    <h2><?= $article->getTitle() ?></h2>
    <a href="../index.php?page=article-detail&article_slug=<?= $article->getSlug() ?>">Tell me more</a>
</div>
<?php endforeach; ?>
<?php endif; ?>
