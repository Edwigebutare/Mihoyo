<?php

namespace Models;

use PDO;

class PersonnageDAO extends BasePDODAO
{
    public function getAll(): array
    {
        $sql = "SELECT * FROM personnage";
        $stmt = $this->execRequest($sql);

        $personnages = [];

        if ($stmt != false) {
            $rows = $stmt->fetchAll();

            foreach ($rows as $row) {
                $personnage = new Personnage();

                $personnage->setId($row['id']);
                $personnage->setName($row['name']);
                $personnage->setElement($row['element']);
                $personnage->setUnitclass($row['unitclass']);
                $personnage->setRarity((int)$row['rarity']);
                $personnage->setOrigin($row['origin']);
                $personnage->setUrlImg($row['url_img']);

                $personnages[] = $personnage;
            }
        }

        return $personnages;
    }

    public function getByID(string $idPersonnage): ?Personnage
    {
        $sql = "SELECT * FROM personnage WHERE id = ?";
        $stmt = $this->execRequest($sql, [$idPersonnage]);

        if ($stmt != false) {
            $row = $stmt->fetch();

            if ($row != false) {
                $personnage = new Personnage();

                $personnage->setId($row['id']);
                $personnage->setName($row['name']);
                $personnage->setElement($row['element']);
                $personnage->setUnitclass($row['unitclass']);
                $personnage->setRarity((int)$row['rarity']);
                $personnage->setOrigin($row['origin']);
                $personnage->setUrlImg($row['url_img']);

                return $personnage;
            }
        }

        return null;
    }
}
