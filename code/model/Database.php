<?php


class Database
{
    private string $host = "localhost";
    private string $user = "USER";
    private string $pwd = "PASSWORD";
    private string $db = "fundamentals";
    private array $driverOpt = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    public function connect(): PDO
    {
        try {
            return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db, $this->user, $this->pwd, $this->driverOpt);
        } catch (PDOException) {
            require 'view/error.php';
        }
    }
}