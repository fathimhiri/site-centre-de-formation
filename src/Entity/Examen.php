<?php

namespace App\Entity;

use App\Repository\ExamenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExamenRepository::class)
 */
class Examen
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libellé;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellé(): ?string
    {
        return $this->Libellé;
    }

    public function setLibellé(string $Libellé): self
    {
        $this->Libellé = $Libellé;

        return $this;
    }
}
