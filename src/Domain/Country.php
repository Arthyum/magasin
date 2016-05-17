<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 12:05
 */

namespace magasinAPI\Domain;


/**
 * Class Country
 * @package magasinAPI\Domain
 */
class Country
{
    /**
     * Country ID
     * @var integer
     */
    private $id;

    /**
     * Country name
     * @var string
     */
    private $name;

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




}