<?php

echo $this->Form->create('Photo', array(
    'label' => false,
    'div' => false,
    'type' => 'file',
    'error' => false,
));
echo $this->Form->file('file');
echo $this->Form->error('file');
echo $this->Form->submit('Upload');
echo $this->Form->end();
?>
