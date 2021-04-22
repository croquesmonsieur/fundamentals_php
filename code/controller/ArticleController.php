<?php


class ArticleController
{
    private PDO $pdo;

    public function __construct()
    {
        $connection = new DataBase();
        $this->pdo = $connection->connect();
    }

    public function renderView(){
        $load_articles = new ArticleLoader();
        $articles = $load_articles->getAllArticles($this->pdo);

        require 'view/articles.php';
    }

    public function renderViewDetail(){
        $load_article_detail = new ArticleLoader();
        $article = $load_article_detail->getArticle($this->pdo, $_GET['article_slug']);

        require 'view/details.php';
    }
}