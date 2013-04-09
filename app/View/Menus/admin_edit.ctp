<?php
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Online menu', '/admin/menus');
$this->Html->addCrumb('Edit', '#');
$this->Html->addCrumb($menus['Menu']['name'], '#');
?>
<?php echo $this->element("menus/lookup")?>
<h5><?php echo $menus['Menu']['name']?> Menu</h5>
<div class="row">
	<?php echo $this->Form->create('Menu',array("class"=>"custom"))?>
	<?php echo $this->Form->hidden("Menu.id", array("value"=>$this->request->params['pass'][0]))?>
		<div class="four columns" style="margin-left: 0px">
			<?php echo $this->Form->input("Menu.name",array("value"=>$menus['Menu']['name'] ,"label"=>"Menu Name", "div" =>false,"class"=>"oversize input-text","style"=>"width:100%"))?>
			<?php echo $this->Form->submit("Save", array("class" => "small success button radius", "style"=>"float:left;margin-top:22px"));?>
			<?php echo $this->Form->button("Delete", array("id"=>"menudelete" ,"data"=>$menus['Menu']['id'] ,"type"=>"button" ,"class" => "small alert button radius", "style"=>"float:left;margin:22px 0 0 5px"));?>
		</div>
		<div class="four columns">
			<?php echo $this->Form->input("Menu.desc" ,array("value"=>$menus['Menu']['desc'] ,"label"=>"Description", "div" =>false , "rows"=>4))?>
		</div>
		<div class="three columns">

			<?php echo $this->Form->input("Menu.active",array("type"=>"select", "label"=>"Published", "selected"=>$menus['Menu']['active'] ,"options" =>array("1" =>"Yes", "0"=>"No"),"div" =>false))?>
			<?php echo $this->Form->input("Menu.order", array("value"=>$menus['Menu']['order'], "label" =>"Display Order","class" =>" oversize input-text","div" =>false,"style"=>"width:100%"))?>
		</div>

	<?php echo $this->Form->end()?>
</div>
<br clear="both" />
<h4>Items in this menu</h4>
<input type="hidden"
	value="<?php echo count($menus['MenuItem'])?>" id="itemcount" />
<?php if($menus['Menu']['active']){?>
<a href="/admin/menus/itemadd/<?php echo $menus['Menu']['id']?>"
	class="small success  button radius" style="margin-bottom: 2px">Add
	an item</a>
<?php }else{?>

<div class="error-message" style="margin-bottom: 5px">This Menu is
	unpublished, please publish it to add items</div>
<?php }?>
<div class="row">
	<div class="twelve columns">
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr class="tblheader">
				<td width="50%">Name</td>
				<td width="20%">Prices</td>
				<td width="10%">Featured?</td>
				<td width="10%">Order</td>
				<td width="10%">Status</td>
			</tr>
			<?php
			if(count($menus['MenuItem'])>0){
			foreach($menus['MenuItem'] as $items){?>

			<tr>
				<td><a href="/admin/menus/itemedit/<?php echo $items['id']?>"><?php echo ucfirst(strtolower($items['name']))?></a> <br>
				<?php echo $items['desc']?>
				</td>
				<td><?php   echo $this->Number->format($items['price1'], array(    'places' => 2,    'before' => '$ ',    'escape' => false,    'decimals' => '.',    'thousands' => ','));?>
					<br /> <?php   echo $this->Number->format($items['price2'], array(    'places' => 2,    'before' => '$ ',    'escape' => false,    'decimals' => '.',    'thousands' => ','));?>
				</td>
				<td><?php echo ($items['feature']?"Yes":"No") ?></td>
				<td><?php echo $items['order']?></td>
				<td><?php echo ($items['active']?"Published":"<span style='color:#E91C21'>Unpublished</span>") ?></td>
			</tr>
			<?php  }
}else{ ?>

			<tr>
				<td colspan="6">No items in this menu</td>
			</tr>
			<?php }?>
		</table>

	</div>
</div>
<?php echo $this->element('common/dialog') ?>