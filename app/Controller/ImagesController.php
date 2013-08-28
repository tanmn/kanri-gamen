<?php

App::uses('AppController', 'Controller');

/**
 * Image optimization
 *
 * @author      Mai Nhut Tan
 * @since       2103-08-22
 * @package     app.Controller
 */
class ImagesController extends AppController {
    var $name = 'Image';
    var $uses = array();

    public function thumb($width, $height) {
        $this->autoLayout = false;
        $this->autoRender = false;

        $path = str_replace('/', DS, $this->_getPath());
        $cache = SAVED_THUMB_PATH . $width . 'x' . $height . '_' . str_replace(DS, '_', $path);
        $fullpath = SAVED_PHOTO_DIR . $path;

        if(empty($width) || empty($height) || !file_exists($fullpath)){
            throw new NotFoundException(__('Not found'));
        }

        if(file_exists($cache)){
            self::_output($cache);
        }else{
            App::import('Vendor', 'ImageTool');

            $options = array(
                'compression' => 5,
                'keepRatio' => true,
                'paddings' => false,
                'enlarge' => true,
                'quality' => 50,
                'chmod' => 0644,
                'units' => 'px',
                'height' => $height,
                'output' => $cache,
                'width' => $width,
                'input' => $fullpath,
                'crop' => true
            );

            ImageTool::resize($options);
            self::_output($cache);
        }
    }

    /**
     * Output image to browser
     */
    private function _output($filename){
        $size = getimagesize($filename);
        $mime = $size['mime'];
        $data = file_get_contents($filename);

        header("Content-type: $mime");
        header('Content-Length: ' . strlen($data));
        echo $data;
        exit();
    }

    /**
     * Get the url from the 3rd parameters
     */
    private function _getPath() {
        $params = $this->params['pass'];

        // init
        $url = '';

        // unset unwanted params
        unset($params[0], $params[1]);

        // loop through params
        foreach($params as $p) {
            $url .= $p . DS;
        }

        // remove last slash
        $url = substr($url, 0, strrpos($url, DS));

        return $url;
    }
}
?>