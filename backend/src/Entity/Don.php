<?php

namespace App\Entity;

use App\Repository\DonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonRepository::class)]
class Don
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDon = null;

    #[ORM\Column]
    private ?int $quantiteMl = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $remarques = null;

    #[ORM\ManyToOne(inversedBy: 'dons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Donateur $donateur = null;

    #[ORM\ManyToOne(inversedBy: 'dons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CentreTransfusion $centre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDon(): ?\DateTimeInterface
    {
        return $this->dateDon;
    }

    public function setDateDon(\DateTimeInterface $dateDon): static
    {
        $this->dateDon = $dateDon;

        return $this;
    }

    public function getQuantiteMl(): ?int
    {
        return $this->quantiteMl;
    }

    public function setQuantiteMl(int $quantiteMl): static
    {
        $this->quantiteMl = $quantiteMl;

        return $this;
    }

    public function getRemarques(): ?string
    {
        return $this->remarques;
    }

    public function setRemarques(?string $remarques): static
    {
        $this->remarques = $remarques;

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
