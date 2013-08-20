<?php

App::uses('AppModel', 'Model');

/**
 * HospitalDatum Model
 *
 */
class HospitalDatum extends AppModel
{
    public $defaultFields = array(
		'HospitalDatum.id',
		'HospitalDatum.company_name',
		'HospitalDatum.company_name_kana',
		'HospitalDatum.hospital_name',
		'HospitalDatum.hospital_name_kana',
		'HospitalDatum.url',
		'HospitalDatum.zip_code',
		'HospitalDatum.pref_cd',
		'HospitalDatum.ward_cd',
		'HospitalDatum.address',
		'HospitalDatum.address_free',
		'HospitalDatum.facility_form_id',
		'HospitalDatum.employees',
		'HospitalDatum.sickbed_kind',
		'HospitalDatum.sickbed',
		'HospitalDatum.sickbed_generality',
		'HospitalDatum.sickbed_medical',
		'HospitalDatum.nursing_standard',
		'HospitalDatum.emergency_specification',
		'HospitalDatum.contract_presence',
		'HospitalDatum.contract_date',
		'HospitalDatum.status',
		'HospitalDatum.insert_date',
		'HospitalDatum.update_date',
		'HospitalDatum.geo',
		'HospitalDatum.proagent_id',
		'HospitalDatum.',
		'HospitalDatum.history_business_id',
		'HospitalDatum.history_status',
		'HospitalDatum.history_date',
		'HospitalDatum.media_id',
		'HospitalDatum.internal_memo',
		'HospitalDatum.search_company_name',
		'HospitalDatum.search_company_name_kana',
		'HospitalDatum.search_hospital_name',
		'HospitalDatum.search_hospital_name_kana',
		'HospitalDatum.search_sickbed',
		'HospitalDatum.search_address',
		'HospitalDatum.search_internal_memo',
		'HospitalDatum.search_address_free',
		'HospitalDatum.ko_last_sync_date',
		'HospitalDatum.line_cd1',
		'HospitalDatum.line_cd2',
		'HospitalDatum.line_cd3',
		'HospitalDatum.station_cd1',
		'HospitalDatum.station_cd2',
		'HospitalDatum.station_cd3',
		'HospitalDatum.station_g_cd1',
		'HospitalDatum.station_g_cd2',
		'HospitalDatum.station_g_cd3',
		'HospitalDatum.station_freeword1',
		'HospitalDatum.station_freeword2',
		'HospitalDatum.station_freeword3',
		'HospitalDatum.insert_from',
		'HospitalDatum.geo_get_flg',
		'HospitalDatum.last_geo_get_date',
		'HospitalDatum.geo_get_error',
		'HospitalDatum.nightshift_system',
		'HospitalDatum.work_system',
		'HospitalDatum.working_hours_holiday',
		'HospitalDatum.overtime',
		'HospitalDatum.holiday_average',
		'HospitalDatum.vacation_acquiring_rate',
		'HospitalDatum.maternity_leave',
		'HospitalDatum.salary_model',
		'HospitalDatum.parttime_price',
		'HospitalDatum.nightshift_price',
		'HospitalDatum.access1',
		'HospitalDatum.access2',
		'HospitalDatum.access3',
		'HospitalDatum.private_car',
		'HospitalDatum.housing_allowance',
		'HospitalDatum.nursery',
		'HospitalDatum.medical_record',
		'HospitalDatum.featured_subject',
		'HospitalDatum.dialysis',
		'HospitalDatum.business_content',
		'HospitalDatum.station_pref_cd1',
		'HospitalDatum.station_line_cd1',
		'HospitalDatum.station_n_cd1',
		'HospitalDatum.station_pref_cd2',
		'HospitalDatum.station_line_cd2',
		'HospitalDatum.station_n_cd2',
		'HospitalDatum.station_pref_cd3',
		'HospitalDatum.station_line_cd3',
		'HospitalDatum.station_n_cd3',
		'HospitalDatum.work_system_checks',
		'HospitalDatum.holiday_checks',
		'HospitalDatum.housing_allowance_checks',
		'HospitalDatum.nursery_checks',
		'HospitalDatum.private_car_checks',
		'HospitalDatum.medical_record_checks',
		'HospitalDatum.dialysis_checks',
		'HospitalDatum.item_for_interview',
		'HospitalDatum.place_for_interview',
		'HospitalDatum.ope_count',
		'HospitalDatum.emergency_count',
		'HospitalDatum.founding_year',
		'HospitalDatum.new_hospital_flag',
		'HospitalDatum.eval_organization_certified_flag',
		'HospitalDatum.specific_function_mark_flag',
		'HospitalDatum.clinical_training_mark_flag',
		'HospitalDatum.area_medical_support_mark_flag',
		'HospitalDatum.disaster_post_flag',
		'HospitalDatum.critical_care_center_flag',
		'HospitalDatum.cancer_care_post_flag',
		'HospitalDatum.alleviation_care_flag',
		'HospitalDatum.emergency_announcement',
		'HospitalDatum.medical_care_am',
		'HospitalDatum.medical_care_pm',
		'HospitalDatum.medical_care_etc',
		'HospitalDatum.non_consultation_day',
		'HospitalDatum.posting_flag',
		'HospitalDatum.norh_flag',
		'HospitalDatum.headquarter_flg',
		'HospitalDatum.treatment_subject_freeword',
		'HospitalDatum.sickbed_etc',
		'HospitalDatum.access',
		'HospitalDatum.nurse_count',
		'HospitalDatum.nurse_quinquennial',
		'HospitalDatum.education_system_ko',
		'HospitalDatum.nurse_turnover_rate',
		'HospitalDatum.avg_hospital_days',
		'HospitalDatum.updated_by_ko_flag',
		'HospitalDatum.issuance_flag',
		'HospitalDatum.rank_of_approaching_hospital',
		'HospitalDatum.rw_id',
		'HospitalDatum.outline',
		'HospitalDatum.subject',
		'HospitalDatum.feature_1',
		'HospitalDatum.feature_t_1',
		'HospitalDatum.feature_2',
		'HospitalDatum.feature_t_2'
		);
    
    /**
     * update postCode
     *
     * @method updatePostCode
     * @param 
     * @return void
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function updatePostCode()
    {
        APP::import("Model", array(
            "RecruitingDatum",
            "MsPrefecture",
            "MsStation",
            "MsWard"
        ));
		
        $this->RecruitingDatum = new RecruitingDatum();
        $this->MsPrefecture    = new MsPrefecture();
        $this->MsStation       = new MsStation();
        $this->MsWard          = new MsWard();
		
        $r_count               = $this->RecruitingDatum->find('count');
        $h_count               = $this->find('count');
        $norh_count            = $this->find('count', array(
            'conditions' => array(
                "HospitalDatum.norh_flag" => DEFAULT_PHOTO_TARGET_FLAG
            )
        ));
		
        $this->MsWard->begin();
        $this->MsStation->begin();
        $this->MsPrefecture->begin();
		
        if (!$this->MsWard->updateAll(array(
            'MsWard.h_count' => $h_count,
            'MsWard.r_count' => $r_count,
            'MsWard.norh_count' => $norh_count
        ))) {
            $this->MsWard->rollback();
            echo __('Result : Update Error');
            return;
        }
        
        if (!$this->MsStation->updateAll(array(
            'MsStation.h_count' => $h_count,
            'MsStation.r_count' => $r_count,
            'MsStation.norh_count' => $norh_count
        ))) {
            $this->MsWard->rollback();
            echo __('Result : Update Error');
            return;
        }
		
        if (!$this->MsPrefecture->updateAll(array(
            'MsPrefecture.h_count' => $h_count,
            'MsPrefecture.r_count' => $r_count,
            'MsPrefecture.norh_count' => $norh_count
        ))) {
            $this->MsWard->rollback();
            echo __('Result : Update Error');
            return;
        }
		
        $this->MsWard->commit();
        echo __('Result : Update Success');
    }
}
