<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArtifactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtifactRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Artifact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $name;

    #[ORM\Column(type: 'text', nullable: true)]
    private $img;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $halfset;

    #[ORM\Column(type: 'text', nullable: true)]
    private $fullset;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getHalfset(): ?string
    {
        return $this->halfset;
    }

    public function setHalfset(?string $halfset): self
    {
        $this->halfset = $halfset;

        return $this;
    }

    public function getFullset(): ?string
    {
        return $this->fullset;
    }

    public function setFullset(?string $fullset): self
    {
        $this->fullset = $fullset;

        return $this;
    }
}