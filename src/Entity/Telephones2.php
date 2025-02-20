<?php

namespace App\Entity;

use App\Repository\Telephones2Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Telephones2Repository::class)]
class Telephones2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(mappedBy: 'telephone2', cascade: ['persist', 'remove'])]
    private ?Meres $meres = null;

    #[ORM\OneToOne(mappedBy: 'telephone2', cascade: ['persist', 'remove'])]
    private ?Peres $peres = null;

    #[ORM\Column(length: 23)]
    private ?string $numero = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeres(): ?Meres
    {
        return $this->meres;
    }

    public function setMeres(?Meres $meres): static
    {
        // unset the owning side of the relation if necessary
        if ($meres === null && $this->meres !== null) {
            $this->meres->setTelephone2(null);
        }

        // set the owning side of the relation if necessary
        if ($meres !== null && $meres->getTelephone2() !== $this) {
            $meres->setTelephone2($this);
        }

        $this->meres = $meres;

        return $this;
    }

    public function getPeres(): ?Peres
    {
        return $this->peres;
    }

    public function setPeres(?Peres $peres): static
    {
        // unset the owning side of the relation if necessary
        if ($peres === null && $this->peres !== null) {
            $this->peres->setTelephone2(null);
        }

        // set the owning side of the relation if necessary
        if ($peres !== null && $peres->getTelephone2() !== $this) {
            $peres->setTelephone2($this);
        }

        $this->peres = $peres;

        return $this;
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
}
