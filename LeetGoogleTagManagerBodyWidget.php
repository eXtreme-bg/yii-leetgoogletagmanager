<?php

//
class LeetGoogleTagManagerBodyWidget extends CWidget {

    /**
     * @inheritDoc
     */
    public function init() {
        // Don't render the markup if the ID is not provided
        if (Yii::app()->googleTagManager->id === NULL) {
            return;
        }

        // Render
        $this->render('google-tag-manager-body', [
            'tagManagerId' => Yii::app()->googleTagManager->id
        ]);
    }

}