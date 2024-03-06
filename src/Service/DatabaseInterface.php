<?php

namespace App\Service;

use PDO;
use App\Entity\Lego;

class DatabaseInterface
{
    private array $legos = [];


    public function getAllLegos(): array
    {
        
        $pdo = new PDO('mysql:host=tp-symfony-mysql;dbname=lego_store', 'root', 'root' );
        $statement = $pdo->query('SELECT * FROM lego');
        $legosData = $statement->fetchAll();

        foreach ($legosData as $lego) {
            $legosTab = new Lego (
                $lego['id'],
                $lego['name'],
                $lego['collection']
            );
            $legosTab->setDescription($lego['description']);
            $legosTab->setPrice($lego['price']);
            $legosTab->setPieces($lego['pieces']);
            $legosTab->setBoxImage($lego['imagebox']);
            $legosTab->setLegoImage($lego['imagebg']);

            $this->legos[] = $legosTab;
        }

        return $this->legos;
    }

    public function getLegosByCollection(string $collection): array
    {
        $pdo = new PDO('mysql:host=tp-symfony-mysql;dbname=lego_store', 'root', 'root' );
        $statement = $pdo->prepare("SELECT * FROM lego WHERE collection = '$collection'");
        $statement->execute();
        $legosData = $statement->fetchAll();

        foreach ($legosData as $lego) {
            $legosTab = new Lego (
                $lego['id'],
                $lego['name'],
                $lego['collection']
            );
            $legosTab->setDescription($lego['description']);
            $legosTab->setPrice($lego['price']);
            $legosTab->setPieces($lego['pieces']);
            $legosTab->setBoxImage($lego['imagebox']);
            $legosTab->setLegoImage($lego['imagebg']);

            $this->legos[] = $legosTab;
        }

        return $this->legos;

    }
}
