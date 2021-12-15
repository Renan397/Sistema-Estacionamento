<?php
namespace Source\Database;

require __DIR__ . "/../../config/config.php";


use \PDO;
use \PDOException;

class Connect
{
    private const HOST = CONF_DB_HOST;
    private const USER = CONF_DB_USER;
    private const DBNAME = CONF_DB_NAME;
    private const PASSWD = CONF_DB_PASS;

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];
    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                echo $exception;
            }
        }
        return self::$instance;
    }
};
