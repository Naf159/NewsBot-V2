<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigRepository")
 */
class Config
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $periode_crawling;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPeriodeCrawling()
    {
        return $this->periode_crawling;
    }

    /**
     * @param mixed $periode_crawling
     */
    public function setPeriodeCrawling($periode_crawling): void
    {
        $this->periode_crawling = $periode_crawling;
    }


    // add your own fields
}
