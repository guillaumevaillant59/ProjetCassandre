<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $numero = null;

    #[ORM\Column]
    private ?bool $statut = null;

    #[ORM\Column]
    private ?float $prixHorsTaxe = null;

    #[ORM\Column]
    private ?float $prixToutesTaxes = null;

    /**
     * @var Collection<int, Taxe>
     */
    #[ORM\ManyToMany(targetEntity: Taxe::class, inversedBy: 'factures')]
    private Collection $taxes;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Audit $audit = null;

    public function __construct()
    {
        $this->taxes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): static
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

    /**
     * @return Collection<int, Taxe>
     */
    public function getTaxes(): Collection
    {
        return $this->taxes;
    }

    public function addTax(Taxe $tax): static
    {
        if (!$this->taxes->contains($tax)) {
            $this->taxes->add($tax);
        }

        return $this;
    }

    public function removeTax(Taxe $tax): static
    {
        $this->taxes->removeElement($tax);

        return $this;
    }

    public function getAudit(): ?Audit
    {
        return $this->audit;
    }

    public function setAudit(?Audit $audit): static
    {
        $this->audit = $audit;

        return $this;
    }
}
