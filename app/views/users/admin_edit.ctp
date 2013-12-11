<?php 
$pageTitle = __("page.edituser",true)." ".$this->data['User']['username'];
$this->set('title_for_layout', $pageTitle);
?>

<h2><?=$pageTitle?></h2>

<?
echo $form->create('User', array("action"=>"save") );
echo $form->hidden('id');
echo $form->input('username', array('label'=>__('user.label.username',true)));
echo $form->input('email', array('label'=>__('user.label.email',true)));
echo $form->input('password', array('label'=>__('user.label.password',true)));
echo $form->input('admin', array('label'=>__('user.label.admin',true)));
echo $form->submit(__('action.submit',true));
echo $form->end();
?>
