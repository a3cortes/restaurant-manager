<?php 
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Online menu', '#');
?>

<?php echo $this->element("menus/lookup")?>
<h5>Current Menus</h5>
<a href="/admin/menus/groupadd" class="small success  button radius" style="margin-bottom: 2px">Add a menu group</a>
<a href="/admin/menus/add" class="small success  button radius" style="margin-bottom: 2px">Add a menu</a>
<div class="row">
	<div class="twelve columns">
	<?php foreach($menus as $group){?>
	
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr class="tblheader">
				<td>
				<h5 style="float:left;margin:0;line-height:26px;"><?php echo $group['MenuGroup']['name']?></h5> 
				<a href="/admin/menus/groupedit/<?php echo$group['MenuGroup']['id']?>" class="tiny button radius" style="margin-bottom: 2px;float:right">Edit</a>
				
				</td>
				<td># items
				
				</td>
				<td>Description
				
				</td>
				<td>Status
				
				</td>
			</tr>
			<?php foreach($group['Menu'] as $menu){?>
			<tr>
				<td width="30%"><a href="/admin/menus/edit/<?php echo $menu['id']?>"><?php echo ucfirst(strtolower($menu['name']))?></a>
				
				</td>
				<td width="10%"><?php echo $menu['menu_item_count']?>
				
				</td>
				<td width="50%"><?php echo $menu['desc']?>
				
				</td>
				<td width="10%"><?php echo ($menu['active']? "Published":"Unpublished")?>
				
				</td>
			</tr>
			<?php }?>
		</table>
<?php }?>
	</div>
</div>
