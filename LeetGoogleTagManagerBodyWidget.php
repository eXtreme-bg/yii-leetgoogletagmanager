<?php

/**
 * Render the tracking code used when JavaScript isn't available.
 *
 * Put this widget after the opening <body> tag on every page of your website.
 *
 * @author Bogdan Kovachev (https://1337.bg)
 */
class LeetGoogleTagManagerBodyWidget extends CWidget {

    /**
     * @inheritDoc
     */
    public function init() {
        // Don't render the markup if the ID is not provided
        if (Yii::app()->googleTagManager->id === null) {
            return;
        }

        // Render
        $this->render('google-tag-manager-body', [
            'tagManagerId' => Yii::app()->googleTagManager->id
        ]);
    }

}
