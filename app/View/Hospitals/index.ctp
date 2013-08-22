<div class="hospitalData index">
	<h2><?php echo __('Hospital Data'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('hospital_name'); ?></th>
			<th><?php echo $this->Paginator->sort('hospital_name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('zip_code'); ?></th>
			<th><?php echo $this->Paginator->sort('pref_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('ward_cd'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('address_free'); ?></th>
			<th><?php echo $this->Paginator->sort('facility_form_id'); ?></th>
			<th><?php echo $this->Paginator->sort('employees'); ?></th>
			<th><?php echo $this->Paginator->sort('sickbed_kind'); ?></th>
			<th><?php echo $this->Paginator->sort('sickbed'); ?></th>
			<th><?php echo $this->Paginator->sort('sickbed_generality'); ?></th>
			<th><?php echo $this->Paginator->sort('sickbed_medical'); ?></th>
			<th><?php echo $this->Paginator->sort('nursing_standard'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_specification'); ?></th>
			<th><?php echo $this->Paginator->sort('contract_presence'); ?></th>
			<th><?php echo $this->Paginator->sort('contract_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('insert_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_date'); ?></th>
			<th><?php echo $this->Paginator->sort('geo'); ?></th>
			<th><?php echo $this->Paginator->sort('proagent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('history_business_id'); ?></th>
			<th><?php echo $this->Paginator->sort('history_status'); ?></th>
			<th><?php echo $this->Paginator->sort('history_date'); ?></th>
			<th><?php echo $this->Paginator->sort('media_id'); ?></th>
			<th><?php echo $this->Paginator->sort('internal_memo'); ?></th>
			<th><?php echo $this->Paginator->sort('search_company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('search_company_name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('search_hospital_name'); ?></th>
			<th><?php echo $this->Paginator->sort('search_hospital_name_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('search_sickbed'); ?></th>
			<th><?php echo $this->Paginator->sort('search_address'); ?></th>
			<th><?php echo $this->Paginator->sort('search_internal_memo'); ?></th>
			<th><?php echo $this->Paginator->sort('search_address_free'); ?></th>
			<th><?php echo $this->Paginator->sort('ko_last_sync_date'); ?></th>
			<th><?php echo $this->Paginator->sort('line_cd1'); ?></th>
			<th><?php echo $this->Paginator->sort('line_cd2'); ?></th>
			<th><?php echo $this->Paginator->sort('line_cd3'); ?></th>
			<th><?php echo $this->Paginator->sort('station_cd1'); ?></th>
			<th><?php echo $this->Paginator->sort('station_cd2'); ?></th>
			<th><?php echo $this->Paginator->sort('station_cd3'); ?></th>
			<th><?php echo $this->Paginator->sort('station_g_cd1'); ?></th>
			<th><?php echo $this->Paginator->sort('station_g_cd2'); ?></th>
			<th><?php echo $this->Paginator->sort('station_g_cd3'); ?></th>
			<th><?php echo $this->Paginator->sort('station_freeword1'); ?></th>
			<th><?php echo $this->Paginator->sort('station_freeword2'); ?></th>
			<th><?php echo $this->Paginator->sort('station_freeword3'); ?></th>
			<th><?php echo $this->Paginator->sort('insert_from'); ?></th>
			<th><?php echo $this->Paginator->sort('geo_get_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('last_geo_get_date'); ?></th>
			<th><?php echo $this->Paginator->sort('geo_get_error'); ?></th>
			<th><?php echo $this->Paginator->sort('nightshift_system'); ?></th>
			<th><?php echo $this->Paginator->sort('work_system'); ?></th>
			<th><?php echo $this->Paginator->sort('working_hours_holiday'); ?></th>
			<th><?php echo $this->Paginator->sort('overtime'); ?></th>
			<th><?php echo $this->Paginator->sort('holiday_average'); ?></th>
			<th><?php echo $this->Paginator->sort('vacation_acquiring_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('maternity_leave'); ?></th>
			<th><?php echo $this->Paginator->sort('salary_model'); ?></th>
			<th><?php echo $this->Paginator->sort('parttime_price'); ?></th>
			<th><?php echo $this->Paginator->sort('nightshift_price'); ?></th>
			<th><?php echo $this->Paginator->sort('access1'); ?></th>
			<th><?php echo $this->Paginator->sort('access2'); ?></th>
			<th><?php echo $this->Paginator->sort('access3'); ?></th>
			<th><?php echo $this->Paginator->sort('private_car'); ?></th>
			<th><?php echo $this->Paginator->sort('housing_allowance'); ?></th>
			<th><?php echo $this->Paginator->sort('nursery'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_record'); ?></th>
			<th><?php echo $this->Paginator->sort('featured_subject'); ?></th>
			<th><?php echo $this->Paginator->sort('dialysis'); ?></th>
			<th><?php echo $this->Paginator->sort('business_content'); ?></th>
			<th><?php echo $this->Paginator->sort('station_pref_cd1'); ?></th>
			<th><?php echo $this->Paginator->sort('station_line_cd1'); ?></th>
			<th><?php echo $this->Paginator->sort('station_n_cd1'); ?></th>
			<th><?php echo $this->Paginator->sort('station_pref_cd2'); ?></th>
			<th><?php echo $this->Paginator->sort('station_line_cd2'); ?></th>
			<th><?php echo $this->Paginator->sort('station_n_cd2'); ?></th>
			<th><?php echo $this->Paginator->sort('station_pref_cd3'); ?></th>
			<th><?php echo $this->Paginator->sort('station_line_cd3'); ?></th>
			<th><?php echo $this->Paginator->sort('station_n_cd3'); ?></th>
			<th><?php echo $this->Paginator->sort('work_system_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('holiday_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('housing_allowance_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('nursery_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('private_car_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_record_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('dialysis_checks'); ?></th>
			<th><?php echo $this->Paginator->sort('item_for_interview'); ?></th>
			<th><?php echo $this->Paginator->sort('place_for_interview'); ?></th>
			<th><?php echo $this->Paginator->sort('ope_count'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_count'); ?></th>
			<th><?php echo $this->Paginator->sort('founding_year'); ?></th>
			<th><?php echo $this->Paginator->sort('new_hospital_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('eval_organization_certified_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('specific_function_mark_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('clinical_training_mark_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('area_medical_support_mark_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('disaster_post_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('critical_care_center_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('cancer_care_post_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('alleviation_care_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_announcement'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_care_am'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_care_pm'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_care_etc'); ?></th>
			<th><?php echo $this->Paginator->sort('non_consultation_day'); ?></th>
			<th><?php echo $this->Paginator->sort('posting_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('norh_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('headquarter_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('treatment_subject_freeword'); ?></th>
			<th><?php echo $this->Paginator->sort('sickbed_etc'); ?></th>
			<th><?php echo $this->Paginator->sort('access'); ?></th>
			<th><?php echo $this->Paginator->sort('nurse_count'); ?></th>
			<th><?php echo $this->Paginator->sort('nurse_quinquennial'); ?></th>
			<th><?php echo $this->Paginator->sort('education_system_ko'); ?></th>
			<th><?php echo $this->Paginator->sort('nurse_turnover_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('avg_hospital_days'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_by_ko_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('issuance_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('rank_of_approaching_hospital'); ?></th>
			<th><?php echo $this->Paginator->sort('rw_id'); ?></th>
			<th><?php echo $this->Paginator->sort('outline'); ?></th>
			<th><?php echo $this->Paginator->sort('subject'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_1'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_t_1'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_2'); ?></th>
			<th><?php echo $this->Paginator->sort('feature_t_2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($hospitalData as $hospitalDatum): ?>
	<tr>
		<td><?php echo h($hospitalDatum['HospitalDatum']['id']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['company_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['hospital_name']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['hospital_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['url']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['zip_code']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['pref_cd']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['ward_cd']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['address']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['address_free']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['facility_form_id']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['employees']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['sickbed_kind']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['sickbed']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['sickbed_generality']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['sickbed_medical']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nursing_standard']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['emergency_specification']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['contract_presence']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['contract_date']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['status']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['insert_date']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['geo']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['proagent_id']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['history_business_id']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['history_status']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['history_date']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['media_id']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['internal_memo']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_company_name']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_company_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_hospital_name']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_hospital_name_kana']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_sickbed']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_address']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_internal_memo']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['search_address_free']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['ko_last_sync_date']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['line_cd1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['line_cd2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['line_cd3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_cd1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_cd2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_cd3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_g_cd1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_g_cd2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_g_cd3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_freeword1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_freeword2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_freeword3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['insert_from']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['geo_get_flg']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['last_geo_get_date']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['geo_get_error']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nightshift_system']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['work_system']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['working_hours_holiday']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['overtime']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['holiday_average']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['vacation_acquiring_rate']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['maternity_leave']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['salary_model']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['parttime_price']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nightshift_price']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['access1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['access2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['access3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['private_car']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['housing_allowance']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nursery']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['medical_record']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['featured_subject']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['dialysis']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['business_content']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_pref_cd1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_line_cd1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_n_cd1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_pref_cd2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_line_cd2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_n_cd2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_pref_cd3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_line_cd3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['station_n_cd3']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['work_system_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['holiday_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['housing_allowance_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nursery_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['private_car_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['medical_record_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['dialysis_checks']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['item_for_interview']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['place_for_interview']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['ope_count']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['emergency_count']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['founding_year']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['new_hospital_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['eval_organization_certified_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['specific_function_mark_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['clinical_training_mark_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['area_medical_support_mark_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['disaster_post_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['critical_care_center_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['cancer_care_post_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['alleviation_care_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['emergency_announcement']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['medical_care_am']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['medical_care_pm']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['medical_care_etc']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['non_consultation_day']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['posting_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['norh_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['headquarter_flg']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['treatment_subject_freeword']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['sickbed_etc']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['access']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nurse_count']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nurse_quinquennial']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['education_system_ko']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['nurse_turnover_rate']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['avg_hospital_days']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['updated_by_ko_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['issuance_flag']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['rank_of_approaching_hospital']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['rw_id']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['outline']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['subject']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['feature_1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['feature_t_1']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['feature_2']); ?>&nbsp;</td>
		<td><?php echo h($hospitalDatum['HospitalDatum']['feature_t_2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hospitalDatum['HospitalDatum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hospitalDatum['HospitalDatum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hospitalDatum['HospitalDatum']['id']), null, __('Are you sure you want to delete # %s?', $hospitalDatum['HospitalDatum']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hospital Datum'), array('action' => 'add')); ?></li>
	</ul>
</div>
