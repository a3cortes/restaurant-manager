<div class="row">
	<div class="twelve columns">
	<h4>Set Menus</h4>
	</div>
</div>

<?php foreach($setMenus as $menu){ ?>
	<div class="row">
		<div class="twelve columns">
			<div class='panel'>
			<h5><?php echo ($menu['SetMenu']['menu_name'])?></h5>
			<h6><?php echo CakeNumber::currency($menu['SetMenu']['price'], 'USD') ?></h6>
			<?php
				if($menu['SetMenu']['group_size'] > 0)
				{
					echo "Minimum " . $menu['SetMenu']['group_size'] . " people per group";
				}
			?>
			<p>
				<?php echo ($menu['SetMenu']['menu_details'])?>
			</p>
		</div>
		</div>
	</div>
<?php } ?>
