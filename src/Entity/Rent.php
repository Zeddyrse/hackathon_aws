<?php

namespace App\Entity;

use App\Repository\RentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentRepository::class)]
class Rent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $roundtrip = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $startAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $endAt = null;

    #[ORM\Column]
    private ?int $cost = null;

    #[ORM\Column(length: 255)]
    private ?string $departure_city = null;

    #[ORM\Column(length: 255)]
    private ?string $arrival_city = null;

    #[ORM\Column(length: 255)]
    private ?string $departure_picture = null;

    #[ORM\Column(length: 255)]
    private ?string $arrival_picture = null;

    #[ORM\ManyToOne(inversedBy: 'rents')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoundtrip(): ?string
    {
        return $this->roundtrip;
    }

    public function setRoundtrip(string $roundtrip): self
    {
        $this->roundtrip = $roundtrip;

        return $this;
    }

    public function getStartAt(): ?\DateTimeImmutable
    {
        return $this->startAt;
    }

    public function setStartAt(\DateTimeImmutable $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->endAt;
    }

    public function setEndAt(\DateTimeImmutable $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getDepartureCity(): ?string
    {
        return $this->departure_city;
    }

    public function setDepartureCity(string $departure_city): self
    {
        $this->departure_city = $departure_city;

        return $this;
    }

    public function getArrivalCity(): ?string
    {
        return $this->arrival_city;
    }

    public function setArrivalCity(string $arrival_city): self
    {
        $this->arrival_city = $arrival_city;

        return $this;
    }

    public function getDeparturePicture(): ?string
    {
        return $this->departure_picture;
    }

    public function setDeparturePicture(string $departure_picture): self
    {
        $this->departure_picture = $departure_picture;

        return $this;
    }

    public function getArrivalPicture(): ?string
    {
        return $this->arrival_picture;
    }

    public function setArrivalPicture(string $arrival_picture): self
    {
        $this->arrival_picture = $arrival_picture;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}