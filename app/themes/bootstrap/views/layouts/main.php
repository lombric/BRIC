<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
				// Disconnected
				array('label'=>Yii::t('strings', "Login"), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('strings', "Register"), 'url'=>array('/members/register'),'visible'=>Yii::app()->user->isGuest),
				// Connected
                array('label'=>Yii::t('strings', "Dashboard"), 'url'=>array('/site/dashboard'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t('strings', "Contact"), 'url'=>array('/site/contact'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t('strings', "Members"), 'url'=>array('/members/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t('strings', "Groups"), 'url'=>array('/groups/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t("strings", "Logout").' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	<br/>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by BRIC Team.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
