<?php

namespace App\Entity;

use App\Repository\AuctionItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AuctionItemRepository::class)
 */
class AuctionItem
{
    const STATUS_ACTIVE = "active";
    const STATUS_FINISHED = "finished";
    const STATUS_CANCELLED = "cancelled";

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=20, scale=2, length=20)
     */
    private $price;

    /**
     *
     * @ORM\Column(type="decimal", precision=20, scale=2, length=20, nullable=true)
     */
    private $startPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $updatetAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=20)
     */
    private $statusAuction;


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

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setUpdateAt(\DateTimeInterface $updatetAt): self
    {
        $this->updatetAt = $updatetAt;
        return $this;
    }

    public function getExpiresAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setExpiresAt(\DateTimeInterface $expiresAt): self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * @param mixed $startPrice
     */
    public function setStartPrice($startPrice): void
    {
        $this->startPrice = $startPrice;
    }

    /**
     * @return string
     */
    public function getStatusAuction(): string
    {
        return $this->statusAuction;
    }

    /**
     * @param string $statusAuction
     */
    public function setStatusAuction(string $statusAuction): void
    {
        $this->statusAuction = $statusAuction;
    }

}
