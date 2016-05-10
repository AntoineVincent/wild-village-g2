<?php

namespace wildVillageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \DateTime;

/**
 * message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="wildVillageBundle\Repository\messageRepository")
 */
class message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="userdest", type="string", length=255)
     */
    private $userdest;

    /**
     * @var string
     *
     * @ORM\Column(name="usersent", type="string", length=255)
     */
    private $usersent;

        public function __construct()
    {
        $this->date = new DateTime();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set userdest
     *
     * @param string $userdest
     *
     * @return message
     */
    public function setUserdest($userdest)
    {
        $this->userdest = $userdest;

        return $this;
    }

    /**
     * Get userdest
     *
     * @return string
     */
    public function getUserdest()
    {
        return $this->userdest;
    }

    /**
     * Set usersent
     *
     * @param string $usersent
     *
     * @return message
     */
    public function setUsersent($usersent)
    {
        $this->usersent = $usersent;

        return $this;
    }

    /**
     * Get usersent
     *
     * @return string
     */
    public function getUsersent()
    {
        return $this->usersent;
    }
}

