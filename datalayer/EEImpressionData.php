<?php

/**
 * Represents information about a product that has been viewed. It is referred to as an impressionFieldObject.
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class EEImpressionData {

    /**
     * Key: id
     * Value Type: text
     * Required: Yes*
     * Description: The product ID or SKU (e.g. P67890). *Either this field or name must be set.
     */
    public $id;

    /**
     * Key: name
     * Value Type: text
     * Required: Yes*
     * Description: The name of the product (e.g. Android T-Shirt). *Either this field or id must be set.
     */
    public $name;

    /**
     * Key: list
     * Value Type: text
     * Required: No
     * Description: The list or collection to which the product belongs (e.g. Search Results)
     */
    public $list;

    /**
     * Key: brand
     * Value Type: text
     * Required: No
     * Description: The brand associated with the product (e.g. Google).
     */
    public $brand;

    /**
     * Key: category
     * Value Type: text
     * Required: No
     * Description: The category to which the product belongs (e.g. Apparel). Use / as a delimiter to specify up to 5-levels of hierarchy (e.g. Apparel/Men/T-Shirts).
     */
    public $category;

    /**
     * Key: variant
     * Value Type: text
     * Required: No
     * Description: The variant of the product (e.g. Black).
     */
    public $variant;

    /**
     * Key: position
     * Value Type: integer
     * Required: No
     * Description: The product's position in a list or collection (e.g. 2).
     */
    public $position;

    /**
     * Key: price
     * Value Type: currency
     * Required: No
     * Description: The price of a product (e.g. 29.20).
     */
    public $price;

}
