

<?php



class Connexion
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "hotels";
    private $connexion;

    public function __construct()
    {
        try {
            $this->conx = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->db, $this->username, $this->password);
            $this->conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "echec de la connexion" . $e->getMessage();
        }
    }

   
}


