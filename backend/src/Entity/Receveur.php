<?php

namespace App\Entity;

use App\Repository\ReceveurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReceveurRepository::class)]
class Receveur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomReceveur = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomReceveur = null;

    #[ORM\Column(length: 5)]
    private ?string $groupeSanguinRequis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomReceveur(): ?string
    {
        return $this->nomReceveur;
    }

    public function setNomReceveur(string $nomReceveur): static
    {
        $this->nomReceveur = $nomReceveur;

        return $this;
    }

    public function getPrenomReceveur(): ?string
    {
        return $this->prenomReceveur;
    }

    public function setPrenomReceveur(string $prenomReceveur): static
    {
        $this->prenomReceveur = $prenomReceveur;

        return $this;
    }

    public function getGroupeSanguinRequis(): ?string
    {
        return $this->groupeSanguinRequis;
    }

    public function setGroupeSanguinRequis(string $groupeSanguinRequis): static
    {
        $this->groupeSanguinRequis = $groupeSanguinRequis;

        return $this;
    }
}
