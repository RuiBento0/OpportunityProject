<?php

namespace App\Entity;

use App\Repository\DepartmentsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepartmentsRepository::class)]
class Departments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Locations $id_location = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $created_by = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $updated_by = null;

    #[ORM\ManyToMany(targetEntity: Accounts::class, mappedBy: 'departments')]
    private Collection $accounts;

    public function __construct()
    {
        $this->accounts = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->leads = new ArrayCollection();
        $this->opportunities = new ArrayCollection();
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

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

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

    public function getIdLocation(): ?locations
    {
        return $this->id_location;
    }

    public function setIdLocation(?locations $id_location): self
    {
        $this->id_location = $id_location;

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
     * @return Collection<int, Accounts>
     */
    public function getAccounts(): Collection
    {
        return $this->accounts;
    }

    public function addAccount(Accounts $account): self
    {
        if (!$this->accounts->contains($account)) {
            $this->accounts->add($account);
            $account->addDepartment($this);
        }

        return $this;
    }

    public function removeAccount(Accounts $account): self
    {
        if ($this->accounts->removeElement($account)) {
            $account->removeDepartment($this);
        }

        return $this;
    }
}
