<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Book
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Book isbn
     *
     * @ORM\Column(type="string")
     */
    public $isbn = '';

    /**
     * @var string Book title
     *
     * @ORM\Column(type="string")
     */
    public $title = '';

    /**
     * @var string Book abstract
     *
     * @ORM\Column(type="string")
     */
    public $abstract = '';

    /**
     * @var string Book description
     *
     * @ORM\Column(type="text")
     */
    public $description = '';

    /**
     * @var string Book author
     *
     * @ORM\Column(type="string")
     */
    public $author = '';

    /**
     * @var string Book publication date
     *
     * @ORM\Column(type="date")
     */
    public $publicationDate = '';

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAbstract(): string
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     */
    public function setAbstract(string $abstract): void
    {
        $this->abstract = $abstract;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getPublicationDate(): string
    {
        return $this->publicationDate;
    }

    /**
     * @param string $publicationDate
     */
    public function setPublicationDate(string $publicationDate): void
    {
        $this->publicationDate = $publicationDate;
    }


}