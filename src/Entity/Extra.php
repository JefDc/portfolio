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
     * @ORM\Column(type="text")
     */
    private $textSoftSkill;

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
    private $github;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkedin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $twitter;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGithub(): ?string
    {
        return $this->github;
    }

    public function setGithub(string $github): self
    {
        $this->github = $github;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    public function setTwitter(string $twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

}
