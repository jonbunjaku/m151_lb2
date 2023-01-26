<?php

declare(strict_types=1);

use Cassandra\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('grade')]
class Grade
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;

    #[Column]
    private string $subjectName;

    #[Column]
    private float $grade;

    #[Column]
    private int $fk_user;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }

    /**
     * @param string $subjectName
     */
    public function setSubjectName(string $subjectName): void
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @return float
     */
    public function getGrade(): float
    {
        return $this->grade;
    }

    /**
     * @param float $grade
     */
    public function setGrade(float $grade): void
    {
        $this->grade = $grade;
    }

    /**
     * @return int
     */
    public function getFkUser(): int
    {
        return $this->fk_user;
    }

    /**
     * @param int $fk_user
     */
    public function setFkUser(int $fk_user): void
    {
        $this->fk_user = $fk_user;
    }


}