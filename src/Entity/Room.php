<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
{
    public function __toString()
    {
        return (string) $this->getId();
    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $Room_date;

    /**
     * @ORM\Column(type="date")
     */
    private $start_time;

    /**
     * @ORM\Column(type="date")
     */
    private $end_time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $total_chairs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomDate(): ?\DateTimeInterface
    {
        return $this->Room_date;
    }

    public function setRoomDate(\DateTimeInterface $Room_date): self
    {
        $this->Room_date = $Room_date;

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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getTotalChairs(): ?int
    {
        return $this->total_chairs;
    }

    public function setTotalChairs(int $total_chairs): self
    {
        $this->total_chairs = $total_chairs;

        return $this;
    }
}
