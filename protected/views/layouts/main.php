<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection"/>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="headerContainer">
		<div id="header">
			<div id="logo"></div>
			<div id="contacUs">
				<p>
				CALL US NOW!<br>
				+381 11 3942 952<br>
				office@cvetex.rs
				</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="navContainer">
		<div id="mainMbMenu">
			<?php $this->widget('application.extensions.mbmenu.MbMenu', array(
				'items' => array(
					array('label' => 'Home', 'url' => array('/site/index')),
					array('label' => '3D Kit Designer',
					      'items' => array(
						      array('label' => 'Football',
						            'items' => array(
							            array('label' => 'Male', 'url' => array('/selection/catalogue', 'sportId' => '3')),
							            array('label' => 'Female', 'url' => array('/selection/catalogue', 'sportId' => '3')),
						            ),
						      ),
						      array('label' => 'Basketball',
						            'items' => array(
							            array('label' => 'Male', 'url' => array('/selection/catalogue', 'sportId' => '4')),
							            array('label' => 'Female', 'url' => array('/selection/catalogue', 'sportId' => '4')),
						            ),
						      ),
					      ),
					),
					array('label' => 'Reference', 'url' => array('/site/index')),
					array('label' => 'About Us', 'url' => array('/site/index')),
					array('label' => 'Contact', 'url' => array('/site/contact'),
					      'items' => array(
						      array('label' => 'sub 1 contact'),
						      array('label' => 'sub 2 contact'),
					      ),
					),
					array('label' => 'Test',
					      'items' => array(
						      array('label' => 'Sub 1', 'url' => array('/site/page', 'view' => 'sub1')),
						      array('label' => 'Sub 2',
						            'items' => array(
							            array('label' => 'Sub sub 1', 'url' => array('/site/page', 'view' => 'subsub1')),
							            array('label' => 'Sub sub 2', 'url' => array('/site/page', 'view' => 'subsub2')),
						            ),
						      ),
					      ),
					),
				),
			)); ?>
		</div>
	</div>
	<div id="slideShowContainer">
		<div id="slideShow"></div>
	</div>
	<!-- mainmenu -->
	<?php if (isset($this->breadcrumbs)): ?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div id="contentContainer">
		<?php echo $content; ?>
		<div class="clear"></div>
	</div>

	<div class="clear"></div>

	<div id="footerContainer">
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by Cvetex.<br/>
			All Rights Reserved.
		</div>
		<!-- footer -->
	</div>

</div>
<!-- page -->

</body>
</html>
