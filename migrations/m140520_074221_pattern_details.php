<?php

class m140520_074221_pattern_details extends CDbMigration {

    public function safeUp() {

        // ********************************
        // change pattern_ocr to something else
        $this->createTable('et_ophinvisualfields_hvf_post_ocr', array(
            'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
            // ********************************
            'sens_1' => 'INT(3) UNSIGNED',
            'sens_2' => 'INT(3) UNSIGNED',
            'sens_3' => 'INT(3) UNSIGNED',
            'sens_4' => 'INT(3) UNSIGNED',
            'sens_5' => 'INT(3) UNSIGNED',
            'sens_6' => 'INT(3) UNSIGNED',
            'sens_7' => 'INT(3) UNSIGNED',
            'sens_8' => 'INT(3) UNSIGNED',
            'sens_9' => 'INT(3) UNSIGNED',
            'sens_10' => 'INT(3) UNSIGNED',
            'sens_11' => 'INT(3) UNSIGNED',
            'sens_12' => 'INT(3) UNSIGNED',
            'sens_13' => 'INT(3) UNSIGNED',
            'sens_14' => 'INT(3) UNSIGNED',
            'sens_15' => 'INT(3) UNSIGNED',
            'sens_16' => 'INT(3) UNSIGNED',
            'sens_17' => 'INT(3) UNSIGNED',
            'sens_18' => 'INT(3) UNSIGNED',
            'sens_19' => 'INT(3) UNSIGNED',
            'sens_20' => 'INT(3) UNSIGNED',
            'sens_21' => 'INT(3) UNSIGNED',
            'sens_22' => 'INT(3) UNSIGNED',
            'sens_23' => 'INT(3) UNSIGNED',
            'sens_24' => 'INT(3) UNSIGNED',
            'sens_25' => 'INT(3) UNSIGNED',
            'sens_26' => 'INT(3) UNSIGNED',
            'sens_27' => 'INT(3) UNSIGNED',
            'sens_28' => 'INT(3) UNSIGNED',
            'sens_29' => 'INT(3) UNSIGNED',
            'sens_30' => 'INT(3) UNSIGNED',
            'sens_31' => 'INT(3) UNSIGNED',
            'sens_32' => 'INT(3) UNSIGNED',
            'sens_33' => 'INT(3) UNSIGNED',
            'sens_34' => 'INT(3) UNSIGNED',
            'sens_35' => 'INT(3) UNSIGNED',
            'sens_36' => 'INT(3) UNSIGNED',
            'sens_37' => 'INT(3) UNSIGNED',
            'sens_38' => 'INT(3) UNSIGNED',
            'sens_39' => 'INT(3) UNSIGNED',
            'sens_40' => 'INT(3) UNSIGNED',
            'sens_41' => 'INT(3) UNSIGNED',
            'sens_42' => 'INT(3) UNSIGNED',
            'sens_43' => 'INT(3) UNSIGNED',
            'sens_44' => 'INT(3) UNSIGNED',
            'sens_45' => 'INT(3) UNSIGNED',
            'sens_46' => 'INT(3) UNSIGNED',
            'sens_47' => 'INT(3) UNSIGNED',
            'sens_48' => 'INT(3) UNSIGNED',
            'sens_49' => 'INT(3) UNSIGNED',
            'sens_50' => 'INT(3) UNSIGNED',
            'sens_51' => 'INT(3) UNSIGNED',
            'sens_52' => 'INT(3) UNSIGNED',
            'sens_53' => 'INT(3) UNSIGNED',
            'sens_54' => 'INT(3) UNSIGNED',
            'sens_55' => 'INT(3) UNSIGNED',
            'sens_56' => 'INT(3) UNSIGNED',
            'sens_57' => 'INT(3) UNSIGNED',
            'sens_58' => 'INT(3) UNSIGNED',
            'sens_59' => 'INT(3) UNSIGNED',
            'sens_60' => 'INT(3) UNSIGNED',
            'sens_61' => 'INT(3) UNSIGNED',
            'sens_62' => 'INT(3) UNSIGNED',
            'sens_63' => 'INT(3) UNSIGNED',
            'sens_64' => 'INT(3) UNSIGNED',
            'sens_65' => 'INT(3) UNSIGNED',
            'sens_66' => 'INT(3) UNSIGNED',
            'sens_67' => 'INT(3) UNSIGNED',
            'sens_68' => 'INT(3) UNSIGNED',
            'sens_69' => 'INT(3) UNSIGNED',
            'sens_70' => 'INT(3) UNSIGNED',
            'sens_71' => 'INT(3) UNSIGNED',
            'sens_72' => 'INT(3) UNSIGNED',
            'sens_73' => 'INT(3) UNSIGNED',
            'sens_74' => 'INT(3) UNSIGNED',
            'sens_75' => 'INT(3) UNSIGNED',
            'sens_76' => 'INT(3) UNSIGNED',
            //now onto total deviation values which are signed
			'td_1' => 'INT(3) SIGNED',
            'td_1' => 'INT(3) SIGNED',
            'td_2' => 'INT(3) SIGNED',
            'td_3' => 'INT(3) SIGNED',
            'td_4' => 'INT(3) SIGNED',
            'td_5' => 'INT(3) SIGNED',
            'td_6' => 'INT(3) SIGNED',
            'td_7' => 'INT(3) SIGNED',
            'td_8' => 'INT(3) SIGNED',
            'td_9' => 'INT(3) SIGNED',
            'td_10' => 'INT(3) SIGNED',
            'td_11' => 'INT(3) SIGNED',
            'td_12' => 'INT(3) SIGNED',
            'td_13' => 'INT(3) SIGNED',
            'td_14' => 'INT(3) SIGNED',
            'td_15' => 'INT(3) SIGNED',
            'td_16' => 'INT(3) SIGNED',
            'td_17' => 'INT(3) SIGNED',
            'td_18' => 'INT(3) SIGNED',
            'td_19' => 'INT(3) SIGNED',
            'td_20' => 'INT(3) SIGNED',
            'td_21' => 'INT(3) SIGNED',
            'td_22' => 'INT(3) SIGNED',
            'td_23' => 'INT(3) SIGNED',
            'td_24' => 'INT(3) SIGNED',
            'td_25' => 'INT(3) SIGNED',
            'td_26' => 'INT(3) SIGNED',
            'td_27' => 'INT(3) SIGNED',
            'td_28' => 'INT(3) SIGNED',
            'td_29' => 'INT(3) SIGNED',
            'td_30' => 'INT(3) SIGNED',
            'td_31' => 'INT(3) SIGNED',
            'td_32' => 'INT(3) SIGNED',
            'td_33' => 'INT(3) SIGNED',
            'td_34' => 'INT(3) SIGNED',
            'td_35' => 'INT(3) SIGNED',
            'td_36' => 'INT(3) SIGNED',
            'td_37' => 'INT(3) SIGNED',
            'td_38' => 'INT(3) SIGNED',
            'td_39' => 'INT(3) SIGNED',
            'td_40' => 'INT(3) SIGNED',
            'td_41' => 'INT(3) SIGNED',
            'td_42' => 'INT(3) SIGNED',
            'td_43' => 'INT(3) SIGNED',
            'td_44' => 'INT(3) SIGNED',
            'td_45' => 'INT(3) SIGNED',
            'td_46' => 'INT(3) SIGNED',
            'td_47' => 'INT(3) SIGNED',
            'td_48' => 'INT(3) SIGNED',
            'td_49' => 'INT(3) SIGNED',
            'td_50' => 'INT(3) SIGNED',
            'td_51' => 'INT(3) SIGNED',
            'td_52' => 'INT(3) SIGNED',
            'td_53' => 'INT(3) SIGNED',
            'td_54' => 'INT(3) SIGNED',
            'td_55' => 'INT(3) SIGNED',
            'td_56' => 'INT(3) SIGNED',
            'td_57' => 'INT(3) SIGNED',
            'td_58' => 'INT(3) SIGNED',
            'td_59' => 'INT(3) SIGNED',
            'td_60' => 'INT(3) SIGNED',
            'td_61' => 'INT(3) SIGNED',
            'td_62' => 'INT(3) SIGNED',
            'td_63' => 'INT(3) SIGNED',
            'td_64' => 'INT(3) SIGNED',
            'td_65' => 'INT(3) SIGNED',
            'td_66' => 'INT(3) SIGNED',
            'td_67' => 'INT(3) SIGNED',
            'td_68' => 'INT(3) SIGNED',
            'td_69' => 'INT(3) SIGNED',
            'td_70' => 'INT(3) SIGNED',
            'td_71' => 'INT(3) SIGNED',
            'td_72' => 'INT(3) SIGNED',
            'td_73' => 'INT(3) SIGNED',
            'td_74' => 'INT(3) SIGNED',
            'td_75' => 'INT(3) SIGNED',
            'td_76' => 'INT(3) SIGNED',
            //pd values again signed
			'pd_1' => 'INT(3) SIGNED',
            'pd_1' => 'INT(3) SIGNED',
            'pd_2' => 'INT(3) SIGNED',
            'pd_3' => 'INT(3) SIGNED',
            'pd_4' => 'INT(3) SIGNED',
            'pd_5' => 'INT(3) SIGNED',
            'pd_6' => 'INT(3) SIGNED',
            'pd_7' => 'INT(3) SIGNED',
            'pd_8' => 'INT(3) SIGNED',
            'pd_9' => 'INT(3) SIGNED',
            'pd_10' => 'INT(3) SIGNED',
            'pd_11' => 'INT(3) SIGNED',
            'pd_12' => 'INT(3) SIGNED',
            'pd_13' => 'INT(3) SIGNED',
            'pd_14' => 'INT(3) SIGNED',
            'pd_15' => 'INT(3) SIGNED',
            'pd_16' => 'INT(3) SIGNED',
            'pd_17' => 'INT(3) SIGNED',
            'pd_18' => 'INT(3) SIGNED',
            'pd_19' => 'INT(3) SIGNED',
            'pd_20' => 'INT(3) SIGNED',
            'pd_21' => 'INT(3) SIGNED',
            'pd_22' => 'INT(3) SIGNED',
            'pd_23' => 'INT(3) SIGNED',
            'pd_24' => 'INT(3) SIGNED',
            'pd_25' => 'INT(3) SIGNED',
            'pd_26' => 'INT(3) SIGNED',
            'pd_27' => 'INT(3) SIGNED',
            'pd_28' => 'INT(3) SIGNED',
            'pd_29' => 'INT(3) SIGNED',
            'pd_30' => 'INT(3) SIGNED',
            'pd_31' => 'INT(3) SIGNED',
            'pd_32' => 'INT(3) SIGNED',
            'pd_33' => 'INT(3) SIGNED',
            'pd_34' => 'INT(3) SIGNED',
            'pd_35' => 'INT(3) SIGNED',
            'pd_36' => 'INT(3) SIGNED',
            'pd_37' => 'INT(3) SIGNED',
            'pd_38' => 'INT(3) SIGNED',
            'pd_39' => 'INT(3) SIGNED',
            'pd_40' => 'INT(3) SIGNED',
            'pd_41' => 'INT(3) SIGNED',
            'pd_42' => 'INT(3) SIGNED',
            'pd_43' => 'INT(3) SIGNED',
            'pd_44' => 'INT(3) SIGNED',
            'pd_45' => 'INT(3) SIGNED',
            'pd_46' => 'INT(3) SIGNED',
            'pd_47' => 'INT(3) SIGNED',
            'pd_48' => 'INT(3) SIGNED',
            'pd_49' => 'INT(3) SIGNED',
            'pd_50' => 'INT(3) SIGNED',
            'pd_51' => 'INT(3) SIGNED',
            'pd_52' => 'INT(3) SIGNED',
            'pd_53' => 'INT(3) SIGNED',
            'pd_54' => 'INT(3) SIGNED',
            'pd_55' => 'INT(3) SIGNED',
            'pd_56' => 'INT(3) SIGNED',
            'pd_57' => 'INT(3) SIGNED',
            'pd_58' => 'INT(3) SIGNED',
            'pd_59' => 'INT(3) SIGNED',
            'pd_60' => 'INT(3) SIGNED',
            'pd_61' => 'INT(3) SIGNED',
            'pd_62' => 'INT(3) SIGNED',
            'pd_63' => 'INT(3) SIGNED',
            'pd_64' => 'INT(3) SIGNED',
            'pd_65' => 'INT(3) SIGNED',
            'pd_66' => 'INT(3) SIGNED',
            'pd_67' => 'INT(3) SIGNED',
            'pd_68' => 'INT(3) SIGNED',
            'pd_69' => 'INT(3) SIGNED',
            'pd_70' => 'INT(3) SIGNED',
            'pd_71' => 'INT(3) SIGNED',
            'pd_72' => 'INT(3) SIGNED',
            'pd_73' => 'INT(3) SIGNED',
            'pd_74' => 'INT(3) SIGNED',
            'pd_75' => 'INT(3) SIGNED',
            'pd_76' => 'INT(3) SIGNED',
            //total deviation probability values
            'td_prob_1' => 'INT(3) SIGNED',
            'td_prob_2' => 'INT(3) SIGNED',
            'td_prob_3' => 'INT(3) SIGNED',
            'td_prob_4' => 'INT(3) SIGNED',
            'td_prob_5' => 'INT(3) SIGNED',
            'td_prob_6' => 'INT(3) SIGNED',
            'td_prob_7' => 'INT(3) SIGNED',
            'td_prob_8' => 'INT(3) SIGNED',
            'td_prob_9' => 'INT(3) SIGNED',
            'td_prob_10' => 'INT(3) SIGNED',
            'td_prob_11' => 'INT(3) SIGNED',
            'td_prob_12' => 'INT(3) SIGNED',
            'td_prob_13' => 'INT(3) SIGNED',
            'td_prob_14' => 'INT(3) SIGNED',
            'td_prob_15' => 'INT(3) SIGNED',
            'td_prob_16' => 'INT(3) SIGNED',
            'td_prob_17' => 'INT(3) SIGNED',
            'td_prob_18' => 'INT(3) SIGNED',
            'td_prob_19' => 'INT(3) SIGNED',
            'td_prob_20' => 'INT(3) SIGNED',
            'td_prob_21' => 'INT(3) SIGNED',
            'td_prob_22' => 'INT(3) SIGNED',
            'td_prob_23' => 'INT(3) SIGNED',
            'td_prob_24' => 'INT(3) SIGNED',
            'td_prob_25' => 'INT(3) SIGNED',
            'td_prob_26' => 'INT(3) SIGNED',
            'td_prob_27' => 'INT(3) SIGNED',
            'td_prob_28' => 'INT(3) SIGNED',
            'td_prob_29' => 'INT(3) SIGNED',
            'td_prob_30' => 'INT(3) SIGNED',
            'td_prob_31' => 'INT(3) SIGNED',
            'td_prob_32' => 'INT(3) SIGNED',
            'td_prob_33' => 'INT(3) SIGNED',
            'td_prob_34' => 'INT(3) SIGNED',
            'td_prob_35' => 'INT(3) SIGNED',
            'td_prob_36' => 'INT(3) SIGNED',
            'td_prob_37' => 'INT(3) SIGNED',
            'td_prob_38' => 'INT(3) SIGNED',
            'td_prob_39' => 'INT(3) SIGNED',
            'td_prob_40' => 'INT(3) SIGNED',
            'td_prob_41' => 'INT(3) SIGNED',
            'td_prob_42' => 'INT(3) SIGNED',
            'td_prob_43' => 'INT(3) SIGNED',
            'td_prob_44' => 'INT(3) SIGNED',
            'td_prob_45' => 'INT(3) SIGNED',
            'td_prob_46' => 'INT(3) SIGNED',
            'td_prob_47' => 'INT(3) SIGNED',
            'td_prob_48' => 'INT(3) SIGNED',
            'td_prob_49' => 'INT(3) SIGNED',
            'td_prob_50' => 'INT(3) SIGNED',
            'td_prob_51' => 'INT(3) SIGNED',
            'td_prob_52' => 'INT(3) SIGNED',
            'td_prob_53' => 'INT(3) SIGNED',
            'td_prob_54' => 'INT(3) SIGNED',
            'td_prob_55' => 'INT(3) SIGNED',
            'td_prob_56' => 'INT(3) SIGNED',
            'td_prob_57' => 'INT(3) SIGNED',
            'td_prob_58' => 'INT(3) SIGNED',
            'td_prob_59' => 'INT(3) SIGNED',
            'td_prob_60' => 'INT(3) SIGNED',
            'td_prob_61' => 'INT(3) SIGNED',
            'td_prob_62' => 'INT(3) SIGNED',
            'td_prob_63' => 'INT(3) SIGNED',
            'td_prob_64' => 'INT(3) SIGNED',
            'td_prob_65' => 'INT(3) SIGNED',
            'td_prob_66' => 'INT(3) SIGNED',
            'td_prob_67' => 'INT(3) SIGNED',
            'td_prob_68' => 'INT(3) SIGNED',
            'td_prob_69' => 'INT(3) SIGNED',
            'td_prob_70' => 'INT(3) SIGNED',
            'td_prob_71' => 'INT(3) SIGNED',
            'td_prob_72' => 'INT(3) SIGNED',
            'td_prob_73' => 'INT(3) SIGNED',
            'td_prob_74' => 'INT(3) SIGNED',
            'td_prob_75' => 'INT(3) SIGNED',
            'td_prob_76' => 'INT(3) SIGNED',
            //pd probability values
            'pd_prob_1' => 'INT(3) SIGNED',
            'pd_prob_2' => 'INT(3) SIGNED',
            'pd_prob_3' => 'INT(3) SIGNED',
            'pd_prob_4' => 'INT(3) SIGNED',
            'pd_prob_5' => 'INT(3) SIGNED',
            'pd_prob_6' => 'INT(3) SIGNED',
            'pd_prob_7' => 'INT(3) SIGNED',
            'pd_prob_8' => 'INT(3) SIGNED',
            'pd_prob_9' => 'INT(3) SIGNED',
            'pd_prob_10' => 'INT(3) SIGNED',
            'pd_prob_11' => 'INT(3) SIGNED',
            'pd_prob_12' => 'INT(3) SIGNED',
            'pd_prob_13' => 'INT(3) SIGNED',
            'pd_prob_14' => 'INT(3) SIGNED',
            'pd_prob_15' => 'INT(3) SIGNED',
            'pd_prob_16' => 'INT(3) SIGNED',
            'pd_prob_17' => 'INT(3) SIGNED',
            'pd_prob_18' => 'INT(3) SIGNED',
            'pd_prob_19' => 'INT(3) SIGNED',
            'pd_prob_20' => 'INT(3) SIGNED',
            'pd_prob_21' => 'INT(3) SIGNED',
            'pd_prob_22' => 'INT(3) SIGNED',
            'pd_prob_23' => 'INT(3) SIGNED',
            'pd_prob_24' => 'INT(3) SIGNED',
            'pd_prob_25' => 'INT(3) SIGNED',
            'pd_prob_26' => 'INT(3) SIGNED',
            'pd_prob_27' => 'INT(3) SIGNED',
            'pd_prob_28' => 'INT(3) SIGNED',
            'pd_prob_29' => 'INT(3) SIGNED',
            'pd_prob_30' => 'INT(3) SIGNED',
            'pd_prob_31' => 'INT(3) SIGNED',
            'pd_prob_32' => 'INT(3) SIGNED',
            'pd_prob_33' => 'INT(3) SIGNED',
            'pd_prob_34' => 'INT(3) SIGNED',
            'pd_prob_35' => 'INT(3) SIGNED',
            'pd_prob_36' => 'INT(3) SIGNED',
            'pd_prob_37' => 'INT(3) SIGNED',
            'pd_prob_38' => 'INT(3) SIGNED',
            'pd_prob_39' => 'INT(3) SIGNED',
            'pd_prob_40' => 'INT(3) SIGNED',
            'pd_prob_41' => 'INT(3) SIGNED',
            'pd_prob_42' => 'INT(3) SIGNED',
            'pd_prob_43' => 'INT(3) SIGNED',
            'pd_prob_44' => 'INT(3) SIGNED',
            'pd_prob_45' => 'INT(3) SIGNED',
            'pd_prob_46' => 'INT(3) SIGNED',
            'pd_prob_47' => 'INT(3) SIGNED',
            'pd_prob_48' => 'INT(3) SIGNED',
            'pd_prob_49' => 'INT(3) SIGNED',
            'pd_prob_50' => 'INT(3) SIGNED',
            'pd_prob_51' => 'INT(3) SIGNED',
            'pd_prob_52' => 'INT(3) SIGNED',
            'pd_prob_53' => 'INT(3) SIGNED',
            'pd_prob_54' => 'INT(3) SIGNED',
            'pd_prob_55' => 'INT(3) SIGNED',
            'pd_prob_56' => 'INT(3) SIGNED',
            'pd_prob_57' => 'INT(3) SIGNED',
            'pd_prob_58' => 'INT(3) SIGNED',
            'pd_prob_59' => 'INT(3) SIGNED',
            'pd_prob_60' => 'INT(3) SIGNED',
            'pd_prob_61' => 'INT(3) SIGNED',
            'pd_prob_62' => 'INT(3) SIGNED',
            'pd_prob_63' => 'INT(3) SIGNED',
            'pd_prob_64' => 'INT(3) SIGNED',
            'pd_prob_65' => 'INT(3) SIGNED',
            'pd_prob_66' => 'INT(3) SIGNED',
            'pd_prob_67' => 'INT(3) SIGNED',
            'pd_prob_68' => 'INT(3) SIGNED',
            'pd_prob_69' => 'INT(3) SIGNED',
            'pd_prob_70' => 'INT(3) SIGNED',
            'pd_prob_71' => 'INT(3) SIGNED',
            'pd_prob_72' => 'INT(3) SIGNED',
            'pd_prob_73' => 'INT(3) SIGNED',
            'pd_prob_74' => 'INT(3) SIGNED',
            'pd_prob_75' => 'INT(3) SIGNED',
            'pd_prob_76' => 'INT(3) SIGNED',
            //end of datavalues

            // now core table fields:
            'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
            'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
            'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
            'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
            'PRIMARY KEY (`id`)',
            'KEY `et_ophinvisualfields_pattern_ocr_lmui_fk` (`last_modified_user_id`)',
            'KEY `et_ophinvisualfields_pattern_ocr_cui_fk` (`created_user_id`)',
            'CONSTRAINT `et_ophinvisualfields_pattern_ocr_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
            'CONSTRAINT `et_ophinvisualfields_pattern_ocr_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
                ), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');
		return true;
    }

    public function safeDown() {
        $this->dropTable('et_ophinvisualfields_pattern_ocr');
		return true;
    }

}