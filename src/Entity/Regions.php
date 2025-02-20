<?php

namespace App\Entity;

use App\Repository\RegionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionsRepository::class)]
class Regions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Cercles>
     */
    #[ORM\OneToMany(targetEntity: Cercles::class, mappedBy: 'region')]
    private Collection $cercles;

    #[ORM\Column(length: 150)]
    private ?string $designation = null;

    public function __construct()
    {
        $this->cercles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Cercles>
     */
    public function getCercles(): Collection
    {
        return $this->cercles;
    }

    public function addCercle(Cercles $cercle): static
    {
        if (!$this->cercles->contains($cercle)) {
            $this->cercles->add($cercle);
            $cercle->setRegion($this);
        }

        return $this;
    }

    public function removeCercle(Cercles $cercle): static
    {
        if ($this->cercles->removeElement($cercle)) {
            // set the owning side to null (unless already changed)
            if ($cercle->getRegion() === $this) {
                $cercle->setRegion(null);
            }
        }

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
}
