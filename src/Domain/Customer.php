<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 11:39
 */
namespace magasinAPI\Domain;

/**
 * Class Customer
 * @package magasinAPI\Domain
 */
class Customer
{
    /**
     * Customer ID
     * @var integer
     */
    private $id;

    /**
     * Customer name
     * @var string
     *
     */
    private $name;

    /**
     * Customer firstname
     * @var string
     */
    private $firstname;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    
}