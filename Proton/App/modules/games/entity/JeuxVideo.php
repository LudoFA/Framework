<?php

namespace App\modules\games\entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * JeuxVideo
 *
 * @ORM\Table(name="jeux_video")
 * @ORM\Entity
 */

class JeuxVideo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="games")
      * @ORM\JoinTable(name="game_user",
     *     joinColumns={@ORM\JoinColumn(name="jeux_video_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="possesseur", type="string", length=255, nullable=false)
     */
    private $possesseur;

    /**
     * @var string
     *
     * @ORM\Column(name="console", type="string", length=255, nullable=false)
     */
    private $console;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_joueurs_max", type="integer", nullable=false)
     */
    private $nbreJoueursMax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="text", nullable=false)
     */
    private $commentaires;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return JeuxVideo
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
     * Set possesseur
     *
     * @param string $possesseur
     * @return JeuxVideo
     */
    public function setPossesseur($possesseur)
    {
        $this->possesseur = $possesseur;

        return $this;
    }

    /**
     * Get possesseur
     *
     * @return string 
     */
    public function getPossesseur()
    {
        return $this->possesseur;
    }

    /**
     * Set console
     *
     * @param string $console
     * @return JeuxVideo
     */
    public function setConsole($console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * Get console
     *
     * @return string 
     */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return JeuxVideo
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nbreJoueursMax
     *
     * @param integer $nbreJoueursMax
     * @return JeuxVideo
     */
    public function setNbreJoueursMax($nbreJoueursMax)
    {
        $this->nbreJoueursMax = $nbreJoueursMax;

        return $this;
    }

    /**
     * Get nbreJoueursMax
     *
     * @return integer 
     */
    public function getNbreJoueursMax()
    {
        return $this->nbreJoueursMax;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     * @return JeuxVideo
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        
    }

    /**
     * Set medecin
     *
     * @param \App\modules\games\entity $user
     * @return Etude
     */
    public function setUser(\App\modules\games\entity $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

}
