<?php
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Online menu', '/admin/menus');
$this->Html->addCrumb('Edit Group', '#');
$this->Html->addCrumb($group['MenuGroup']['name'], '#');
?>
<?php echo $this->element("menus/lookup")?>
<h5>Edit menu group</h5>
<div class="row">
	<div class="twelve columns">

		<?php echo $this->Form->create('MenuGroup',array("class"=>"nice"))?>
		<?php echo $this->Form->hidden("MenuGroup.id", array("value"=>$this->request->params['pass'][0]))?>

		<div class="row">
			<div class="six columns">
				<?php echo $this->Form->input("MenuGroup.name",array("label"=>false, "value"=>$group['MenuGroup']['name'], "div" =>false, "class"=>"oversize input-text", "style"=>"width:100%"))?>
			</div>

			<div class="six columns">
				<?php echo $this->Form->submit("Save", array("class" => "small success button radius", "style"=>"float:left;margin-bottom:12px"));?>
				<?php echo $this->Form->button("Delete", array("type"=>"button" , "id"=>"groupdelete" ,"data"=>$group['MenuGroup']['id'], "class" => "small alert button radius", "style"=>"float:left;margin:0 0 12px 5px"));?>

			</div>
		</div>
		<?php echo $this->Form->end()?>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<h5>Menus in this group</h5>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr class="tblheader">
				<td>Menu Name

				</td>
				<td># items

				</td>
				<td>Description

				</td>
				<td>Status

				</td>
			</tr>
			<?php foreach($menus as $menu){
				?>
			<tr>
				<td width="30%"><a
					href="/admin/menus/edit/<?php echo $menu['Menu']['id']?>"><?php echo $menu['Menu']['name']?>
				</a>

				</td>
				<td width="10%"><?php echo $menu['Menu']['menu_item_count']?>

				</td>
				<td width="50%"><?php echo $menu['Menu']['desc']?>

				</td>
				<td width="10%"><?php echo ($menu['Menu']['active']? "Published":"Unpublished")?>

				</td>
			</tr>
			<?php }?>
		</table>

	</div>
</div>
<?php echo $this->element('common/dialog') ?>