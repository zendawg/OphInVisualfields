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
echo CHtml::hiddenField('YII_CSRF_TOKEN', Yii::app()->request->csrfToken);
?>
<section class="element <?php echo $element->elementType->class_name?>"
        data-element-type-id="<?php echo $element->elementType->id?>"
        data-element-type-class="<?php echo $element->elementType->class_name?>"
        data-element-type-name="<?php echo $element->elementType->name?>"
        data-element-display-order="<?php echo $element->elementType->display_order?>">
        <header class="element-header">
                <h3 class="element-title"><?php echo $element->elementType->name; ?></h3>
        </header>

        <div class="element-fields">

  <?php echo $form->dropDownList($element, 'pattern_id', CHtml::listData(OphInVisualfields_Pattern::model()->findAll(array('order' => 'name asc')), 'id', 'name'), array('empty' => '- Please select -')) ?>
  <?php echo $form->dropDownList($element, 'strategy_id', CHtml::listData(OphInVisualfields_Strategy::model()->findAll(array('order' => 'name asc')), 'id', 'name'), array('empty' => '- Please select -')) ?>
</section>

<SCRIPT TYPE="TEXT/JAVASCRIPT">
  
  var patient_id = <?php echo $this->patient->hos_num ?>
    
    
  $('body').delegate('#Element_OphInVisualfields_Details_strategy_id', 'change', function() {
    var test_type = $('#Element_OphInVisualfields_Testtype_test_type_id').children('option:selected').text();
    
    var selected = $(this).children('option:selected');
    
    if(selected.val().length) {
      var strategy = selected.text();
      updateImages(test_type, strategy);
    }
    return false;
  });
    
  $('document').ready(function() {
    var test_type = $('#Element_OphInVisualfields_Testtype_test_type_id').children('option:selected');
    var strategy = $('#Element_OphInVisualfields_Details_strategy_id').children('option:selected');
    if (test_type.val() > 0 && strategy.val() > 0) {
      updateImages(test_type.text(), strategy.text());
    }
  });
    
  function updateImages(test_type, strategy) {
    var csrf = $('#YII_CSRF_TOKEN').val();
    $.get(baseUrl+"/OphInVisualfields/Default/UpdateImages", { patient_id: patient_id, test_type: test_type, strategy: strategy, 'YII_CSRF_TOKEN': csrf }, function(data){
      $('#form_Element_OphInVisualfields').html(data);
    });
  }
</SCRIPT>