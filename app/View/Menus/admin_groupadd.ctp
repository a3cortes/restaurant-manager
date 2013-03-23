<?php 
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Online menu', '/admin/menus');
$this->Html->addCrumb('Add Group', '#');
?>
<?php echo $this->element("menus/lookup")?>
<h5>New menu group</h5>
<div class="row">
	<?php echo $this->Form->create('MenuGroup',array("class"=>"nice"))?>
	<div class="six columns">

		<?php echo $this->Form->input("MenuGroup.name",array("placeholder"=>"Menu Group Name", "label" => false, "div" =>false, "class"=>"oversize input-text", "style"=>"width:100%"))?>
	</div>
	<div class="six columns">
		<?php echo $this->Form->submit("Add", array("class" => "small success button radius", "style"=>"float:left;margin-bottom:12px"));?>
	</div>
	<?php echo $this->Form->end()?>
</div>
<div class="row">
	<div class="twelve columns" style="margin-left: 0px">
		<h5>Current Groups</h5>
		<ul class="link-list">
			<?php foreach($menugroups as $k=>$v){
				?>
			<li><a href="/admin/menus/itemedit/<?php echo $k?>" class="style1"><?php echo $v?>
			</a>
			</li>
			<?php } ?>
		</ul>

	</div>


</div>
