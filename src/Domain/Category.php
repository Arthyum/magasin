<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 12:07
 */

namespace magasinAPI\Domain;


/**
 * Class Category
 * @package magasinAPI\Domain
 */
class Category
{
    /**
     * Category ID
     * @var integer
     */
    private $id;

    /**
     * Category label
     * @var string
     */
    private $label;

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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

}