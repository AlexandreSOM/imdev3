<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompteRepository")
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomCompte;

    /**
     * @ORM\Column(type="string", length=350)
     */
    private $urlCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginCompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $passwordCompte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionCompte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCompte(): ?string
    {
        return $this->nomCompte;
    }

    public function setNomCompte(?string $nomCompte): self
    {
        $this->nomCompte = $nomCompte;

        return $this;
    }

    public function getUrlCompte(): ?string
    {
        return $this->urlCompte;
    }

    public function setUrlCompte(string $urlCompte): self
    {
        $this->urlCompte = $urlCompte;

        return $this;
    }

    public function getMailCompte(): ?string
    {
        return $this->mailCompte;
    }

    public function setMailCompte(string $mailCompte): self
    {
        $this->mailCompte = $mailCompte;

        return $this;
    }

    public function getLoginCompte(): ?string
    {
        return $this->loginCompte;
    }

    public function setLoginCompte(string $loginCompte): self
    {
        $this->loginCompte = $loginCompte;

        return $this;
    }

    public function getPasswordCompte(): ?string
    {
        return $this->passwordCompte;
    }

    public function setPasswordCompte(string $passwordCompte): self
    {
        $this->passwordCompte = $passwordCompte;

        return $this;
    }

    public function getDescriptionCompte(): ?string
    {
        return $this->descriptionCompte;
    }

    public function setDescriptionCompte(?string $descriptionCompte): self
    {
        $this->descriptionCompte = $descriptionCompte;

        return $this;
    }
}
