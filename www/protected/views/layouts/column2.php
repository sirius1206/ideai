<?php $this->beginContent('//layouts/main'); ?>

<div class="span8">
	<?php echo $content; ?>
</div>


<div class="span4">
	<?php
        if(isset(Yii::app()->user->model) && Yii::app()->user->model->role != "user"){
            $this->beginWidget('zii.widgets.CPortlet', array(
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        }
	?>
</div>

<?php $this->endContent(); ?>