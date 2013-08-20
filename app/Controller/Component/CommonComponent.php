<?php

/**
 * Leverages Vietnam Co., Ltd
 *
 * @author             Nguyen Ngoc Thai
 * @date created       2013/08/20
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
        // open the file
        $handle = fopen($filename, "r");
        $data = array();
        $header = fgetcsv($handle);
        $data[] = $header;
        while (($row = fgetcsv($handle)) !== FALSE) {
            $data[] = $row;
        }
        fclose($handle);
        App::uses('File', 'Utility');
        $file = new File($filename);
        $file->delete();
        return $data;
    }

}