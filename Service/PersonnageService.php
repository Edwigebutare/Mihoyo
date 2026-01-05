<?php

namespace Service;

use Models\PersonnageDAO;

class PersonnageService
{
    private PersonnageDAO $dao;

    public function __construct()
    {
        $this->dao = new PersonnageDAO();
    }

    public function getAllPersonnages(): array
    {
        return $this->dao->getAll();
    }

    public function getPersonnageById(string $id): ?\Models\Personnage
    {
        return $this->dao->getByID($id);
    }
}
