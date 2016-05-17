<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 11:55
 */
namespace magasinAPI\Domain;

class Payment{

    /**
     * Payment ID
     * @var integer
     */private $id;

    /**
     * Recipe ID
     * @var integer
     */private $recipe_id;

    /**
     * Payment amount
     * @var float
     */private $amount;

    /**
     * Payment type CB/ESPECE/CHEQUE
     * @var string
     */private $type;

    /**
     * Payment date
     * @var DateTime
     */private $date;

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
    public function getRecipeId()
    {
        return $this->recipe_id;
    }/**
     * @param int $recipe_id
     */
    public function setRecipeId($recipe_id)
    {
        $this->recipe_id = $recipe_id;
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
    }/**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }/**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
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
    }


}