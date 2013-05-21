<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2012
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2012, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<?php
// TODO - how to deal with cross-module dependencies?
Yii::import('application.modules.module_esb_mirth.models.*');

if (isset($element)) {
  Yii::app()->session['_image_element'] = $element;
}
if (!isset($element)) {
  $element = Yii::app()->session['_image_element'];
}
if (isset($form)) {
  Yii::app()->session['_image_form'] = $form;
}
if (!isset($form)) {
  $form = Yii::app()->session['_image_form'];
}

$divName = $element->elementType->class_name;
if (!isset($leftImages)) {
  $leftImages = array();
}
if (!isset($rightImages)) {
  $rightImages = array();
}
if (!isset($patient)) {
  $patient = $this->patient;
}
?>

<script TYPE="TEXT/JAVASCRIPT">
  var patient_id = <?php echo $patient->hos_num ?>
    
  $('#<?php echo $element->elementType->class_name ?>_right_image').change(function() {
    updateImage('#<?php echo $divName ?>_right_image_thumb', '#<?php echo $divName ?>_right_image_url', $(this).children('option:selected').val());
    return false;
  });
  $('#<?php echo $element->elementType->class_name ?>_left_image').change(function() {
    updateImage('#<?php echo $divName ?>_left_image_thumb', '#<?php echo $divName ?>_left_image_url', $(this).children('option:selected').val());
    return false;
  });
    
  function updateImage(divName, divNameUrl, assetId) {
    var dir = '<?php echo VfaUtils::getEncodedDiscFileName($patient->hos_num) . '/thumbs/' ?>';
    $(divName).attr('src', dir + assetId + '.tif');
    var dir2 = '<?php echo VfaUtils::getEncodedDiscFileName($patient->hos_num) . '/' ?>';
    $(divNameUrl).attr('href', dir2 + assetId + '.tif');
  }
</SCRIPT>

<div>
  <div id="form_Element_OphInVisualfields" class="element <?php echo $element->elementType->class_name ?>"
       data-element-type-id="<?php echo $element->elementType->id ?>"
       data-element-type-class="<?php echo $element->elementType->class_name ?>"
       data-element-type-name="<?php echo $element->elementType->name ?>"
       data-element-display-order="<?php echo $element->elementType->display_order ?>">
    <h4 class="elementTypeName"><?php echo $element->elementType->name; ?></h4>


    <div class="cols2 clearfix">
      <div class="side left eventDetail"
           data-side="right">
<?php
  $leftSrc = "";
  $leftHref = "";
  if ($element->left_image && count($leftImages) > 0) {
    foreach($leftImages as $image) {
      if ($image->fsScanHumphreyImage->file->asset->id == $element->left_image) {
        $leftSrc = VfaUtils::getEncodedDiscFileName($patient->hos_num) . '/thumbs/'
              . $element->left_image;
        $leftHref = VfaUtils::getEncodedDiscFileName($patient->hos_num) . '/'
              . $element->left_image;
      }
    }
  }
  $rightSrc = null;
  $rightHref = null;
  if ($element->right_image && count($rightImages) > 0) {
    foreach($rightImages as $image) {
      if ($image->fsScanHumphreyImage->file->asset->id == $element->right_image) {
        $rightSrc = VfaUtils::getEncodedDiscFileName($patient->hos_num) . '/thumbs/'
              . $element->right_image;
        $rightHref = VfaUtils::getEncodedDiscFileName($patient->hos_num) . '/'
              . $element->right_image;
      }
    }
  }
?>
        
        <?php echo $form->dropDownList($element, 'right_image', CHtml::listData($rightImages, 
                'fsScanHumphreyImage.file.asset.id',
                'file_name'), array('empty' => '- Please select -')) ?>

        <div id='<?php echo $divName ?>' class="side left eventDetail"
             data-side="left">
          <a id="<?php echo $divName ?>_right_image_url" href="<?php echo $rightHref ?>"><img id="<?php echo $divName ?>_right_image_thumb" src="<?php echo $rightSrc ?>" /></a>
          <div id="<?php echo $divName ?>_date"></div>
        </div>
      </div>

      <div class="side right eventDetail"
           data-side="left">
             <?php echo $form->dropDownList($element, 'left_image', CHtml::listData($leftImages, 'fsScanHumphreyImage.file.asset.id', 'file_name'), array('empty' => '- Please select -')) ?>

        <div id='<?php echo $divName ?>' class="side right eventDetail"
             data-side="left">
          <a id="<?php echo $divName ?>_left_image_url" href="<?php echo $leftHref ?>"><img id="<?php echo $divName ?>_left_image_thumb" src="<?php echo $leftSrc ?>" /></a>
          <div id="<?php echo $divName ?>_date"></div>
        </div>
      </div>
    </div>
  </div>