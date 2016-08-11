<?
/**
 *
 */
class Database {
    private $host = "localhost";
    private $db_name = "phpajaxcrudlevel1";
    private $username = "root";
    private $password = "root";
    public $conn;

    //get database connection_aborted
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" .$this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;

    }

}




?>
