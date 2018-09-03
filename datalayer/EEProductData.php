<?php

/**
 * Represents individual products that were viewed, added to the shopping cart, etc.
 * It is referred to as a productFieldObject
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class EEProductData {

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
     * Key: price
     * Value Type: currency
     * Required: No
     * Description: The price of a product (e.g. 29.20).
     */
    public $price;

    /**
     * Key: quantity
     * Value Type: integer
     * Required: No
     * Description: The quantity of a product (e.g. 2).
     */
    public $quantity;

    /**
     * Key: coupon
     * Value Type: text
     * Required: No
     * Description: The coupon code associated with a product (e.g. SUMMER_SALE13).
     */
    public $coupon;

    /**
     * Key: position
     * Value Type: integer
     * Required: No
     * Description: The product's position in a list or collection (e.g. 2).
     */
    public $position;

    public static function withProduct(Product $product) {
        $instance = new self();

        $instance->id = $product->id;
        $instance->name = $product->title;
        $instance->price = empty($product->promoprice) ? $product->price : $product->promoprice;

        return $instance;
    }

    public static function withOrder(Order $order) {
        $products = [];

        foreach (CJSON::decode($order->products) as $product) {
            $instance = new self();

            $instance->id = $product['id'];
            $instance->name = $product['title'];
            $instance->price = $product['price'];
            $instance->quantity = $product['quantity'];

            $products[] = $instance->toArray();
        }

        return $products;
    }

    public function toArray() {
        $array = [];

        if ($this->id !== null) {
            $array['id'] = $this->id;
        }

        if ($this->name !== null) {
            $array['name'] = $this->name;
        }

        if ($this->brand !== null) {
            $array['brand'] = $this->brand;
        }

        if ($this->category !== null) {
            $array['category'] = $this->category;
        }

        if ($this->variant !== null) {
            $array['variant'] = $this->variant;
        }

        if ($this->price !== null) {
            $array['price'] = (float) $this->price;
        }

        if ($this->quantity !== null) {
            $array['quantity'] = (int) $this->quantity;
        }

        if ($this->coupon !== null) {
            $array['coupon'] = $this->coupon;
        }

        if ($this->position !== null) {
            $array['position'] = (int) $this->position;
        }

        return $array;
    }

}
