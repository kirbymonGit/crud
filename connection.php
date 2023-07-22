<?php
class Database {
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "crud_example";
    private static $connection = null; // Variable estática para almacenar la conexión

    private function __construct() {}

    public static function getConnection() {
        if (self::$connection === null) {
            self::$connection = new mysqli(self::$servername, self::$username, self::$password, self::$database);
            if (self::$connection->connect_error) {
                die("Error al conectar a la base de datos: " . self::$connection->connect_error);
            }
            self::$connection->set_charset("utf8mb4");
        }
        return self::$connection;
    }
}
?>
