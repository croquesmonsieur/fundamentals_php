<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php // TODO: a dynamic title, changing per page would be better right? ?>
    <title>Home</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="../index.php?page=articles">Articles</a></li>
        <li><a href="../index.php?page=products"> Products</a></li>
    </ul>
</nav>
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

</body>
</html>
