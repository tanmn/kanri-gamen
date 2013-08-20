<?php

/**
 * Leverages Vietnam Co., Ltd
 *
 * @author             Truong Minh Hai
 * @date created       12/17/2012
 * @modified by
 * @date modified
 *
 */
class CommonComponent extends Component {

    /**
     * read file csv
     *
     * @method convertCsvFileDefault
     * @param  pathfile
     * @return null
     * @author Ngoc Thai
     * @since 2013-08-20
     */
    function convertCsvFileDefault($filename, $convert_encoding = true) {
        $data = array();
        $dataCsv = file($filename);
        $n = count($dataCsv);
        for ($i = 0; $i < $n; ++$i) {
            if ($convert_encoding) {
                $tmp = mb_convert_encoding($dataCsv[$i], "UTF-8", "SJIS-win");
                $data[] = explode(',', $tmp);
            } else {
                $data[] = explode(',', $dataCsv[$i]);
            }
        }
        App::uses('File', 'Utility');
        $file = new File($filename);
        $file->delete();
        return $data;
    }

}