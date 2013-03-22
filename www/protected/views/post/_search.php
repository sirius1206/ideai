<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id автора'); ?>
		<?php echo $form->textField($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Заголовок'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
	</div>

    <div class="row">
        <?php echo $form->label($model,'Передній план'); ?>
        <?php echo $form->textArea($model,'preview',array('rows'=>6, 'cols'=>50)); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'Тест'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'Закладка'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>128)); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'Категорія *'); ?>
        <?php echo $form->dropDownList($model,'cid', $this->post_category_alias) ;?>
        <?php echo $form->error($model,'cid'); ?>
    </div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->