<?php
namespace Models;

use PDO;
use Config\Config;

class BasePDODAO {
    private PDO $db;

     // Instancie et retourne la connexion PDO
    private function getDB() : PDO {
        
          if ($this->db === null) {
            try {
                $this->db = new PDO(
                    Config::get('dsn'),
                    Config::get('user'),
                    Config::get('pass')
                );

                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }

        return $this->db;
    }

    // Exécute une requête SQL 
    protected function execRequest(string $sql, array $params = null): PDOStatement|false {
        $stmt = $this->getDB()->prepare($sql);

        if ($stmt === false) {
            return false;
        }

        if ($params !== null) {
            $stmt->execute($params);
        } else {
            $stmt->execute();
        }

        return $stmt;
    }
}


