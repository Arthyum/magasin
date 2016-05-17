<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 12:01
 */

namespace magasinAPI\Domain;

use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Sale
 * @package magasinAPI\Domain
 */
class Sale{

    /**
     * Sale ID
     * @var integer
     */
    private $id;

    /**
     * Product ID
     * @var integer
     */
    private $product_id;

    /**
     * Customer ID
     * @var integer
     */
    private $customer_id;

    /**
     * Sale quantity
     * @var integer
     */
    private $quantity;

    /**
     * Sale date
     * @var DateTime
     */
    private $date;

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
     * @return int
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param int $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}