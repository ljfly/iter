<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'Hello Jeffery',
);
?>
<h3><?php echo $time; ?></h3>
<p><?php echo CHtml::link("Goodbye! me", array('message/bye')); ?></p>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
