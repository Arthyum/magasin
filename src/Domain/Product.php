<?php

namespace magasinAPI\Domain;

class Product
{
    /**
     * Product id.
     *
     * @var integer
     */
    private $id;

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
     * Product category id.
     *
     * @var integer
     */
    private $id_category;

    /**
     * @return int
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }

    /**
     * Product Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Stock ID
     *
     * @var integer
     */
    private $id_stock;

    /**
     * @return int
     */
    public function getIdStock()
    {
        return $this->id_stock;
    }

    /**
     * @param int $id_stock
     */
    public function setIdStock($id_stock)
    {
        $this->id_stock = $id_stock;
    }





}
