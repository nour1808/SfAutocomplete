<?php

namespace App\Entity;

use App\Entity\Choix;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SimpleRepository;

#[ORM\Entity(repositoryClass: SimpleRepository::class)]
class Simple
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToOne(targetEntity: Choix::class, inversedBy: 'Simples')]
    private $choix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getChoix(): ?Choix
    {
        return $this->choix;
    }

    public function setChoix(?Choix $choix): self
    {
        $this->choix = $choix;

        return $this;
    }
}
