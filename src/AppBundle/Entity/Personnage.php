<?php

namespace AppBundle\Entity;

use AppBundle\Repository\PersonnageRepository;
use Doctrine\ORM\Mapping as ORM;
use stdClass;

/**
 * Personnage
 *
 * @ORM\Table(name="personnage")
 * @ORM\Entity(repositoryClass="PersonnageRepository")
 */
class Personnage
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var stdClass
     *
     * @ORM\Column(name="stats", type="object")
     */
    private $stats;

    /**
     * @var stdClass
     *
     * @ORM\Column(name="race", type="object")
     */
    private $race;

    /**
     * @var stdClass
     *
     * @ORM\Column(name="classe", type="object")
     */
    private $classe;
    
    /**
     * @var stdClass
     *
     * @ORM\Column(name="pa", type="integer")
     */
    private $pa;
    
    /**
     * 
     */
    private $positionH;
    
    private $positionV;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Personnage
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
     * Set stats
     *
     * @param stdClass $stats
     *
     * @return Personnage
     */
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get stats
     *
     * @return stdClass
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set race
     *
     * @param stdClass $race
     *
     * @return Personnage
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return stdClass
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set classe
     *
     * @param stdClass $classe
     *
     * @return Personnage
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return stdClass
     */
    public function getClasse()
    {
        return $this->classe;
    }
    
    /**
     * 
     * Get pa
     * 
     * @return int
     */
    function getPa(){
        return $this->pa;
    }
    
      /**
     * 
     * Set pa
     * 
     * @param integer $pa
     * 
     * @return Personnage
     */

    function setPa(stdClass $pa) {
        $this->pa = $pa;
        return $this;
    }

    /**
     * Attaquer le personnage ciblé en parametre 
     * 
     * @param Personnage $cible
     */
    public function attaquer(Personnage $cible){
        
    }
    
    /**
     * Changer de position initiale sur les nouvelles coordonnées
     * 
     * @param int $ligne
     * @param int $colonne
     */
    public function seDeplacer(int $ligne, int $colonne){
        $this->positionH = $ligne;
        $this->positionV = $colonne;
    }
    
    /**
     * Methode pour mourir
     */
    public function paul(){
        var_dump("bravo ! vous etes Paul...");
    }

}

