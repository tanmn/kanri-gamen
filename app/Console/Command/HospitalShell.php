<?php

/**
 *
 *
 * @author      Nguyen Ngoc Thai
 * @since       2013/08/20
 * @package     app.Console.Command
 */
class HospitalShell extends AppShell {

    /**
     * Shell run  update postCode
     *
     * @method main
     * @param
     * @return void
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    public function main() {
        $this->out(__d('cake_console', 'Please Wait ........ '));

        APP::import("Model", array(
            'HospitalDatum',
            "RecruitingDatum",
            "MsPrefecture",
            "MsStation",
            "MsWard"
        ));

        $this->RecruitingDatum = new RecruitingDatum();
        $this->HospitalDatum = new HospitalDatum();
        $this->MsPrefecture = new MsPrefecture();
        $this->MsStation = new MsStation();
        $this->MsWard = new MsWard();

        $r_count = $this->RecruitingDatum->find('count');
        $h_count = $this->HospitalDatum->find('count');
        $norh_count = $this->HospitalDatum->find('count', array(
            'conditions' => array(
                "HospitalDatum.norh_flag" => DEFAULT_PHOTO_TARGET_FLAG
            )
        ));

        $this->MsWard->begin();

        if (!$this->MsWard->updateAll(array(
			'MsWard.h_count' => $h_count,
			'MsWard.r_count' => $r_count,
			'MsWard.norh_count' => $norh_count
		))) {
            $this->MsWard->rollback();
            $this->out(__d('cake_console', 'Result : Update Error'));
            return;
        }

        if (!$this->MsStation->updateAll(array(
			'MsStation.h_count' => $h_count,
			'MsStation.r_count' => $r_count,
			'MsStation.norh_count' => $norh_count
		))) {
            $this->MsWard->rollback();
            $this->out(__d('cake_console', 'Result : Update Error'));
            return;
        }

        if (!$this->MsPrefecture->updateAll(array(
			'MsPrefecture.h_count' => $h_count,
			'MsPrefecture.r_count' => $r_count,
			'MsPrefecture.norh_count' => $norh_count
		))) {
            $this->MsWard->rollback();
            $this->out(__d('cake_console', 'Result : Update Error'));
            return;
        }

        $this->MsWard->commit();
        $this->out(__d('cake_console', 'Result : Update Success'));
    }

}