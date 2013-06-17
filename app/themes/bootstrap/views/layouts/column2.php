<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('bootstrap.widgets.TbMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
	<div class="row">
		<div class="span12">
			<div id="content">
				<?php echo $content; ?>
			</div><!-- content -->
		</div>
	</div>
<?php $this->endContent(); ?>