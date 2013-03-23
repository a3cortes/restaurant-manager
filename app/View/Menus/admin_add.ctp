<?php 
$this->Html->addCrumb('Menu', '#');
$this->Html->addCrumb('Online menu', '/admin/menus');
$this->Html->addCrumb('Add', '#');
?>
<?php echo $this->element("menus/lookup")?>
<h5>New menu</h5>
	<?php echo $this->Form->create('Menu',array("class"=>"custom"))?>
<div class="row">
	<div class="four columns">
			<?php echo $this->Form->input("Menu.group_id",array("options" => $menugroups ,"label"=>"Menu Group", "div" =>true))?>
	
		<?php echo $this->Form->input("Menu.name",array("label"=>"Menu Name", "div" =>false, "class"=>"oversize input-text"))?>
		<?php echo $this->Form->submit("Add", array("class" => "small success button radius", "style"=>"float:left;margin-bottom:12px"));?>
	</div>
	<div class="four columns"> 
		<?php echo $this->Form->input("Menu.desc" ,array("label"=>"Description", "div" =>false , "rows"=>4))?>
	</div>
		<div class="three columns">
			<?php echo $this->Form->input("Menu.active",array("type"=>"select", "label"=>"Published", "options" =>array("1" =>"Yes", "0"=>"No"),"div" =>false))?>
			<?php echo $this->Form->input("Menu.order", array("value"=>1, "label" =>"Display Order","class" =>"oversize input-text" ))?>
		</div>
		
</div>
	<?php echo $this->Form->end()?>
<br clear="both" />
