<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,

)); ?>

	<p class="note">на сторінці багато обов"язкових полів, будьте обачні</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Заголовок *'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Передній план *'); ?>
        <p class="note">передній план статті буде відображатись як обкладинка</p>
		<?php echo $form->textArea($model,'preview',array('rows'=>6, 'cols'=>50 , 'class'=>'ckeditor')); ?>
		<?php echo $form->error($model,'preview'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'Текст'); ?>
        <p class="note">Головна сторінка</p>
        <?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50 , 'class'=>'ckeditor')); ?>
        <?php echo $form->error($model,'text'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'Закладки *'); ?>
        <p class="note">кілька основних аттрибутів цієї статті, наприклад: україна, політика, фото. </p>
        <p class="note">розділені комою</p>
		<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Категорія *'); ?>
		<?php echo $form->dropDownList($model,'cid', $this->post_category_alias) ;?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Створити' : 'Зберегти', array('class'=>'btn btn-inverse btn-large')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->