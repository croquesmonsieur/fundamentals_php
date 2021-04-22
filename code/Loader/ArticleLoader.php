<?php


class ArticleLoader
{
    private array $all_articles;


    public function getArticle(PDO $pdo, string $slug): Article {
        $stmt = $pdo->prepare("SELECT * FROM Articles WHERE slug = :slug");
        $stmt->bindValue(':slug', $_GET['article_slug']);
        $stmt->execute();
        $result = $stmt->fetch();
        return new Article((int)$result['id'], $result['title'], $result['slug'], $result['content']);
    }

    public function getAllArticles(PDO $pdo): array {
        $stmt = $pdo->prepare("SELECT * FROM Articles ORDER BY id");
        $stmt->execute();
        $results = $stmt->fetchAll();
        $all_articles = [];
        foreach ($results as $result ){
            $all_articles[] = new Article((int)$result['id'], $result['title'], $result['slug'], $result['content']);
        }
        return $all_articles;
    }
}