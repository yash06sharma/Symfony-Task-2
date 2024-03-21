<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $first_name = null;

    #[ORM\Column(length: 255)]
    private ?string $last_name = null;

    #[ORM\Column(length: 255)]
    private ?string $permanent_add = null;

    #[ORM\Column(length: 255)]
    private ?string $email_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): static
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getPermanentAdd(): ?string
    {
        return $this->permanent_add;
    }

    public function setPermanentAdd(string $permanent_add): static
    {
        $this->permanent_add = $permanent_add;

        return $this;
    }

    public function getEmailId(): ?string
    {
        return $this->email_id;
    }

    public function setEmailId(string $email_id): static
    {
        $this->email_id = $email_id;

        return $this;
    }
}
