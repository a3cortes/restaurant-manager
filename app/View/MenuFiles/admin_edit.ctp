<?php 
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('PDF Menus', '/admin/menuFiles');
$this->Html->addCrumb($data['MenuFile']['name'], '#');
?>
<h5>Update <?php echo $data['MenuFile']['name']?> PDF</h5>
<div class="row">
	<?php echo $this->Form->create('MenuFile' , array('class'=>"" , 'type' => 'file'))?>
	<?php echo $this->Form->input('dir', array('type' => 'hidden')); ?>
	<?php echo $this->Form->input('id', array( "value" => $data['MenuFile']['id'] ,'type' => 'hidden')); ?>
	<div class="six columns">
		<?php echo $this->Form->input("name" , array( "label"=>false , "value" => $data['MenuFile']['name'], "placeholder" =>"Display name"))?>
		<div class="row">
	<div class="six columns">
		<?php echo $this->Form->input("path" , array("type" => "file",  "label"=>false , "placeholder" =>"Event name"))?> 
				<br />
				<a href="/files/menus/<?php echo $data['MenuFile']['path']?>"
					target="_blank"><?php echo $data['MenuFile']['path']?> </a> <i>(<?php echo $this->Tools->human_filesize($data['MenuFile']['size'])?>)
				</i>
	
	</div>
	
	<div class="six columns">
	</div>
</div>
	</div>

	<div class="six columns">

		<?php echo $this->Form->submit("Update", array("class"=>"button success small radius"))?>
	</div>

	<?php echo $this->Form->end()?>
</div>
<br />
<br />
<br />
