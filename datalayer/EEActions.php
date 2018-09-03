<?php

/**
 * Actions specify how to interpret product and promotion data that you send to Google Analytics
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class EEActions {

    const ACTION_CLICK = 'click'; // A click on a product or product link for one or more products
    const ACTION_DETAIL = 'detail'; // A view of product details
    const ACTION_ADD = 'add'; // Adding one or more products to a shopping cart
    const ACTION_REMOVE = 'remove'; // Remove one or more products from a shopping cart
    const ACTION_CHECKOUT = 'checkout'; // Initiating the checkout process for one or more products
    const ACTION_CHECKOUT_OPTION = 'checkout_option'; // Sending the option value for a given checkout step
    const ACTION_PURCHASE = 'purchase'; // The sale of one or more products
    const ACTION_REFUND = 'refund'; // The refund of one or more products
    const ACTION_O_CLICK = 'o_click'; // A click on an internal promotion

}
