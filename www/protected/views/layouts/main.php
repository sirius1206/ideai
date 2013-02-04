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

<body>
	<div id="wrap">
		<div id="header">
			<div class="container">
				<div id="logo">
					<a href="/"><img src="img/logo.png" ></a>
				</div>
				<div class="row-fluid">
					<nav class="span12">
						<?php $this->widget('zii.widgets.CMenu',array(
							'items'=>array(
								array('label'=>'Головна', 'url'=>array('/site/index')),
								array('label'=>'Про проект', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Контакти', 'url'=>array('/site/contact')),
								array('label'=>'Вхід', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Вихід ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
							),
						)); ?>
					</nav>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row-fluid">
				<?php echo $content; ?>
			</div>
		</div>
	
	</div>
	

	<div id="footer">
	<div class="plashka"></div>
		<div class="container">
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
