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


    /**
     * Read CSV to Array
     *
     * @method csv2array
     * @param  string $filepath
     * @return array
     * @author Mai Nhut Tan
     * @since 2013-08-23
     */
    function csv2array($filepath) {
        $output = array();

        if (($handle = fopen($filepath, 'r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $output[] = $data;
            }
            fclose($handle);
        }

        return $output;
    }

}