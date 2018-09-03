<?php

/**
 * Represents information about an ecommerce related action that has taken place.
 * It is referred to as an actionFieldObject.
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class EEActionData {

    /**
     * Key: id
     * Value Type: text
     * Required: Yes*
     * Description: The transaction ID (e.g. T1234). *Required if the action type is purchase or refund.
     */
    public $id;

    /**
     * Key: affiliation
     * Value Type: text
     * Required: No
     * Description: The store or affiliation from which this transaction occurred (e.g. Google Store).
     */
    public $affiliation;

    /**
     * Key: revenue
     * Value Type: currency
     * Required: No
     * Description: Specifies the total revenue or grand total associated with the transaction (e.g. 11.99). This value may include shipping, tax costs, or other adjustments to total revenue that you want to include as part of your revenue calculations. Note: if revenue is not set, its value will be automatically calculated using the product quantity and price fields of all products in the same hit.
     */
    public $revenue;

    /**
     * Key: tax
     * Value Type: currency
     * Required: No
     * Description: The total tax associated with the transaction.
     */
    public $tax;

    /**
     * Key: shipping
     * Value Type: currency
     * Required: No
     * Description: The shipping cost associated with the transaction.
     */
    public $shipping;

    /**
     * Key: coupon
     * Value Type: text
     * Required: No
     * Description: The transaction coupon redeemed with the transaction.
     */
    public $coupon;

    /**
     * Key: list
     * Value Type: text
     * Required: No
     * Description: The list that the associated products belong to. Optional.
     */
    public $list;

    /**
     * Key: step
     * Value Type: integer
     * Required: No
     * Description: A number representing a step in the checkout process. Optional on checkout actions.
     */
    public $step;

    /**
     * Key: option
     * Value Type: text
     * Required: No
     * Description: Additional field for checkout and checkout_option actions that can describe option information on the checkout page, like selected payment method.
     */
    public $option;

    public static function withOrder(Order $order) {
        $instance = new self();

        $instance->id = $order->id;
        $instance->revenue = $order->total;

        return $instance;
    }

    public function toArray() {
        $array = [];

        if ($this->id !== null) {
            $array['id'] = $this->id;
        }

        if ($this->affiliation !== null) {
            $array['affiliation'] = $this->affiliation;
        }

        if ($this->revenue !== null) {
            $array['revenue'] = (float) $this->revenue;
        }

        if ($this->tax !== null) {
            $array['tax'] = (float) $this->tax;
        }

        if ($this->shipping !== null) {
            $array['shipping'] = (float) $this->shipping;
        }

        if ($this->coupon !== null) {
            $array['coupon'] = $this->coupon;
        }

        if ($this->list !== null) {
            $array['list'] = $this->list;
        }

        if ($this->step !== null) {
            $array['step'] = (int) $this->step;
        }

        if ($this->option !== null) {
            $array['option'] = $this->option;
        }

        return $array;
    }

}
