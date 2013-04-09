<?php echo $this->element("common/admin_header") ?>
<body>
	<div class="container">
	<div class="row">
	<div class="twelve columns">
	<h4 style="margin-bottom: 10px"><?php echo Inflector::humanize($title)?></h4>
	</div>
</div>
			<?php if ($this->params['admin']) { ?>
		<div class="row">
			<div class="six columns">

			</div>
			<div class="six columns">
				<div style="float: right; padding-top: 7px;">
					Loged in as <span class="has-tip"
						title="<?php echo $this->Session
			->read("AUser.username") ?>"><?php echo $this->Session
			->read("AUser.name") ?>
					</span>

				</div>
			</div>
		</div>
			<?php } ?>
		<?php echo $this->element('common/admin_nav') ?>
		<div class="row">

			<div class="twelve columns">
				<?php if ($this->params['admin']) { ?>
							<?php echo $this->Html
													->getCrumbList(array("class" => "breadcrumbs"));
							?>
				<?php } ?>
			</div>

		</div>
			<div class="row">
					<div class="twelve columns">
						<?php echo $this->Session->flash(); ?>
					</div>
				</div>
		<div class="row">
			<div class="twelve columns">

				<?php echo $this->fetch("content") ?>
			</div>
		</div>

	<?php echo $this->element("common/admin_footer") ?>
	</div>

</body>
