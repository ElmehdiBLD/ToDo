<?php
echo validation_errors();
echo form_open(base_url('ToDo/add'));
echo form_label('ordre','ordre');
echo form_input('ordre',set_value('ordre',0));
echo form_label('tache');
echo form_input('task',set_value('task','saisir nouvelle tache'));

echo form_submit('ajout','ajouter');
echo form_close();
