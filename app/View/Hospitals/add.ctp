<div class="hospitalData form">
<?php echo $this->Form->create('HospitalDatum'); ?>
	<fieldset>
		<legend><?php echo __('Add Hospital Datum'); ?></legend>
	<?php
		echo $this->Form->input('company_name');
		echo $this->Form->input('company_name_kana');
		echo $this->Form->input('hospital_name');
		echo $this->Form->input('hospital_name_kana');
		echo $this->Form->input('url');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('pref_cd');
		echo $this->Form->input('ward_cd');
		echo $this->Form->input('address');
		echo $this->Form->input('address_free');
		echo $this->Form->input('facility_form_id');
		echo $this->Form->input('employees');
		echo $this->Form->input('sickbed_kind');
		echo $this->Form->input('sickbed');
		echo $this->Form->input('sickbed_generality');
		echo $this->Form->input('sickbed_medical');
		echo $this->Form->input('nursing_standard');
		echo $this->Form->input('emergency_specification');
		echo $this->Form->input('hospital_pr');
		echo $this->Form->input('contract_presence');
		echo $this->Form->input('contract_date');
		echo $this->Form->input('introduction_commission');
		echo $this->Form->input('split');
		echo $this->Form->input('repayment_stipulation');
		echo $this->Form->input('contract_memo');
		echo $this->Form->input('status');
		echo $this->Form->input('business_id');
		echo $this->Form->input('insert_date');
		echo $this->Form->input('update_date');
		echo $this->Form->input('geo');
		echo $this->Form->input('proagent_id');
		echo $this->Form->input('history_business_id');
		echo $this->Form->input('history_status');
		echo $this->Form->input('history_date');
		echo $this->Form->input('media_id');
		echo $this->Form->input('internal_memo');
		echo $this->Form->input('search_company_name');
		echo $this->Form->input('search_company_name_kana');
		echo $this->Form->input('search_hospital_name');
		echo $this->Form->input('search_hospital_name_kana');
		echo $this->Form->input('search_sickbed');
		echo $this->Form->input('search_hospital_pr');
		echo $this->Form->input('search_contract_memo');
		echo $this->Form->input('search_address');
		echo $this->Form->input('search_internal_memo');
		echo $this->Form->input('search_address_free');
		echo $this->Form->input('catch_copy');
		echo $this->Form->input('public_hospital_pr');
		echo $this->Form->input('consultant_message');
		echo $this->Form->input('ko_last_sync_date');
		echo $this->Form->input('line_cd1');
		echo $this->Form->input('line_cd2');
		echo $this->Form->input('line_cd3');
		echo $this->Form->input('station_cd1');
		echo $this->Form->input('station_cd2');
		echo $this->Form->input('station_cd3');
		echo $this->Form->input('station_g_cd1');
		echo $this->Form->input('station_g_cd2');
		echo $this->Form->input('station_g_cd3');
		echo $this->Form->input('station_freeword1');
		echo $this->Form->input('station_freeword2');
		echo $this->Form->input('station_freeword3');
		echo $this->Form->input('insert_from');
		echo $this->Form->input('geo_get_flg');
		echo $this->Form->input('last_geo_get_date');
		echo $this->Form->input('geo_get_error');
		echo $this->Form->input('nightshift_system');
		echo $this->Form->input('work_system');
		echo $this->Form->input('working_hours_holiday');
		echo $this->Form->input('overtime');
		echo $this->Form->input('holiday_average');
		echo $this->Form->input('vacation_acquiring_rate');
		echo $this->Form->input('maternity_leave');
		echo $this->Form->input('salary_model');
		echo $this->Form->input('parttime_price');
		echo $this->Form->input('nightshift_price');
		echo $this->Form->input('access1');
		echo $this->Form->input('access2');
		echo $this->Form->input('access3');
		echo $this->Form->input('private_car');
		echo $this->Form->input('housing_allowance');
		echo $this->Form->input('nursery');
		echo $this->Form->input('medical_record');
		echo $this->Form->input('featured_subject');
		echo $this->Form->input('dialysis');
		echo $this->Form->input('business_content');
		echo $this->Form->input('reviews');
		echo $this->Form->input('impression');
		echo $this->Form->input('feature_education_system');
		echo $this->Form->input('feature_patient_layer');
		echo $this->Form->input('feature_age_group');
		echo $this->Form->input('feature_other');
		echo $this->Form->input('station_pref_cd1');
		echo $this->Form->input('station_line_cd1');
		echo $this->Form->input('station_n_cd1');
		echo $this->Form->input('station_pref_cd2');
		echo $this->Form->input('station_line_cd2');
		echo $this->Form->input('station_n_cd2');
		echo $this->Form->input('station_pref_cd3');
		echo $this->Form->input('station_line_cd3');
		echo $this->Form->input('station_n_cd3');
		echo $this->Form->input('work_system_checks');
		echo $this->Form->input('holiday_checks');
		echo $this->Form->input('housing_allowance_checks');
		echo $this->Form->input('nursery_checks');
		echo $this->Form->input('private_car_checks');
		echo $this->Form->input('medical_record_checks');
		echo $this->Form->input('dialysis_checks');
		echo $this->Form->input('item_for_interview');
		echo $this->Form->input('place_for_interview');
		echo $this->Form->input('interviewer_for_interview');
		echo $this->Form->input('details_for_interview');
		echo $this->Form->input('passing_status_for_interview');
		echo $this->Form->input('retrieve_for_interview');
		echo $this->Form->input('other_company_status');
		echo $this->Form->input('business_group');
		echo $this->Form->input('ope_count');
		echo $this->Form->input('emergency_count');
		echo $this->Form->input('founding_year');
		echo $this->Form->input('new_hospital_flag');
		echo $this->Form->input('feature_impression');
		echo $this->Form->input('hospital_reviews');
		echo $this->Form->input('eval_organization_certified_flag');
		echo $this->Form->input('specific_function_mark_flag');
		echo $this->Form->input('clinical_training_mark_flag');
		echo $this->Form->input('area_medical_support_mark_flag');
		echo $this->Form->input('disaster_post_flag');
		echo $this->Form->input('critical_care_center_flag');
		echo $this->Form->input('cancer_care_post_flag');
		echo $this->Form->input('alleviation_care_flag');
		echo $this->Form->input('emergency_announcement');
		echo $this->Form->input('medical_care_am');
		echo $this->Form->input('medical_care_pm');
		echo $this->Form->input('medical_care_etc');
		echo $this->Form->input('non_consultation_day');
		echo $this->Form->input('feature_review');
		echo $this->Form->input('posting_flag');
		echo $this->Form->input('consultant_opinion_title1');
		echo $this->Form->input('consultant_opinion1');
		echo $this->Form->input('consultant_opinion_title2');
		echo $this->Form->input('consultant_opinion2');
		echo $this->Form->input('consultant_opinion_title3');
		echo $this->Form->input('consultant_opinion3');
		echo $this->Form->input('consultant_opinion_title4');
		echo $this->Form->input('consultant_opinion4');
		echo $this->Form->input('consultant_opinion_title5');
		echo $this->Form->input('consultant_opinion5');
		echo $this->Form->input('hospital_public_relations_title1');
		echo $this->Form->input('hospital_public_relations1');
		echo $this->Form->input('hospital_public_relations_title2');
		echo $this->Form->input('hospital_public_relations2');
		echo $this->Form->input('hospital_public_relations_title3');
		echo $this->Form->input('hospital_public_relations3');
		echo $this->Form->input('hospital_public_relations_title4');
		echo $this->Form->input('hospital_public_relations4');
		echo $this->Form->input('hospital_public_relations_title5');
		echo $this->Form->input('hospital_public_relations5');
		echo $this->Form->input('hospital_pr_title');
		echo $this->Form->input('norh_flag');
		echo $this->Form->input('headquarter_flg');
		echo $this->Form->input('contract_special_exception_flg');
		echo $this->Form->input('treatment_subject_freeword');
		echo $this->Form->input('sickbed_etc');
		echo $this->Form->input('access');
		echo $this->Form->input('about_facility');
		echo $this->Form->input('about_nurse');
		echo $this->Form->input('pr_positive_info');
		echo $this->Form->input('pr_negative_info');
		echo $this->Form->input('about_feature_patient');
		echo $this->Form->input('nurse_count');
		echo $this->Form->input('about_nurse_age');
		echo $this->Form->input('nurse_quinquennial');
		echo $this->Form->input('education_system_ko');
		echo $this->Form->input('interviewers_character');
		echo $this->Form->input('interviewers_countermeasure');
		echo $this->Form->input('details_for_question');
		echo $this->Form->input('nurse_turnover_rate');
		echo $this->Form->input('avg_hospital_days');
		echo $this->Form->input('updated_by_ko_flag');
		echo $this->Form->input('issuance_flag');
		echo $this->Form->input('rank_of_approaching_hospital');
		echo $this->Form->input('rw_id');
		echo $this->Form->input('outline');
		echo $this->Form->input('subject');
		echo $this->Form->input('feature_1');
		echo $this->Form->input('feature_t_1');
		echo $this->Form->input('feature_2');
		echo $this->Form->input('feature_t_2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hospital Data'), array('action' => 'index')); ?></li>
	</ul>
</div>
