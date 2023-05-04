<?php

namespace App\Entity;

use App\Repository\AddressesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressesRepository::class)]
class Addresses
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $postal_code = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?entities $id_entity = null;

    #[ORM\Column]
    private ?int $id_in_relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

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
