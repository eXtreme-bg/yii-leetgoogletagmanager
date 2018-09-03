<?php

/**
 * Render the JavaScript tracking code.
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class LeetGoogleTagManager extends CApplicationComponent {

    /** @var string|null */
    public $id = null;

    /** @var array */
    protected $_dataLayerForCurrentRequest = [];

    /** @var string */
    public $sessionKey = 'leet-google-tag-manager-data-layer';

    /**
     * TODO: Document it. Rename it
     *
     * @param string $key
     * @param string $value
     */
    public function dataLayerPushItemDelay($key, $value) {
        $session = Yii::app()->session;

        $dataLayerItems = $session->get($this->sessionKey, []);
        $dataLayerItems[] = [$key => $value];

        $session->add($this->sessionKey, $dataLayerItems);
    }

    /**
     * Adding data layer variable
     *
     * @param string $key
     * @param string $value
     */
    public function addDataLayerVariable($key, $value) {
        $this->_dataLayerForCurrentRequest[] = [$key => $value];
    }

    /**
     * Returns the data layer variables
     *
     * @return array
     */
    public function getDataLayerVariables() {
        return $this->_dataLayerForCurrentRequest;
    }

}
