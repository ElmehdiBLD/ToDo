<?php
echo validation_errors();
echo form_open(base_url('ToDo/update'));
echo form_label('ordre','ordre');
echo form_input('ordre',set_value('ordre',0));
echo form_label('tache');
echo form_input('task',set_value('task','saisir la modification de la tache'));

echo form_submit('modifier','modifier');
echo form_close();
