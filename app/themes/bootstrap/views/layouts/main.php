<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="fr" />

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
				array('label'=>Yii::t('strings', "Login"), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('strings', "Register"), 'url'=>array('/members/register'),'visible'=>Yii::app()->user->isGuest),
				
                array('label'=>Yii::t('strings', "Dashboard"), 'url'=>array('/site/dashboard'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t('strings', "Contact"), 'url'=>array('/site/contact'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t('strings', "Members"), 'url'=>array('members/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>Yii::t('strings', "Groups"), 'url'=>array('groups/index'),'visible'=>!Yii::app()->user->isGuest),
           
                
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
		Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::t('strings', "by My Company."); ?><br/>
		<?php echo Yii::t('strings', "All Rights Reserved."); ?> <br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
