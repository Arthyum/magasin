<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 12:13
 */

namespace magasinAPI\Domain;


/**
 * Class Stock
 * @package magasinAPI\Domain
 */
class Stock
{

    /**
     * Stock ID
     * @var integer
     */
    private $id;

    /**
     * Store ID
     * @var integer
     */
    private $store_id;

    /**
     * Stock amount
     * @var integer
     */private $amount;

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
    public function getStoreId()
    {
        return $this->store_id;
    }/**
     * @param int $store_id
     */
    public function setStoreId($store_id)
    {
        $this->store_id = $store_id;
    }/**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }/**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }


}