<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator\Regex;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le numéro est obligatoire.")]
    #[Assert\Regex(
        pattern: Regex::NUMBER,
        message: "Le numéro ne doit contenir que des lettres et des chiffres."
    )]
    private ?string $numero = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom de la rue est obligatoire.")]
    #[Assert\Regex(
        pattern: Regex::STREET,
        message: "Le nom de la rue '{{ value }}' n'est pas valide."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $complementaire = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le code postal est obligatoire.")]
    #[Assert\Regex(
        pattern: Regex::ZIP_CODE,
        message: "Le code postal '{{ value }}' n'est pas valide."
    )]
    private ?string $postale = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "La ville est obligatoire.")]
    private ?string $ville = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "Le pays est obligatoire.")] 
    #[Assert\Regex(
        pattern: Regex::CITY,
        message: "Le pays '{{ value }}' n'est pas valide."
    )]
    private ?string $pays = null;

    #[ORM\Column]
    private ?bool $ue = null;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getComplementaire(): ?string
    {
        return $this->complementaire;
    }

    public function setComplementaire(?string $complementaire): static
    {
        $this->complementaire = $complementaire;

        return $this;
    }

    public function getPostale(): ?string
    {
        return $this->postale;
    }

    public function setPostale(string $postale): static
    {
        $this->postale = $postale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function isUe(): ?bool
    {
        return $this->ue;
    }

    public function setUe(bool $ue): static
    {
        $this->ue = $ue;

        return $this;
    }
}
