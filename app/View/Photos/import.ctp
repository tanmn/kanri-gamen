<?php
if(!isset($hash)){
    echo $this->Element('upload');
}else{
    echo $this->Element('process');
}
?>
<div class="span12" id="import-csv">
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-question-sign"></i> Import from batch
            </h3>
        </div><!-- /widget-header -->

        <div class="widget-content">
            From command line window, run: <code>Console/cake photo</code>.
        </div><!-- /widget-content -->
    </div><!-- /widget -->
</div>
