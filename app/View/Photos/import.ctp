<?php
if(!isset($hash)){
    echo $this->Element('upload');
}else{
    echo $this->Element('process');
}
?>
