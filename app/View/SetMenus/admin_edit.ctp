<?php 
$this->Html->addCrumb('Menu', '#');
$this->Html->addCrumb('Set Menus', '/admin/SetMenus');
$this->Html->addCrumb('Edit', '#');
?>

<h5>Edit Set Menu : <?php echo $this->request->data['SetMenu']['menu_name'] ?></h5>
	<?php echo $this->Form->create('SetMenu',array("class"=>"custom"))?>

	<div class="row" >
		<div class="eight columns" >
			<?php echo $this->Form->input('menu_name'); ?>
		</div> <!-- End #name -->
		<div class="two columns" >
			<?php echo $this->Form->input("active",array("type"=>"select", "label"=>"Published", "options" =>array("1" =>"Yes", "0"=>"No"),"div" =>false))?>
		</div> <!-- End #name -->
	
		<div class="two columns">
			<?php echo $this->Form->input('price'); ?>
		</div> <!-- End #name -->
	</div>
	<div class="row" >
		<div class="twelve columns" >
				<?php echo $this->Form->input('menu_details',array('rows' => 15));	?>
		</div>
	</div>
	<div class="row" >
		<div class="twelve columns" >
			<br />
				<?php echo $this->Form->submit("Update", array("class" => "small success button radius"));?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>
<?php echo $this->element('ckeditor', array('field' => 'SetMenuMenuDetails')) ?>