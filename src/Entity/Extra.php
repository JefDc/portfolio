<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExtraRepository")
 */
class Extra
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numberPhone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $textContact;

    /**
     * @ORM\Column(type="text")
     */
    private $textSoftSkill;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberPhone(): ?string
    {
        return $this->numberPhone;
    }

    public function setNumberPhone(string $numberPhone): self
    {
        $this->numberPhone = $numberPhone;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTextContact(): ?string
    {
        return $this->textContact;
    }

    public function setTextContact(string $textContact): self
    {
        $this->textContact = $textContact;

        return $this;
    }

    public function getTextSoftSkill(): ?string
    {
        return $this->textSoftSkill;
    }

    public function setTextSoftSkill(string $textSoftSkill): self
    {
        $this->textSoftSkill = $textSoftSkill;

        return $this;
    }
}
