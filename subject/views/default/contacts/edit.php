<?php
echo view::show('contacts/manage',array(
	'title'=>'Edit Contact',
	'action'=>'/contacts/processedit',
	'formid'=>'editform',
	'contact'=>$view['contact'],
	'groups'=>$view['groups'],
	'type'=>'edit'
));