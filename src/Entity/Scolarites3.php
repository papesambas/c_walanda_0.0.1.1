<?php

namespace App\Entity;

use App\Repository\Scolarites3Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Scolarites3Repository::class)]
class Scolarites3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
