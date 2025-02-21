<?php

namespace App\Entity;

use App\Repository\Telephones1Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Telephones1Repository::class)]
class Telephones1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(mappedBy: 'telephone1', cascade: ['persist', 'remove'])]
    private ?Meres $meres = null;

    #[ORM\OneToOne(mappedBy: 'telephone1', cascade: ['persist', 'remove'])]
    private ?Peres $peres = null;

    #[ORM\Column(length: 23)]
    private ?string $numero = null;

    public function __tostring()
    {
        return $this-> numero ?? '';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeres(): ?Meres
    {
        return $this->meres;
    }

    public function setMeres(Meres $meres): static
    {
        // set the owning side of the relation if necessary
        if ($meres->getTelephone1() !== $this) {
            $meres->setTelephone1($this);
        }

        $this->meres = $meres;

        return $this;
    }

    public function getPeres(): ?Peres
    {
        return $this->peres;
    }

    public function setPeres(Peres $peres): static
    {
        // set the owning side of the relation if necessary
        if ($peres->getTelephone1() !== $this) {
            $peres->setTelephone1($this);
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
