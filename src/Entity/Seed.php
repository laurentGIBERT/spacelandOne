<?php
declare(strict_types = 1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


	/** 
 	* @ORM\Entity
 	* @ORM\Table(name="seed")
 	*/

class Seed { 
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO") 
	 */ 

	public $id;

	/** 
	 * @ORM\Column(type="string", length=100)
	 */

	public $name; 

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    public $price;


    /**
     * @var Plant[]
     * @ORM\ManyToMany(targetEntity="Plant", inversedBy="seeds", cascade={"remove"})
     */
    private $plants;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Seed
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndSowingDate()
    {
        return $this->endSowingDate;
    }

    /**
     * @param mixed $endSowingDate
     */
    public function setEndSowingDate($endSowingDate)
    {
        $this->endSowingDate = $endSowingDate;
    }

    /**
     * @return mixed
     */
    public function getStartSowingDate()
    {
        return $this->startSowingDate;
    }

    /**
     * @param mixed $startSowingDate
     */
    public function setStartSowingDate($startSowingDate)
    {
        $this->startSowingDate = $startSowingDate;
    }

    /**
     * @param mixed $id
     * @return Seed
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @ORM\Column(type="date")
     */
    public $startSowingDate;

    /**
     * @ORM\Column(type="date")
     */
    public $endSowingDate;

    /**
     * @return Plant[]
     */
    public function getPlants(): array
    {
        return $this->plants;
    }

    /**
     * @param Plant[] $plants
     */
    public function setPlants(array $plants)
    {
        $this->plants = $plants;
    }
    public function __toString()
    {
        return $this->getName();
    }
}
