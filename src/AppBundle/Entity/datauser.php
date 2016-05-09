<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * datauser
 *
 * @ORM\Table(name="datauser")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\datauserRepository")
 */
class datauser
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
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", nullable=true)
     */
    private $prenom;

    /**
     * @var text
     *
     * @ORM\Column(name="biographie", type="text", nullable=true)
     */
    private $biographie;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="github", type="string", nullable=true)
     */
    private $github;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin", type="string", nullable=true)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="tweeter", type="string", nullable=true)
     */
    private $tweeter;

    /**
     * @var string
     *
     * @ORM\Column(name="doyoubuzz", type="string", nullable=true)
     */
    private $doyoubuzz;

    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=true)
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     */
    private $iduser;


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
     * Set age
     *
     * @param integer $age
     *
     * @return datauser
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return datauser
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return datauser
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set biographie
     *
     * @param string $biographie
     *
     * @return datauser
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;

        return $this;
    }

    /**
     * Get biographie
     *
     * @return string
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return datauser
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

/**
     * Set github
     *
     * @param string $github
     *
     * @return datauser
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get github
     *
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return datauser
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set tweeter
     *
     * @param string $tweeter
     *
     * @return datauser
     */
    public function setTweeter($tweeter)
    {
        $this->tweeter = $tweeter;

        return $this;
    }

    /**
     * Get tweeter
     *
     * @return string
     */
    public function getTweeter()
    {
        return $this->tweeter;
    }

    /**
     * Set doyoubuzz
     *
     * @param string $doyoubuzz
     *
     * @return datauser
     */
    public function setDoyoubuzz($doyoubuzz)
    {
        $this->doyoubuzz = $doyoubuzz;

        return $this;
    }

    /**
     * Get doyoubuzz
     *
     * @return string
     */
    public function getDoyoubuzz()
    {
        return $this->doyoubuzz;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return datauser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}

