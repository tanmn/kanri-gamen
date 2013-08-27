<div class="span12" id="import-csv">
    <?php echo $this->Form->create(false, array('type' => 'file', 'enctype' => 'multipart/form-data')); ?>
    <div class="widget stacked">
        <div class="widget-header">
            <h3>
                <i class="icon-file"></i> Import from CSV
            </h3>
        </div><!-- /widget-header -->

        <div class="widget-content">
            <?php echo $this->Session->flash(); ?>

            <p>
                Choose a CSV file to upload.
            </p>

            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input span3">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>

                    <span class="btn btn-file">
                        <span class="fileupload-new">Select file</span>
                        <span class="fileupload-exists">Change</span>
                        <?php echo $this->Form->file('file'); ?>
                    </span>

                    <?php
                        echo $this->Form->button(
                            '<i class="icon-upload"></i> Upload CSV',
                            array(
                                'id' => 'btn_upload',
                                'class' => 'btn btn-primary',
                                'type' => 'submit',
                                'div' => false,
                                'escape' => false,
                                'data-loading-text' => 'Uploading...'
                            )
                        );
                    ?>
                </div>
            </div>

        </div><!-- /widget-content -->
    </div><!-- /widget -->
    <?php echo $this->Form->end(); ?>
</div>