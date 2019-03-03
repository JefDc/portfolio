<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MailAdminSettingRepository")
 */
class MailAdminSetting
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
    private $object;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailSend;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailReception;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameAdmin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getMailSend(): ?string
    {
        return $this->mailSend;
    }

    public function setMailSend(string $mailSend): self
    {
        $this->mailSend = $mailSend;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getMailReception(): ?string
    {
        return $this->mailReception;
    }

    public function setMailReception(string $mailReception): self
    {
        $this->mailReception = $mailReception;

        return $this;
    }

    public function getNameAdmin(): ?string
    {
        return $this->nameAdmin;
    }

    public function setNameAdmin(string $nameAdmin): self
    {
        $this->nameAdmin = $nameAdmin;

        return $this;
    }
}
