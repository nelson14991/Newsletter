<?php
class Database
{
    private static $dbName = 'newyorkc_newsletter';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'newyorkc_newsletteruser';
    private static $dbUserPassword = 'newsletter_db_14';
    private static $cont = null;
    public function __construct() {
        die('Init function is not allowed');
    }
    public static function connect() {
        if (null === self::$cont) {
            try {
                self::$cont =  new PDO('mysql:host='.self::$dbHost.'; dbname='.self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
    public static function disconnect() {
        self::$cont = null;
    }
}
?>