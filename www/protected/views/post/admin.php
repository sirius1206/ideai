<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);


$this->menu=array(
	array('label'=>'користувачі', 'url'=>array('/user/admin')),
	array('label'=>'нова стаття', 'url'=>array('create'), 'linkOptions'=>array('class'=>'btn')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#post-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список статей</h1>


<?php echo CHtml::link('Додатковий пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
    $filter = false;
    if (Yii::app()->user->model->role=='autor') {
        $filter = Yii::app()->user->model->id;
        $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'post-grid',
            'cssFile'=>false,
            'dataProvider'=>$model->search($filter),
            'itemsCssClass'=>'table table-bordered',
            'columns'=>array(
                array(
                    'name'=>'created',
                    'header'=>'Створено',
                    'value'=>'date("H:i d.m.Y", strtotime($data->created))',
                ),            array(
                    'name'=>'Заголовок',
                    'value'=>'$data->title',
                ),
                array(
                    'header'=>'Заголовок',
                    'name'=>'title',
                    'value'=>'$data->tag',
                ),
                /*
                'rating',
                'rating_plus',
                'rating_minus',
                'cid',
                'created',
                */
                array(
                    'class'=>'CButtonColumn',
                ),
            ),
        ));
    }else
        $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'post-grid',
            'cssFile'=>false,
            'dataProvider'=>$model->search($filter),
            //'htmlOptions'=>array('class'=>'table table-bordered'),
            'itemsCssClass'=>'table table-bordered',
            //'filter'=>$model,
            'columns'=>array(
                array(
                    'name'=>'created',
                    'header'=>'Створено',
                    'value'=>'date("H:i d.m.Y", strtotime($data->created))',
                ),
                array(
                    'name'=>'uid',
                    'header'=>'Автор',
                    'value'=>'$data->autor->username',
                ),
                array(
                    'header'=>'Заголовок',
                    'name'=>'title',
                    'value'=>'$data->title',
                ),
                array(
                    'name'=>'Закладки',
                    'value'=>'$data->tag',
                ),
                /*
                'rating',
                'rating_plus',
                'rating_minus',
                'cid',
                */
                array(
                    'class'=>'CButtonColumn',
                ),
            ),
        ));



        ?>
