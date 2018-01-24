<?php

/**
 *
 */
class LeetGoogleTagManagerHeadWidget extends CWidget {

    /**
     *
     */
    public function init() {
        // Don't render the markup if the ID is not provided
        if (Yii::app()->googleTagManager->id === NULL) {
            return;
        }

        $dataLayerItems = [];

        // If the session has data for dataLayer, then displays them and remove from the session
        $session = Yii::app()->session;

        if (isset($session[Yii::app()->googleTagManager->sessionKey])) {
            $dataLayerItems = $session->get(Yii::app()->googleTagManager->sessionKey, []);

            // Remove data from a session
            $session->remove(Yii::app()->googleTagManager->sessionKey);
        }

        $dataLayerItems = array_merge($dataLayerItems, Yii::app()->googleTagManager->getDataLayerVariables());

        // Render
        $this->render('google-tag-manager-head', [
            'tagManagerId' => Yii::app()->googleTagManager->id,
            'dataLayerItems' => $dataLayerItems
        ]);
    }

}