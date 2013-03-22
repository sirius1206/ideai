<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ua" />

	<link href='http://fonts.googleapis.com/css?family=Scada&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" media="screen, projection" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body >
	<div id="wrap">
		<div id="header">
			<div class="container-fluid">
				<div id="logo">
					<a href="/"><img src="../../img/logo.png" width="200" ></a>
				</div>
				<div class="row-fluid">
					<nav class="span12">
						<?php
                            //chear, because we are using url rules and CMenu do not accept get params in url
                            if(isset($this->alias))$alias = $this->alias;
                            ///
                            $this->widget('zii.widgets.CMenu',array(
							'items'=>array(
								array('label'=>'Все', 'url'=>array('/site/index')),
								array('label'=>'Архів', 'url'=>array('/archive'), 'active'=>$alias=="archive"?true:false),
								array('label'=>'Ідеологія', 'url'=>array('/ideology'), 'active'=>$alias=="ideology"?true:false),
								array('label'=>'Політика', 'url'=>array('/politics/'), 'active'=>$alias=="politics"?true:false),
								array('label'=>'Культура', 'url'=>array('/culture/'), 'active'=>$alias=="culture"?true:false),
								array('label'=>'Економіка', 'url'=>array('/economics/'), 'active'=>$alias=="economics"?true:false),
								array('label'=>'Наука', 'url'=>array('/science/'), 'active'=>$alias=="science"?true:false),
								array('label'=>'Технології', 'url'=>array('/tech'), 'active'=>$alias=="tech"?true:false),
                                array('label'=>'вхід', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'linkOptions'=>array('class'=>'dashed'), 'itemOptions'=>array('class'=>'pull-right')),
                                array('label'=>'реєстрація', 'url'=>array('/site/reg'), 'visible'=>Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'pull-right ')),

								array('label'=>'вихід ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions'=>array('class'=>'dashed'), 'itemOptions'=>array('class'=>'pull-right') )
							),
						)); ?>
					</nav>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<?php echo $content; ?>
			</div>
		</div>
	
	</div>
	

	<div id="footer">
	<div class="plashka"></div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					
				</div>
			</div>
		</div>
	</div>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>

</body>
</html>
