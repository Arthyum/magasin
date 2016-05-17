<?php
/**
 * Created by PhpStorm.
 * User: hamy-
 * Date: 17/05/2016
 * Time: 12:16
 */

namespace magasinAPI\DAO;


use magasinAPI\Domain\Category;

class CategoryDAO extends DAO
{
    /**
     * Return a list of all Categories,
     *
     * @return array A list of all categories
     */
    public function findAll() {
        $sql = "select * from categorie";
        $result = $this->getDb()->fetchAll($sql);
        // Convert query result to an array of domain objects
        $category = array();
        foreach ($result as $row) {
            $categoryId = $row['Id_Categorie'];
            $category[$categoryId] = $this->buildDomainObject($row);
        }
        return $category;
    }

    /**
     * Returns an article matching the supplied id.
     *
     * @param integer $id The Category id.
     *
     * @return \magasinAPI\Domain\Category| throws an exception if no matching category is found
     */
    public function find($id) {
        $sql = "select * from categorie where Id_Categorie=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No category matching id " . $id);
    }

    /**
     * Saves a category into the database.
     *
     * @param \magasinAPI\Domain\Category $article The category to save
     */
    public function save(Category $category) {
        $categoryData = array(
            'label' => $category->getLabel()
        );

        if ($category->getId()) {
            // The article has already been saved : update it
            $this->getDb()->update('categorie', $categoryData, array('Id_Categorie' => $category->getId()));
        } else {
            // The article has never been saved : insert it
            $this->getDb()->insert('categorie', $categoryData);
            // Get the id of the newly created article and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $category->setId($id);
        }
    }

    /**
     * Removes a category from the database.
     *
     * @param integer $id The category id.
     */
    public function delete($id) {
        // Delete the article
        $this->getDb()->delete('categorie', array('Id_Categorie' => $id));
    }

    /**
     * Creates an Category object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \magasinAPI\Domain\Category
     */
    protected function buildDomainObject($row) {
        $category = new Category();
        $category->setId($row['Id_Categorie']);
        $category->setLabel($row['Libelle']);
        return $category;
    }
}