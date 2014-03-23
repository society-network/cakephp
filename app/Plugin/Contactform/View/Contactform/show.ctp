<?php
 echo $this->Html->css(array(
    '/Contactform/css/Contactform.css'
));
echo $this->Form->create('Contactform.Contactform');

echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'name')));
echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'email')));
echo $this->Form->input('Contactform.Phone', array('label' => __d('contactform', 'phone')));
echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'message')));
echo $this->Form->label('Contactform.Spamprotection', __d('contactform', 'please answer ').$calculation .' = ?');
echo $this->Form->input('Contactform.Spamprotection', array('label' => false, 'autocomplete' => 'off'));

echo $this->Form->submit(__d('contactform', 'Submit'), array('label' => __d('contactform', 'submit'), 'class' => 'btn btn-large btn-primary'));

echo $this->Form->end();