<?php
echo $this->Form->create('Photo', array(
    'label' => false,
    'div' => false,
    'type' => 'file'
));
?>
<div class="fileupload fileupload-new" data-provides="fileupload">
      <span class="btn btn-file">
          <span class="fileupload-new">Select file</span>
          <span class="fileupload-exists">Change</span>
          <?php echo $this->Form->file('file'); ?>
      </span>

      <?php echo $this->Form->submit('Upload', array('class' => 'btn', 'type' => 'submit', 'div' => false)); ?>

      <span class="fileupload-preview"></span>
      <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
</div>
<?php echo $this->Form->end(); ?>