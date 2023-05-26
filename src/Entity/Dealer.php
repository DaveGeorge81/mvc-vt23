<?php

namespace App\Entity;

use App\Repository\DealerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DealerRepository::class)]
class Dealer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $handsPlayed = null;

    #[ORM\Column]
    private ?int $handsWon = null;

    #[ORM\Column]
    private ?int $handsLost = null;

    #[ORM\Column]
    private ?int $handsPush = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHandsPlayed(): ?int
    {
        return $this->handsPlayed;
    }

    public function setHandsPlayed(int $handsPlayed): self
    {
        $this->handsPlayed = $handsPlayed;

        return $this;
    }

    public function getHandsWon(): ?int
    {
        return $this->handsWon;
    }

    public function setHandsWon(int $handsWon): self
    {
        $this->handsWon = $handsWon;

        return $this;
    }

    public function getHandsLost(): ?int
    {
        return $this->handsLost;
    }

    public function setHandsLost(int $handsLost): self
    {
        $this->handsLost = $handsLost;

        return $this;
    }

    public function getHandsPush(): ?int
    {
        return $this->handsPush;
    }

    public function setHandsPush(int $handsPush): self
    {
        $this->handsPush = $handsPush;

        return $this;
    }
}
