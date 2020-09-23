<?php
/**
 * Product
 * 
 * An item on the inventory
 */
class Product
{   
    /**
     * Unique identifier
     * @var integer;
     */
    public $id;

    /**
     * The product reference
     * @var string;
     */
    public $reference;

    /**
     * The product description
     * @var string 
     */
    public $description;

    /**
     * The product brand
     * @var string
     */
    public $brand;

    /**
     * Quantity imported
     * @var integer
     */
    public $units;

    /**
     * The import date
     * @var date 'yyyy-mm-dd'
     */
    public $date;

    /**
     * The form number
     * @var string
     */
    public $form_id;

    /**
     * The page where actually is
     * @var number
     */
    public $page;

    /**
     * The importer of the product
     * @var string
     */
    public $importer;


    /**
     * Get the product record based on the ID
     * 
     * @param object $conn Connection to the database
     * @param integer $id the product ID
     * @param string $columns Optional list of columns for the select, defaults to*
     * 
     * @return mixed An object of this class, or null if not found.
     */
    public static function getByReference(PDO $conn, $reference, $columns = '*')
    {
        $sql = "SELECT * FROM product WHERE reference LIKE '%".$reference."%'";

        //Ejecuta una sentencia SQL, devolviendo un conjunto de resultados como un objeto PDOStatement   
        $results = $conn->query($sql);

        // Devuelve un array que contiene todas las filas del conjunto de resultados   
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
}