<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'список статей', 'url'=>array('admin')),
);
?>

<h1>Створити нову статтю</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>