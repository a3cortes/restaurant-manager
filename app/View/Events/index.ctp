<div class="row">
	<div class="twelve columns">
		<h3>Upcoming events at <?php echo Inflector::humanize($this->Session->read("site_data.name")) ?></h3>
		<?php foreach ($events as $event) { ?>
	<div class="panel">
		<article  itemscope itemtype="http://schema.org/Event">
		<div class="row">
		
			<div class="eight columns">
				<h4 itemprop="name"><?php echo $event['Event']['name'] ?></h4>
			</div>
			<div class="four columns" itemprop="startDate" content="<?php echo date(
			'Y-m-d\TH:i', strtotime($event['Event']['event_date'])) ?>">
				<?php echo date('l \t\h\e jS M, g:i a',
			strtotime($event['Event']['event_date'])) ?>
			</div>
		</div>
			
		<div class="row" >
			<div class="twelve columns" itemprop="description">
				<?php echo $event['Event']['details'] ?>
			</div>
		</div>
		<br>
		<?php if(!empty($event['Event']['path'] )){?>
		<div class="row">
			<div class="twelve columns">
			<a class="button small radius secondary" href="/files/events/<?php echo $event['Event']['path'] ?>" target="_blank">Download</a>
			</div>
		</div>
		<?php }?>
		<div  itemprop="location" itemscope itemtype="http://schema.org/Place">
					<div  itemprop="url" href="contact-us.html">
					</div>
					<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<span itemprop="addressLocality" style="display:none">Geln Waverley</span>
     										<span itemprop="addressRegion" style="display:none">VIC</span>
					</div>
		</div>					
			</article>
			</div>
		<?php } ?>
	</div>
	</div>
