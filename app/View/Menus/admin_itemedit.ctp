<?php
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Online menu', '/admin/menus');
$this->Html->addCrumb($menuitem['Menu']['name'], '/admin/menus/edit/'.$menuitem['Menu']['id']);
$this->Html->addCrumb('Edit', '#');
$this->Html->addCrumb($menuitem['MenuItem']['name'], '#');
?>
<h5>
	<?php echo $menuitem['MenuItem']['name']?>
</h5>
<div class="row">
	<?php echo $this->Form->create('MenuItem',array("class"=>"custom"))?>
	<?php echo $this->Form->hidden("MenuItem.id", array("value"=>$this->request->params['pass'][0]))?>


	<div class="six columns" style="margin-left: 0px">
		<?php echo $this->Form->input("MenuItem.menu_id",array("id"=>"customDropdown", "selected"=>$menuitem['MenuItem']['menu_id'] ,"options" => $menucats ,"label"=>"Menu category", "div" =>false,"style"=>"width:100%;display:none;"))?>
		<?php echo $this->Form->input("MenuItem.name",array("value"=>$menuitem['MenuItem']['name'] ,"label"=>"Name", "div" =>false,"style"=>"width:100%"))?>
		<?php echo $this->Form->input("MenuItem.desc" ,array("value"=>$menuitem['MenuItem']['desc'] ,"label"=>"Description", "div" =>false,"style"=>"width:100%"))?>
		<div class="row">
			<div style="float: left" class="six columns">
				<?php echo $this->Form->input("MenuItem.price1",array("value"=>$menuitem['MenuItem']['price1'] , "label"=>"Price 1"))?>
			</div>
			<div style="float: left;" class="six columns">
				<?php echo $this->Form->input("MenuItem.price2",array("value"=>$menuitem['MenuItem']['price2'] , "label"=>"Price 2"))?>
			</div>
		</div>
		<div class="row">
			<div style="float: left" class="three columns">
				<?php echo $this->Form->input("MenuItem.active",array("type"=>"select","selected"=>$menuitem['MenuItem']['active'] ,"div" =>false,"options" =>array("1" =>"Yes", "0"=>"No")))?>
			</div>
			<div style="float: left" class="six columns">
				<?php echo $this->Form->input("MenuItem.order", array("value"=>$menuitem['MenuItem']['order'],"div" =>false, "label" =>"Display Order","class" =>" small"))?>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<?php echo $this->Form->submit("Save", array("class" => "small success button radius", "style"=>"float:left;margin-right:5px;"));?>
				<?php echo $this->Form->button("Delete", array("type"=>"button","id"=>"itemdelete", "data"=>$menuitem['MenuItem']['id'] ,"class" => "small alert button radius", "style"=>""));?>
			</div>
		</div>
		<br clear="both" />
	</div>
	<div class="six columns">
		<h5>
			Recently changed items in
			<?php echo $menuitem['Menu']['name']?>
		</h5>
		<ul class="disk">
		<?php foreach($recent as $item){
		if($item['MenuItem']['id'] != $menuitem['MenuItem']['id']){
		?>
			<li><a href="/admin/menus/itemedit/<?php echo $item['MenuItem']['id']?>" class="style1"><?php echo $item['MenuItem']['name']?></a></li>
		<?php }} ?>
		</ul>
	</div>
	<?php echo $this->Form->end();?>
</div>
