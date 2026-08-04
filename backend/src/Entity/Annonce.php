<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 5)]
    private ?string $typeSangRequis = null;

    #[ORM\Column]
    private ?int $quantiteNecessaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCollecte = null;

    #[ORM\Column(length: 255)]
    private ?string $lieuCollecte = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $criteresEligibilite = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\ManyToOne(inversedBy: 'annonces')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CentreTransfusion $centre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeSangRequis(): ?string
    {
        return $this->typeSangRequis;
    }

    public function setTypeSangRequis(string $typeSangRequis): static
    {
        $this->typeSangRequis = $typeSangRequis;

        return $this;
    }

    public function getQuantiteNecessaire(): ?int
    {
        return $this->quantiteNecessaire;
    }

    public function setQuantiteNecessaire(int $quantiteNecessaire): static
    {
        $this->quantiteNecessaire = $quantiteNecessaire;

        return $this;
    }

    public function getDateCollecte(): ?\DateTimeInterface
    {
        return $this->dateCollecte;
    }

    public function setDateCollecte(\DateTimeInterface $dateCollecte): static
    {
        $this->dateCollecte = $dateCollecte;

        return $this;
    }

    public function getLieuCollecte(): ?string
    {
        return $this->lieuCollecte;
    }

    public function setLieuCollecte(string $lieuCollecte): static
    {
        $this->lieuCollecte = $lieuCollecte;

        return $this;
    }

    public function getCriteresEligibilite(): ?string
    {
        return $this->criteresEligibilite;
    }

    public function setCriteresEligibilite(string $criteresEligibilite): static
    {
        $this->criteresEligibilite = $criteresEligibilite;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCentre(): ?CentreTransfusion
    {
        return $this->centre;
    }

    public function setCentre(?CentreTransfusion $centre): static
    {
        $this->centre = $centre;

        return $this;
    }
}
