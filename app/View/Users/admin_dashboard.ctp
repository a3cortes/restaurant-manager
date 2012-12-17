<?php
$this->Html->addCrumb('Dashboard', '#');

?>

<p>Welcome to your admin console. You can manage your menu and reservations here. </p>
<h5>Recently changed menu items</h5>
<div class="row">
	<div class="twelve columns">
	
		<table class="twelve">
	    	<thead>
				<tr>
					<th>Menu Item
					
					</th>
					<th>Price 1
					
					</th>
					<th>Price 2
					
					</th>
					<th>Description
					
					</th>
					<th>Status
					
					</th>
				</tr>
			</thead>
			
			<tbody>
			<?php foreach ($recentMenu as $menu) { ?>
			<tr>
				<td width="30%"><a href="/admin/menus/itemedit/<?php echo $menu['MenuItem']['id'] ?>"><?php echo ucfirst(
			strtolower($menu['Menu']['name'])) . " > "
			. ucfirst(strtolower($menu['MenuItem']['name'])) ?></a>
				
				</td>
				<td width="10%">
				<?php echo $this->Number
			->format($menu['MenuItem']['price1'],
					array('places' => 2, 'before' => '$ ', 'escape' => false,
							'decimals' => '.', 'thousands' => ',')); ?>
			
				
				
				</td>
				<td width="10%">
				<?php echo $this->Number
			->format($menu['MenuItem']['price2'],
					array('places' => 2, 'before' => '$ ', 'escape' => false,
							'decimals' => '.', 'thousands' => ',')); ?>
				</td>
				<td width="40%"><?php echo $menu['MenuItem']['desc'] ?>
				
				</td>
				<td width="10%"><?php echo ($menu['MenuItem']['active'] ? "Published"
			: "Unpublished") ?>
				
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<h5>Up coming reservations</h5>
<?php echo $this
		->element("reservations/list_full",
				array("reservations" => $reservations)) ?>

