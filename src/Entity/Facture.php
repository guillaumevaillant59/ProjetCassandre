<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column]
    private ?bool $statut = null;

    #[ORM\Column]
    private ?float $prixHorsTaxe = null;

    #[ORM\Column]
    private ?float $prixToutesTaxes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPrixHorsTaxe(): ?float
    {
        return $this->prixHorsTaxe;
    }

    public function setPrixHorsTaxe(float $prixHorsTaxe): static
    {
        $this->prixHorsTaxe = $prixHorsTaxe;

        return $this;
    }

    public function getPrixToutesTaxes(): ?float
    {
        return $this->prixToutesTaxes;
    }

    public function setPrixToutesTaxes(float $prixToutesTaxes): static
    {
        $this->prixToutesTaxes = $prixToutesTaxes;

        return $this;
    }
}
