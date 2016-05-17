<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 11:46
 */

namespace magasinAPI\Domain;

class Recipe{

    /**
     * Recipe ID
     * @var integer
     */
    private $id;

    /**
     * Customer ID
     *
     * @var integer
     */private $customer_id;

    /**
     * Recipe Date
     *
     * @var DateTime
     */private $date;

    /**
     * Recipe amount
     *
     * @var float
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
    public function getCustomerId()
    {
        return $this->customer_id;
    }/**
     * @param int $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }/**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }/**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }/**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }/**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }



}