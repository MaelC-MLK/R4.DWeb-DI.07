<?php

namespace App\Entity;

use App\Repository\LegoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LegoRepository::class)]
class Lego
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 1000)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?int $pieces = null;

    #[ORM\Column(length: 255)]
    private ?string $boxImage = null;

    #[ORM\Column(length: 255)]
    private ?string $legoImage = null;

    #[ORM\ManyToOne(inversedBy: 'lego')]
    #[ORM\JoinColumn(nullable: false)]
    private ?LegoCollection $collection = null;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getPieces(): ?int
    {
        return $this->pieces;
    }

    public function setPieces(int $pieces): static
    {
        $this->pieces = $pieces;

        return $this;
    }

    public function getBoxImage(): ?string
    {
        return $this->boxImage;
    }

    public function setBoxImage(string $boxImage): static
    {
        $this->boxImage = $boxImage;

        return $this;
    }

    public function getLegoImage(): ?string
    {
        return $this->legoImage;
    }

    public function setLegoImage(string $legoImage): static
    {
        $this->legoImage = $legoImage;

        return $this;
    }

    public function getCollection(): ?LegoCollection
    {
        return $this->collection;
    }

    public function setCollection(?LegoCollection $collection): static
    {
        $this->collection = $collection;

        return $this;
    }
}
