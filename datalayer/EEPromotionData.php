<?php

/**
 * Represents information about a promotion that has been viewed.
 * It is referred to a promoFieldObject.
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class EEPromotionData {

    /**
     * Key: id
     * Value Type: text
     * Required: Yes*
     * Description:
     */
    public $id;

    /**
     * Key: name
     * Value Type: text
     * Required: Yes*
     * Description:
     */
    public $name;

    /**
     * Key: creative
     * Value Type: text
     * Required: No
     * Description: The creative associated with the promotion (e.g. summer_banner2).
     */
    public $creative;

    /**
     * Key: position
     * Value Type: text
     * Required: No
     * Description: The position of the creative (e.g. banner_slot_1).
     */
    public $position;

}