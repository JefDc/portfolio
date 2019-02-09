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

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subTitleContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleSoftSkill;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subTitleSoftSkill;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleSkill;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subTitleAboutUs;

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

    public function getTitleContact(): ?string
    {
        return $this->titleContact;
    }

    public function setTitleContact(string $titleContact): self
    {
        $this->titleContact = $titleContact;

        return $this;
    }

    public function getSubTitleContact(): ?string
    {
        return $this->subTitleContact;
    }

    public function setSubTitleContact(string $subTitleContact): self
    {
        $this->subTitleContact = $subTitleContact;

        return $this;
    }

    public function getTitleSoftSkill(): ?string
    {
        return $this->titleSoftSkill;
    }

    public function setTitleSoftSkill(string $titleSoftSkill): self
    {
        $this->titleSoftSkill = $titleSoftSkill;

        return $this;
    }

    public function getSubTitleSoftSkill(): ?string
    {
        return $this->subTitleSoftSkill;
    }

    public function setSubTitleSoftSkill(string $subTitleSoftSkill): self
    {
        $this->subTitleSoftSkill = $subTitleSoftSkill;

        return $this;
    }

    public function getTitleSkill(): ?string
    {
        return $this->titleSkill;
    }

    public function setTitleSkill(string $titleSkill): self
    {
        $this->titleSkill = $titleSkill;

        return $this;
    }

    public function getSubTitleAboutUs(): ?string
    {
        return $this->subTitleAboutUs;
    }

    public function setSubTitleAboutUs(string $subTitleAboutUs): self
    {
        $this->subTitleAboutUs = $subTitleAboutUs;

        return $this;
    }
}
