<?php


/* indique où "vit" ce fichier */
namespace App\Controller;

/* indique l'utilisation du bon bundle pour gérer nos routes */
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use stdClass;
use App\Entity\Lego;
use Symfony\Component\HttpFoundation\Response;

/* le nom de la classe doit être cohérent avec le nom du fichier */
class LegoController extends AbstractController
{
    private array $legos = [];

    public function __construct()
    {
        $data = file_get_contents(__DIR__ . '../../data.json');
        $legosData = json_decode($data);

        foreach ($legosData as $legoData) {
            $lego = new Lego(
                $legoData->id,
                $legoData->name,
                $legoData->collection
            );
            $lego->setDescription($legoData->description);
            $lego->setPrice($legoData->price);
            $lego->setPieces($legoData->pieces);
            $lego->setBoxImage($legoData->images->box);
            $lego->setLegoImage($legoData->images->bg);
            $this->legos[] = $lego;
        }
    }   

    #[Route('/')]
    public function home()
    {   
        return $this->render('/lego.html.twig', [
            'legos' => $this->legos,
        ]);
    }


    #[Route('/{collection}', 'filter_by_collection', requirements: ['collection' => 'Creator|Star Wars|Creator Expert'])]
    public function filter($collection): Response
    {
        $legos = array_filter($this->legos, function ($lego) use ($collection) {
            return $lego->getCollection() === $collection;
        });

        return $this->render('/lego.html.twig', [
            'legos' => $legos,
        ]);
    }

   // L’attribute #[Route] indique ici que l'on associe la route
   // "/" à la méthode home pour que Symfony l'exécute chaque fois
   // que l'on accède à la racine de notre site.

    // #[Route('/')]
    // public function home()
    // {   
    //     $cocci = new stdClass();
    //     $cocci->collection = "Creator Expert";
    //     $cocci->id = 10252;
    //     $cocci->name = "La coccinelle Volkwagen";
    //     $cocci->description = "Construis une réplique LEGO® Creator Expert de l'automobile la plus populaire au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le charme et la personnalité de la voiture, notamment un coloris bleu ciel, des ailes arrondies, des jantes blanches avec des enjoliveurs caractéristiques, des phares ronds et des clignotants montés sur les ailes.";
    //     $cocci->price = 94.99;
    //     $cocci->pieces = 1167;
    //     $cocci->boxImage = "LEGO_10252_Box.png";
    //     $cocci->legoImage = "LEGO_10252_Main.jpg";

    //     return $this->render('/lego.html.twig', [
    //         'cocci' => $cocci,
    //     ]);
    // }



   #[Route('/me', )]
   public function Me()
   {
       die("Get lost.");
   }
}


