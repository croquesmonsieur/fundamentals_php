<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'controller/ArticleController.php';
require 'controller/ProductController.php';
require 'Loader/ArticleLoader.php';
require 'Loader/ProductLoader.php';
require 'model/Article.php';
require 'model/Database.php';
require 'model/Product.php';

if (!empty($_GET['page'])) {
    if ($_GET['page'] == 'Home') {
        $article_page = new ArticleController();
        $article_page->renderView();
    }
    if ($_GET['page'] == 'articles') {
        $article_page = new ArticleController();
        $article_page->renderView();
    }
    if ($_GET['page'] == 'products') {
        $product_page = new ProductController();
        $product_page->renderView();
    }
    if ($_GET['page'] == 'article-detail' && !empty($_GET['article_slug'])){
        $article_detail = new ArticleController();
        $article_detail->renderViewDetail();
    }
} else {
require 'view/Home.php';
}


/*
$products = [
    [
        'id' => 1,
        'name' => 'A guide to brewing the perfect Duvel',
        'price' => 3.5,
        'tax' => 0.21,
    ],
    [
        'id' => 2,
        'name' => 'The secrets of the world wide web',
        'price' => 9000,
        'tax' => 0.21,
    ]
];

$articles = [
    [
        'id' => '1',
        'title' => 'Cake ipsum',
        'slug' => 'cake-ipsum',
        'content' => 'Soufflé marzipan bear claw marshmallow pastry chocolate bar topping. Jelly biscuit cotton candy pudding sweet roll cupcake. Jelly-o oat cake candy canes cotton candy cake caramels. Carrot cake chocolate cake bear claw apple pie chocolate bar gummi bears pastry brownie.',
    ],
    [
        'id' => '2',
        'title' => 'Tiramisu muffin macaroon',
        'slug' => 'tiramisu-muffin-macaroon',
        'content' => 'Powder icing candy canes tiramisu muffin macaroon sesame snaps. Jelly halvah donut chocolate cake brownie cake gingerbread donut icing. Pie jelly chupa chups caramels danish soufflé. Tart liquorice bear claw cheesecake powder. Sweet jelly powder apple pie bear claw. Wafer donut pudding powder pie soufflé. Macaroon jelly beans croissant ice cream wafer sweet sugar plum bear claw gingerbread.',
    ],
    [
        'id' => '3',
        'title' => 'Koen sleep statistics',
        'slug' => 'koen-sleep-statistics',
        'content' => 'We are still waiting for data to come him. He might have fallen asleep while sending them.'
    ],
    [
        'id' => '4',
        'title' => 'Lamarr 4 breaks coding world record',
        'slug' => 'lamarr-4-breaks-coding-world-record',
        'content' => 'We don\'t know how they managed it, but they sure did.'
    ]
];

*/

