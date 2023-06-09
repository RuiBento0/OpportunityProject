<?php

namespace App\Entity;

use App\Repository\PhonesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhonesRepository::class)]
class Phones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entities $id_entity = null;

    #[ORM\Column]
    private ?int $id_in_relation = null;

    #[ORM\Column]
    private ?int $phone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEntity(): ?entities
    {
        return $this->id_entity;
    }

    public function setIdEntity(?entities $id_entity): self
    {
        $this->id_entity = $id_entity;

        return $this;
    }

    public function getIdInRelation(): ?int
    {
        return $this->id_in_relation;
    }

    public function setIdInRelation(int $id_in_relation): self
    {
        $this->id_in_relation = $id_in_relation;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
