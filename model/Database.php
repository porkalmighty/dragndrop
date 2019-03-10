<?php
class Database
{
    private static $user = 'root';
    private static $pass = '';
    private static $conn = 'mysql:host=localhost;dbname=db_drag_drop';
    private static $dbcon;

    public function __construct()
    {

    }

    public function getDb()
    {
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new PDO(self::$conn, self::$user, self::$pass);
                self::$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                echo 'Connection Error';
                exit();
            }
        }

        return self::$dbcon;
    }
}
