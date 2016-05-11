<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\commentaireRepository")
 */
class commentaire
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
     * @ORM\Column(name="contenu_commentaire", type="text")
     */
    private $contenuCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_auteur_commentaire", type="text")
     */
    private $prenomAuteurCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_auteur_commentaire", type="text")
     */
    private $nomAuteurCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="date_commentaire", type="text")
     */
    private $dateCommentaire;
    /**
     * @ORM\OneToOne(targetEntity="datauser")
     * @ORM\JoinColumn(name="id_datauser",referencedColumnName="id")
     */
    private $datauser;


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
     * Set contenuCommentaire
     *
     * @param string $contenuCommentaire
     *
     * @return commentaire
     */
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->contenuCommentaire = $contenuCommentaire;

        return $this;
    }

    /**
     * Get contenuCommentaire
     *
     * @return string
     */
    public function getContenuCommentaire()
    {
        return $this->contenuCommentaire;
    }

    /**
     * Set prenomAuteurCommentaire
     *
     * @param string $prenomAuteurCommentaire
     *
     * @return commentaire
     */
    public function setPrenomAuteurCommentaire($prenomAuteurCommentaire)
    {
        $this->prenomAuteurCommentaire = $prenomAuteurCommentaire;

        return $this;
    }

    /**
     * Get prenomAuteurCommentaire
     *
     * @return string
     */
    public function getPrenomAuteurCommentaire()
    {
        return $this->prenomAuteurCommentaire;
    }

    /**
     * Set nomAuteurCommentaire
     *
     * @param string $nomAuteurCommentaire
     *
     * @return commentaire
     */
    public function setNomAuteurCommentaire($nomAuteurCommentaire)
    {
        $this->nomAuteurCommentaire = $nomAuteurCommentaire;

        return $this;
    }

    /**
     * Get nomAuteurCommentaire
     *
     * @return string
     */
    public function getNomAuteurCommentaire()
    {
        return $this->nomAuteurCommentaire;
    }

    /**
     * Set dateCommentaire
     *
     * @param string $dateCommentaire
     *
     * @return commentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return string
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set datauser
     *
     * @param \AppBundle\Entity\datauser $datauser
     *
     * @return commentaire
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
}
