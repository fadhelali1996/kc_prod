<?php

namespace GincidentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * solutions
 *
 * @ORM\Table(name="solutions")
 * @ORM\Entity(repositoryClass="GincidentBundle\Repository\solutionsRepository")
 */
class solutions
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    
    private $name;
     /**
     * @var string
     *
     * @ORM\Column(name="createurTic", type="string", length=255)
     */
    private $createurTic;
     /**
     * @ORM\ManyToOne(targetEntity="ticket", inversedBy="sol")
     * @ORM\JoinColumn(name="tic_id", referencedColumnName="id",onDelete="CASCADE")
     */
     protected $tic;
    function getTic() {
        return $this->tic;
    }
    function getCreateurTic() {
        return $this->createurTic;
    }

    function setCreateurTic($createurTic) {
        $this->createurTic = $createurTic;
    }

    function setTic($tic) {
        $this->tic = $tic;
    }

         /**
     * @var \DateTime
     *
     * @ORM\Column(name="createddate_sol", type="datetime")
     */

    private $createddate_sol;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    private $description;
        
    
       /**
     * @var string
     *
     * @ORM\Column(name="createdby", type="string", length=255)
     */
    
    
    public $createdby;
   
    
    
    function getCreateddate_sol(): \DateTime {
        return $this->createddate_sol;
    }

    function setCreateddate_sol(\DateTime $createddate_sol) {
        $this->createddate_sol = $createddate_sol;
    }

        
    function getSol() {
        return $this->sol;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function setSol($sol) {
        $this->sol = $sol;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }
    function getCreatedby() {
        return $this->createdby;
    }

    function setCreatedby($createdby) {
        $this->createdby = $createdby;
    }

        /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    
    
    
    
    
    
    

    /**
     * Set createddateSol.
     *
     * @param \DateTime $createddateSol
     *
     * @return solutions
     */
    public function setCreateddateSol($createddateSol)
    {
        $this->createddate_sol = $createddateSol;

        return $this;
    }

    /**
     * Get createddateSol.
     *
     * @return \DateTime
     */
    public function getCreateddateSol()
    {
        return $this->createddate_sol;
    }
}
