<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 12:10
 */

namespace magasinAPI\Domain;


/**
 * Class Store
 * @package magasinAPI\Domain
 */
class Store
{
    /**
     * Store ID
     * @var integer
     */
    private $id;

    /**
     * Country ID
     * @var integer
     */
    private $country_id;

    /**
     * Store's city
     * @var string
     */
    private $city;

    /**
     * Store's name
     * @var string
     */private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }/**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }/**
     * @return int
     */
    public function getCountryId()
    {
        return $this->country_id;
    }/**
     * @param int $country_id
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;
    }/**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }/**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }/**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }/**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}