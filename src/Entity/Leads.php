<?php

namespace App\Entity;

use App\Repository\LeadsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeadsRepository::class)]
class Leads
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $name = null;

    #[ORM\Column(length: 180)]
    private ?string $account = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $amount = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Campaign $id_campaign = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $id_user = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $updated_by = null;

    #[ORM\ManyToOne]
    private ?Area $id_area = null;

    #[ORM\ManyToOne]
    private ?Departments $id_department = null;

    #[ORM\ManyToOne]
    private ?Status $id_status = null;

    #[ORM\ManyToOne]
    private ?Sources $id_source = null;

    public function __construct()
    {
        $this->department = new ArrayCollection();
    }

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

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(string $account): self
    {
        $this->account = $account;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getIdCampaign(): ?campaign
    {
        return $this->id_campaign;
    }

    public function setIdCampaign(?campaign $id_campaign): self
    {
        $this->id_campaign = $id_campaign;

        return $this;
    }
    
    public function getIdUser(): ?users
    {
        return $this->id_user;
    }

    public function setIdUser(?users $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getCreatedBy(): ?users
    {
        return $this->created_by;
    }

    public function setCreatedBy(?users $created_by): self
    {
        $this->created_by = $created_by;

        return $this;
    }

    public function getUpdatedBy(): ?users
    {
        return $this->updated_by;
    }

    public function setUpdatedBy(?users $updated_by): self
    {
        $this->updated_by = $updated_by;

        return $this;
    }

    public function getIdArea(): ?area
    {
        return $this->id_area;
    }

    public function setIdArea(?area $id_area): self
    {
        $this->id_area = $id_area;

        return $this;
    }

    public function getIdDepartment(): ?departments
    {
        return $this->id_department;
    }

    public function setIdDepartment(?departments $id_department): self
    {
        $this->id_department = $id_department;

        return $this;
    }

    public function getIdStatus(): ?status
    {
        return $this->id_status;
    }

    public function setIdStatus(?status $id_status): self
    {
        $this->id_status = $id_status;

        return $this;
    }

    public function getIdSource(): ?sources
    {
        return $this->id_source;
    }

    public function setIdSource(?sources $id_source): self
    {
        $this->id_source = $id_source;

        return $this;
    }
}
