<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRdv = null;

    #[ORM\Column(length: 10)]
    private ?string $heureRdv = null;

    #[ORM\Column(length: 20)]
    private ?string $statutRdv = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Donateur $donateur = null;

    #[ORM\ManyToOne(inversedBy: 'rendezVouses')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CentreTransfusion $centre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->dateRdv;
    }

    public function setDateRdv(\DateTimeInterface $dateRdv): static
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    public function getHeureRdv(): ?string
    {
        return $this->heureRdv;
    }

    public function setHeureRdv(string $heureRdv): static
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }

    public function getStatutRdv(): ?string
    {
        return $this->statutRdv;
    }

    public function setStatutRdv(string $statutRdv): static
    {
        $this->statutRdv = $statutRdv;

        return $this;
    }

    public function getDonateur(): ?Donateur
    {
        return $this->donateur;
    }

    public function setDonateur(?Donateur $donateur): static
    {
        $this->donateur = $donateur;

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
