<?php

namespace App\Entity;

use App\Repository\EmailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmailsRepository::class)]
class Emails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entities $id_entity = null;

    #[ORM\Column]
    private ?int $id_in_relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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
}
