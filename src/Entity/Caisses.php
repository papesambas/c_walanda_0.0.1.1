<?php

namespace App\Entity;

use App\Entity\Trait\CreatedAtTrait;
use App\Entity\Trait\EntityTrackingTrait;
use App\Repository\CaissesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaissesRepository::class)]
class Caisses
{
    use CreatedAtTrait;
    use EntityTrackingTrait;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $libelle = null;

    #[ORM\Column]
    private ?float $debit = null;

    #[ORM\Column]
    private ?float $credit = null;

    #[ORM\Column]
    private ?float $solde = null;

    #[ORM\ManyToOne(inversedBy: 'caisses', fetch: "LAZY")]
    #[ORM\JoinColumn(nullable: false,referencedColumnName: 'id',)]
    private ?Users $author = null;

    #[ORM\Column]
    private ?float $soldeCumul = null;

    #[ORM\ManyToOne(inversedBy: 'caisses', fetch: "LAZY")]
    #[ORM\JoinColumn(nullable: false,referencedColumnName: 'id',)]
    private ?AnneeScolaires $anneeScolaires = null;

    /**
     * @var Collection<int, DetailsCaisses>
     */
    #[ORM\OneToMany(targetEntity: DetailsCaisses::class, mappedBy: 'caisse')]
    private Collection $detailsCaisses;

    #[ORM\ManyToOne(inversedBy: 'caisses', fetch: "LAZY")]
    #[ORM\JoinColumn(referencedColumnName: 'id',)]
    private ?FraisScolarites $fraisScolarites = null;

    public function __construct()
    {
        $this->detailsCaisses = new ArrayCollection();
    }

    public function __tostring()
    {
        return $this->libelle.' '.$this->author ?? '';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDebit(): ?float
    {
        return $this->debit;
    }

    public function setDebit(float $debit): static
    {
        $this->debit = $debit;

        return $this;
    }

    public function getCredit(): ?float
    {
        return $this->credit;
    }

    public function setCredit(float $credit): static
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

    public function getAuthor(): ?Users
    {
        return $this->author;
    }

    public function setAuthor(?Users $author): static
    {
        $this->author = $author;

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

    public function getAnneeScolaires(): ?AnneeScolaires
    {
        return $this->anneeScolaires;
    }

    public function setAnneeScolaires(?AnneeScolaires $anneeScolaires): static
    {
        $this->anneeScolaires = $anneeScolaires;

        return $this;
    }

    /**
     * @return Collection<int, DetailsCaisses>
     */
    public function getDetailsCaisses(): Collection
    {
        return $this->detailsCaisses;
    }

    public function addDetailsCaiss(DetailsCaisses $detailsCaiss): static
    {
        if (!$this->detailsCaisses->contains($detailsCaiss)) {
            $this->detailsCaisses->add($detailsCaiss);
            $detailsCaiss->setCaisse($this);
        }

        return $this;
    }

    public function removeDetailsCaiss(DetailsCaisses $detailsCaiss): static
    {
        if ($this->detailsCaisses->removeElement($detailsCaiss)) {
            // set the owning side to null (unless already changed)
            if ($detailsCaiss->getCaisse() === $this) {
                $detailsCaiss->setCaisse(null);
            }
        }

        return $this;
    }

    public function getFraisScolarites(): ?FraisScolarites
    {
        return $this->fraisScolarites;
    }

    public function setFraisScolarites(?FraisScolarites $fraisScolarites): static
    {
        $this->fraisScolarites = $fraisScolarites;

        return $this;
    }
}
