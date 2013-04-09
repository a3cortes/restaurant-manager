<?php 
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Set Menus', '#');
?>
<h5>Current Set Menus</h5>
<a href="/admin/SetMenus/add" class="small success  button radius" style="margin-bottom: 2px">Add a new set menu</a>
<div class="row">
	<div class="twelve columns">
	
	
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr class='tblHeader'>
				<td>Menu Name</td>
				<td>Price</td>
				<td>Status</td>
			</tr>
			<?php foreach($setMenus as $menu){?>
			<tr>
				<td widtd="30%"><a href="/admin/SetMenus/edit/<?php echo $menu['SetMenu']['id']?>"><?php echo ucfirst(strtolower($menu['SetMenu']['menu_name']))?></a></td>
				<td widtd="10%"><?php echo $menu['SetMenu']['price']?></td>
				<td widtd="50%"><?php echo ($menu['SetMenu']['active']? "Published":"Unpublished")?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</div>
