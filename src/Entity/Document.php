<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
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
    private $NomDoc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDoc(): ?string
    {
        return $this->NomDoc;
    }

    public function setNomDoc(string $NomDoc): self
    {
        $this->NomDoc = $NomDoc;

        return $this;
    }
}
