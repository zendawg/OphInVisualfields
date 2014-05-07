<?php

class m140506_161243_visual_fields extends OEMigration
{
	public function safeUp()
	{
		$this->createOETable('ophinvisualfields_strategy', array('id' => 'pk', 'name' => 'string not null'), true);
		$this->createOETable('ophinvisualfields_pattern', array('id' => 'pk', 'name' => 'string not null'), true);
		$this->createOETable('ophinvisualfields_ability', array('id' => 'pk', 'name' => 'string not null', 'active' => 'boolean not null default true'), true);
		$this->createOETable('ophinvisualfields_assessment', array('id' => 'pk', 'name' => 'string not null', 'active' => 'boolean not null default true'), true);

		$this->createOETable(
			'ophinvisualfields_field_measurement',
			array(
				'id' => 'pk',
				'patient_measurement_id' => 'integer not null',
				'eye_id' => 'integer unsigned not null',
				'image_id' => 'integer unsigned not null',
				'cropped_image_id' => 'integer unsigned not null',
				'strategy_id' => 'integer not null',
				'pattern_id' => 'integer not null',
				'study_datetime' => 'datetime not null',
				'source' => 'text',
				'constraint ophinvisualfields_field_measurement_pm_id_fk foreign key (patient_measurement_id) references patient_measurement (id)',
				'constraint ophinvisualfields_field_measurement_im_id_fk foreign key (image_id) references protected_file (id)',
				'constraint ophinvisualfields_field_measurement_ci_id_fk foreign key (cropped_image_id) references protected_file (id)',
				'constraint ophinvisualfields_field_measurement_st_id_fk foreign key (strategy_id) references ophinvisualfields_strategy (id)',
				'constraint ophinvisualfields_field_measurement_pa_id_fk foreign key (pattern_id) references ophinvisualfields_pattern (id)',
			),
			true
		);

		$this->createOETable(
			'et_ophinvisualfields_image',
			array(
				'id' => 'pk',
				'event_id' => 'integer unsigned not null',
				'eye_id' => 'integer unsigned not null',
				'left_field_id' => 'integer',
				'right_field_id' => 'integer',
				'constraint et_ophinvisualfields_image_event_id_fk foreign key (event_id) references event (id)',
				'constraint et_ophinvisualfields_image_lf_id_fk foreign key (left_field_id) references ophinvisualfields_field_measurement (id)',
				'constraint et_ophinvisualfields_image_rf_id_fk foreign key (right_field_id) references ophinvisualfields_field_measurement (id)',
			),
			true
		);

		$this->createOETable(
			'et_ophinvisualfields_condition',
			array(
				'id' => 'pk',
				'event_id' => 'integer unsigned not null',
				'ability_id' => 'integer not null',
				'other' => 'text',
				'glasses' => 'boolean not null',
				'constraint et_ophinvisualfields_condition_event_id_fk foreign key (event_id) references event (id)',
				'constraint et_ophinvisualfields_condition_ability_id_fk foreign key (ability_id) references ophinvisualfields_ability (id)',
			),
			true
		);

		$this->createOETable(
			'et_ophinvisualfields_comments',
			array(
				'id' => 'pk',
				'event_id' => 'integer unsigned not null',
				'comments' => 'text not null',
				'constraint et_ophinvisualfields_comments_event_id_fk foreign key (event_id) references event (id)',
			),
			true
		);

		$this->createOETable(
			'et_ophinvisualfields_result',
			array(
				'id' => 'pk',
				'event_id' => 'integer unsigned not null',
				'reliability' => 'boolean not null',
				'assessment' => 'boolean not null',
				'assessment_id' => 'integer not null',
				'other' => 'text',
				'constraint et_ophinvisualfields_result_event_id_fk foreign key (event_id) references event (id)',
				'constraint et_ophinvisualfields_result_assessment_id_fk foreign key (assessment_id) references ophinvisualfields_assessment (id)',
			),
			true
		);

		$event_type_id = $this->insertOEEventType('Visual Fields', 'OphInVisualfields', 'In');
		$this->insertOEElementType(
			array(
				'Element_OphInVisualfields_Image' => array('name' => 'Image', 'required' => true),
				'Element_OphInVisualfields_Condition' => array('name' => 'Condition', 'required' => true),
				'Element_OphInVisualfields_Comments' => array('name' => 'Comments', 'required' => true),
				'Element_OphInVisualfields_Result' => array('name' => 'Result', 'required' => true),
			),
			$event_type_id
		);

		$this->initialiseData(__DIR__);
	}

	public function safeDown()
	{
		$this->delete('element_type', array('in', 'class_name', array('Element_OphInVisualfields_Image', 'Element_OphInVisualfields_Condition', 'Element_OphInVisualfields_Comments', 'Element_OphInVisualfields_Result')));
		$this->delete('event_type', 'class_name = "OphInVisualfields"');

		$this->dropTable('et_ophinvisualfields_image');
		$this->dropTable('et_ophinvisualfields_image_version');
		$this->dropTable('et_ophinvisualfields_condition');
		$this->dropTable('et_ophinvisualfields_condition_version');
		$this->dropTable('et_ophinvisualfields_comments');
		$this->dropTable('et_ophinvisualfields_comments_version');
		$this->dropTable('et_ophinvisualfields_result');
		$this->dropTable('et_ophinvisualfields_result_version');

		$this->dropTable('ophinvisualfields_field_measurement');
		$this->dropTable('ophinvisualfields_field_measurement_version');

		$this->dropTable('ophinvisualfields_strategy');
		$this->dropTable('ophinvisualfields_strategy_version');
		$this->dropTable('ophinvisualfields_pattern');
		$this->dropTable('ophinvisualfields_pattern_version');
		$this->dropTable('ophinvisualfields_ability');
		$this->dropTable('ophinvisualfields_ability_version');
		$this->dropTable('ophinvisualfields_assessment');
		$this->dropTable('ophinvisualfields_assessment_version');
	}
}
