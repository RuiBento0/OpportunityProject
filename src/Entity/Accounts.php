<?php

namespace App\Entity;

use App\Repository\AccountsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountsRepository::class)]
class Accounts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    public ?string $name = null;

    #[ORM\Column(length: 255)]
    public ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    public ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    public ?\DateTimeInterface $updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    public ?Users $id_user = null;

    #[ORM\ManyToOne]
    public ?AccountsType $id_type = null;

    #[ORM\ManyToOne]
    public ?Users $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    public ?Users $updated_by = null;

    #[ORM\ManyToMany(targetEntity: Departments::class, inversedBy: 'accounts')]
    public Collection $departments;

    #[ORM\ManyToOne]
    public ?Area $id_area = null;

    #[ORM\Column]
    public ?int $NIF = null;

    #[ORM\ManyToOne(inversedBy: 'accounts')]
    private ?Contacts $contacts = null;

    public function __construct()
    {
        $this->departments = new ArrayCollection();
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

    public function getIdUser(): ?users
    {
        return $this->id_user;
    }

    public function setIdUser(?users $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdType(): ?accountstype
    {
        return $this->id_type;
    }

    public function setIdType(?accountstype $id_type): self
    {
        $this->id_type = $id_type;

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

    /**
     * @return Collection<int, departments>
     */
    public function getDepartments(): Collection
    {
        return $this->departments;
    }

    public function addDepartment(departments $department): self
    {
        if (!$this->departments->contains($department)) {
            $this->departments->add($department);
        }

        return $this;
    }

    public function removeDepartment(departments $department): self
    {
        $this->departments->removeElement($department);

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

    public function getNIF(): ?int
    {
        return $this->NIF;
    }

    public function setNIF(int $NIF): self
    {
        $this->NIF = $NIF;

        return $this;
    }

    public function getContacts(): ?Contacts
    {
        return $this->contacts;
    }

    public function setContacts(?Contacts $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }
}
