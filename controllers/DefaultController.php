<?php

class DefaultController extends BaseEventTypeController {

	public function actionCreate() {
		parent::actionCreate();
	}

	public function actionUpdate($id) {
		parent::actionUpdate($id);
	}

	public function actionView($id) {
		parent::actionView($id);
	}

	public function actionPrint($id) {
		parent::actionPrint($id);
	}

	/**
	 * Update images for a VF based on test type and strategy.
	 * 
	 * @param type $patient_id
	 * @param type $test_type_id
	 * @param type $strategy_id
	 */
	public function actionUpdateImages($patient_id, $test_type, $strategy) {
		$doc = new ScannedDocument;
		if ($doc->isSupported('Visualfields', $test_type)) {
			$leftImages = $doc->getScannedDocuments('Visualfields', 'humphreys', $patient_id, array('strategy' => $strategy, 'eye' => 'L', 'associated' => 0));
			$rightImages = $doc->getScannedDocuments('Visualfields', 'humphreys', $patient_id, array('strategy' => $strategy, 'eye' => 'R', 'associated' => 0));
			$element = Yii::app()->session['_image_element'];
			$patient = Patient::model()->find('hos_num=\'' . $patient_id . '\'');
			$this->renderPartial('form_Element_OphInVisualfields_Image', array('element' => $element, 'rightImages' => $rightImages, 'leftImages' => $leftImages, 'patient' => $patient));
		}
	}

	/**
	 * Update images for a VF based on test type and strategy.
	 * 
	 * @param type $patient_id
	 * @param type $test_type_id
	 * @param type $strategy_id
	 */
	public function actionUpdateImage($fileId, $side) {
		$doc = new ScannedDocument;
		if ($doc->isSupported('humphreys') && $fileId) {
			$this->renderPartial('form_Element_OphInVisualfields_Image', array('fileId' => $fileId));
		}
	}

}
