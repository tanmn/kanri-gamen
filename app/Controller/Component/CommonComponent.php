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
     * Read CSV to Associative Array
     *
     * @method csv2array
     * @param  string $filepath
     * @return array
     * @author Mai Nhut Tan
     * @since 2013-08-29
     */
    function csv2assocArray($filepath) {
        //read csv to array
        $array = $this->csv2array($filepath);

        //get header
        $header = array_shift($array);

        //new output
        $output = array();

        foreach($array as $data){
            $new_data = array();

            foreach($header as $i => $column_name){
                $new_data[$column_name] = @$data[$i];
            }

            $output[] = $new_data;
        }

        return $output;
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
            while (($data = fgetcsv($handle, 0, ',', '"')) !== FALSE) {
                $output[] = $data;
            }
            fclose($handle);
        }

        return $output;
    }

    /**
     * Extend $default array by new values of $optional array
     *
     * @method csv2array
     * @param  array $default
     * @param  array $optional
     * @return array
     * @author Mai Nhut Tan
     * @since  2013-08-29
     */
    function array_extend($default = array(), $optional = array()){
        foreach($optional as $k => $v){
            if(array_key_exists($k, $default)){
                if($v == '\N') $v = NULL;

                $default[$k] = $v;
            }
        }

        return $default;
    }


    /**
     * Array 2 CSV
     *
     * @method array2csv
     * @param  array $headers
     * @param  array $data
     * @return string
     * @author Mai Nhut Tan
     * @since 2013-08-29
     */
    function array2csv($headers = array(), $data = array()) {
        $output = '';

        //generate temporary file
        $filepath = tempnam(sys_get_temp_dir(), 'CSV');

        //open for writing
        if (($handle = fopen($filepath, 'w')) !== FALSE) {
            //write header
            if(!empty($headers)){
                fputcsv($handle, $headers, ',', '"');
            }

            //write data
            foreach($data as $row){
                fputcsv($handle, $row, ',', '"');
            }

            fclose($handle);

            //get contents
            $output = file_get_contents($filepath);

            //delete temporary file
            unlink($filepath);
        }

        return $output;
    }

}