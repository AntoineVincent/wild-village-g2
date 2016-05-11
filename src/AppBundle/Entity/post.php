<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\postRepository")
 */
class post
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_post", type="datetime")
     */
    private $datePost;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_auteur_post", type="text")
     */
    private $nomAuteurPost;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_auteur_post", type="text")
     */
    private $prenomAuteurPost;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_post", type="text")
     */
    private $contenuPost;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_post", type="text")
     */
    private $categoriePost;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;
    /**
     * @ORM\OneToOne(targetEntity="datauser")
     * @ORM\JoinColumn(name="id_datauser",referencedColumnName="id")
     */
    private $datauser;
    /**
     * @ORM\ManyToOne(targetEntity="commentaire")
     * @ORM\JoinColumn(name="id_post",referencedColumnName="id")
     */
    private $commentaire;

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
     * Set datePost
     *
     * @param \DateTime $datePost
     *
     * @return post
     */
    public function setDatePost($datePost)
    {
        $this->datePost = $datePost;

        return $this;
    }

    /**
     * Get datePost
     *
     * @return \DateTime
     */
    public function getDatePost()
    {
        return $this->datePost;
    }

    /**
     * Set nomAuteurPost
     *
     * @param string $nomAuteurPost
     *
     * @return post
     */
    public function setNomAuteurPost($nomAuteurPost)
    {
        $this->nomAuteurPost = $nomAuteurPost;

        return $this;
    }

    /**
     * Get nomAuteurPost
     *
     * @return string
     */
    public function getNomAuteurPost()
    {
        return $this->nomAuteurPost;
    }

    /**
     * Set prenomAuteurPost
     *
     * @param string $prenomAuteurPost
     *
     * @return post
     */
    public function setPrenomAuteurPost($prenomAuteurPost)
    {
        $this->prenomAuteurPost = $prenomAuteurPost;

        return $this;
    }

    /**
     * Get prenomAuteurPost
     *
     * @return string
     */
    public function getPrenomAuteurPost()
    {
        return $this->prenomAuteurPost;
    }

    /**
     * Set contenuPost
     *
     * @param string $contenuPost
     *
     * @return post
     */
    public function setContenuPost($contenuPost)
    {
        $this->contenuPost = $contenuPost;

        return $this;
    }

    /**
     * Get contenuPost
     *
     * @return string
     */
    public function getContenuPost()
    {
        return $this->contenuPost;
    }

    /**
     * Set categoriePost
     *
     * @param string $categoriePost
     *
     * @return post
     */
    public function setCategoriePost($categoriePost)
    {
        $this->categoriePost = $categoriePost;

        return $this;
    }

    /**
     * Get categoriePost
     *
     * @return string
     */
    public function getCategoriePost()
    {
        return $this->categoriePost;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return post
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set datauser
     *
     * @param \AppBundle\Entity\datauser $datauser
     *
     * @return post
     */
    public function setDatauser(\AppBundle\Entity\datauser $datauser = null)
    {
        $this->datauser = $datauser;

        return $this;
    }

    /**
     * Get datauser
     *
     * @return \AppBundle\Entity\datauser
     */
    public function getDatauser()
    {
        return $this->datauser;
    }

    /**
     * Set commentaire
     *
     * @param \AppBundle\Entity\commentaire $commentaire
     *
     * @return post
     */
    public function setCommentaire(\AppBundle\Entity\commentaire $commentaire = null)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return \AppBundle\Entity\commentaire
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
