<?php
/**
 * Stock
 * 
 * The product stock on an inventory
 */
class Stock
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
     * The product price of public
     * @var double
     */
    public $price;

    /**
     * Quantity of stock in latino
     * @var integer
     */
    public $latino;

    /**
     * Quantity of stock in cedi
     * @var integer
     */
    public $cedi;


    /**
     * The total units of the product
     * @var integer
     */
    public $total;

    /**
     * Get the stock record based on the ID
     * 
     * @param object $conn Connection to the database
     * @param integer $id the product ID
     * @param string $columns Optional list of columns for the select, defaults to*
     * 
     * @return mixed An object of this class, or null if not found.
     */
    public static function getByReference(PDO $conn, $reference, $columns = '*')
    {
        $sql = "SELECT * FROM stock WHERE reference LIKE '%".$reference."%'";

        //Ejecuta una sentencia SQL, devolviendo un conjunto de resultados como un objeto PDOStatement   
        $results = $conn->query($sql);

        // Devuelve un array que contiene todas las filas del conjunto de resultados   
        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
}