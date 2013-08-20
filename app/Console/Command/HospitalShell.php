<?php

/* * *********************************************
  /**** Class_name     : ReminderShell
  /**** Extends        : AppShell
  /**** Author         : Thai Thanh Duoc
  /**** Created_date   : 2013-05-28
 * ********************************************* */

class HospitalShell extends AppShell {

    public function main() {
        App::import('Model', array('HospitalDatum'));
        $this->HospitalDatum = new HospitalDatum();
        $this->HospitalDatum->updatePostCode();
    }

}