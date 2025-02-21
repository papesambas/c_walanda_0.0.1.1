<?php

namespace App\Entity;

use App\Entity\Trait\CreatedAtTrait;
use App\Entity\Trait\EntityTrackingTrait;
use App\Repository\DetailsCaissesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DetailsCaissesRepository::class)]
class DetailsCaisses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $dateOp = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: "La désignation ne peut pas être vide.")]
    #[Assert\Length(max: 150, maxMessage: "La désignation ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $designation = null;

    #[ORM\Column(nullable: true)]
    private ?float $debit = null;

    #[ORM\Column(nullable: true)]
    private ?float $credit = null;

    #[ORM\Column]
    private ?float $solde = null;

    #[ORM\Column]
    private ?float $soldeCumul = null;

    #[ORM\ManyToOne(inversedBy: 'detailsCaisses', fetch: "LAZY")]
    #[ORM\JoinColumn(nullable: false,referencedColumnName: 'id',)]
    private ?Caisses $caisse = null;

    #[ORM\ManyToOne(inversedBy: 'detailsCaisses', fetch: "LAZY")]
    #[ORM\JoinColumn(nullable: false,referencedColumnName: 'id',)]
    private ?Users $author = null;

    public function __tostring()
    {
        return $this-> dateOp.'-'.$this-> designation.'-'.$this-> author ?? '';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOp(): ?\DateTimeImmutable
    {
        return $this->dateOp;
    }

    public function setDateOp(\DateTimeImmutable $dateOp): static
    {
        $this->dateOp = $dateOp;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDebit(): ?float
    {
        return $this->debit;
    }

    public function setDebit(?float $debit): static
    {
        $this->debit = $debit;

        return $this;
    }

    public function getCredit(): ?float
    {
        return $this->credit;
    }

    public function setCredit(?float $credit): static
    {
        $this->credit = $credit;

        return $this;
    }

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(float $solde): static
    {
        $this->solde = $solde;

        return $this;
    }

    public function getSoldeCumul(): ?float
    {
        return $this->soldeCumul;
    }

    public function setSoldeCumul(float $soldeCumul): static
    {
        $this->soldeCumul = $soldeCumul;

        return $this;
    }

    public function getCaisse(): ?Caisses
    {
        return $this->caisse;
    }

    public function setCaisse(?Caisses $caisse): static
    {
        $this->caisse = $caisse;

        return $this;
    }

    public function getAuthor(): ?Users
    {
        return $this->author;
    }

    public function setAuthor(?Users $author): static
    {
        $this->author = $author;

        return $this;
    }
}
