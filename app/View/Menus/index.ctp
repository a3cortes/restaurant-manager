<div class="row">
	<div class="twelve columns">
	<div class="radius panel">
	<h6>PDF Menus		</h6>
					<ul class="link-list">
						<?php foreach($pdfs as $pdf){?>
							<li><a href="/files/menus/<?php echo $pdf['MenuFile']['path']?>" target="_blank"><?php echo $pdf['MenuFile']['name']?></a></li>
						<?php }?>
					</ul>
	</div>
	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<h4><?php echo $group['MenuGroup']['name']?></h4>
		
		<?php foreach($menus as $menu){ ?>
		<div class="panel radius">
			<h5><?php echo Inflector::humanize($menu['Menu']['name'])?></h5>
			<?php if(!empty($menu['Menu']['desc'])){?>
					<p>
						<?php echo Inflector::humanize($menu['Menu']['desc'])?>
					</p>
			<?php }?>
			<?php foreach($menu['MenuItem'] as $item) {?>
				
				<div class="row">
					<div class="ten columns">
						<?php echo Inflector::humanize( $item['name'])?>
						<?php echo Inflector::humanize( $item['desc'])?>
					</div>
					<div class="one columns">
							<?php if($item['price2'] > 0){
								echo $item['price2'];
							}?>
					</div>
					<div class="one columns">
					<?php if($item['price1'] > 0){
								echo $item['price1'];
							}?>
					</div>
				</div>
				<br clear="all" />
			<?php }?>
		</div>
		<?php }?>
		
		
					
					
	</div>
</div>

