<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CursusRepository")
 */
class Cursus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="cursus_name")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cursus_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cursus_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cursus_giver;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cursus_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="date")
     */
    private $cursus_date;

    /**
     * @ORM\Column(type="time")
     */
    private $start_time;

    /**
     * @ORM\Column(type="time")
     */
    private $end_time;

    /**
     * @ORM\Column(type="integer")
     */
    private $min_part;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_part;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room")
     * @ORM\JoinColumn(nullable=false)
     */
    private $room_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCursusId(): ?user
    {
        return $this->cursus_id;
    }

    public function setCursusId(?user $cursus_id): self
    {
        $this->cursus_id = $cursus_id;

        return $this;
    }

    public function getCursusName(): ?string
    {
        return $this->cursus_name;
    }

    public function setCursusName(string $cursus_name): self
    {
        $this->cursus_name = $cursus_name;

        return $this;
    }

    public function getCursusGiver(): ?string
    {
        return $this->cursus_giver;
    }

    public function setCursusGiver(string $cursus_giver): self
    {
        $this->cursus_giver = $cursus_giver;

        return $this;
    }

    public function getCursusType(): ?string
    {
        return $this->cursus_type;
    }

    public function setCursusType(string $cursus_type): self
    {
        $this->cursus_type = $cursus_type;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getCursusDate(): ?\DateTimeInterface
    {
        return $this->cursus_date;
    }

    public function setCursusDate(\DateTimeInterface $cursus_date): self
    {
        $this->cursus_date = $cursus_date;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(\DateTimeInterface $start_time): self
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(\DateTimeInterface $end_time): self
    {
        $this->end_time = $end_time;

        return $this;
    }

    public function getMinPart(): ?int
    {
        return $this->min_part;
    }

    public function setMinPart(int $min_part): self
    {
        $this->min_part = $min_part;

        return $this;
    }

    public function getMaxPart(): ?int
    {
        return $this->max_part;
    }

    public function setMaxPart(int $max_part): self
    {
        $this->max_part = $max_part;

        return $this;
    }

    public function getRoomId(): ?room
    {
        return $this->room_id;
    }

    public function setRoomId(?room $room_id): self
    {
        $this->room_id = $room_id;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?user $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
