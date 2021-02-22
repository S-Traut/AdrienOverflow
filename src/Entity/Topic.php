<?php

namespace App\Entity;

use App\Repository\TopicRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TopicRepository::class)
 */
class Topic
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Description;

    /**
     * @ORM\Column(type="date")
     */
    private $CreationDate;

    /**
     * @ORM\Column(type="date")
     */
    private $ModificationDate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="Topics")
     * @ORM\JoinColumn(nullable=false)
     */
    private $TopicUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(\DateTimeInterface $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->ModificationDate;
    }

    public function setModificationDate(\DateTimeInterface $ModificationDate): self
    {
        $this->ModificationDate = $ModificationDate;

        return $this;
    }

    public function getTopicUser(): ?User
    {
        return $this->TopicUser;
    }

    public function setTopicUser(?User $TopicUser): self
    {
        $this->TopicUser = $TopicUser;

        return $this;
    }
}
