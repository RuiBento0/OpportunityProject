<?php

namespace App\Entity;

use App\Repository\OpportunitiesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpportunitiesRepository::class)]
class Opportunities
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column(length: 180)]
    public ?string $name = null;

    #[ORM\Column]
    public ?float $amount = null;

    #[ORM\Column]
    public ?int $probability = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    public ?\DateTimeInterface $close_date = null;

    #[ORM\Column(length: 255)]
    public ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    public ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    public ?\DateTimeInterface $updated_at = null;

    #[ORM\ManyToOne]
    public ?Accounts $id_account = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    public ?Users $id_user = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    public ?Users $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    public ?Users $updated_by = null;

    #[ORM\Column(length: 255)]
    public ?string $product = null;

    #[ORM\ManyToOne]
    public ?Contacts $id_contact = null;

    #[ORM\ManyToOne]
    public ?Departments $id_department = null;

    #[ORM\ManyToOne]
    public ?Stages $id_stage = null;

    #[ORM\ManyToOne]
    public ?Sources $id_source = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Leads $lead_id = null;


    public function __construct()
    {
        $this->contacts = new ArrayCollection();
        $this->departments = new ArrayCollection();
        $this->uploads = new ArrayCollection();
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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getProbability(): ?int
    {
        return $this->probability;
    }

    public function setProbability(int $probability): self
    {
        $this->probability = $probability;

        return $this;
    }

    public function getCloseDate(): ?\DateTimeInterface
    {
        return $this->close_date;
    }

    public function setCloseDate(\DateTimeInterface $close_date): self
    {
        $this->close_date = $close_date;

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

    public function getIdAccount(): ?accounts
    {
        return $this->id_account;
    }

    public function setIdAccount(?accounts $id_account): self
    {
        $this->id_account = $id_account;

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

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getIdContact(): ?contacts
    {
        return $this->id_contact;
    }

    public function setIdContact(?contacts $id_contact): self
    {
        $this->id_contact = $id_contact;

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

    public function getIdStage(): ?stages
    {
        return $this->id_stage;
    }

    public function setIdStage(?stages $id_stage): self
    {
        $this->id_stage = $id_stage;

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

    public function getLeadId(): ?leads
    {
        return $this->lead_id;
    }

    public function setLeadId(?leads $lead_id): self
    {
        $this->lead_id = $lead_id;

        return $this;
    }
}
