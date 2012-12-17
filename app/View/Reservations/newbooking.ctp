<div class="row">
	<div class="twelve columns">
		<h1 class="">Make a reservation</h1>
	</div>
</div>

			<?php echo $this->Form
		->create("Reservation", array("class" => "custom")) ?>
<div class="row">
	<div class="six columns">
	
	
			
			
				<?php echo $this->Form
		->input("Reservation.name",
				array("label" => false, "placeholder" => "Name")) ?>
				
				<?php echo $this->Form
		->input("Reservation.phone",
				array("label" => false, "placeholder" => "Phone")) ?>
				
				<?php echo $this->Form
		->input("Reservation.email",
				array("label" => false, "placeholder" => "Email")) ?>
				
				
				<div class="row">
	<div class="four columns">
				<?php echo $this->Form
		->input("Reservation.event_id",
				array("label" => false, "placeholder" => "",
						'type' => 'select', "options" => $data)) ?>
	
	</div>
	
	<div class="four columns">
				<?php echo $this->Form
		->input("Reservation.booking_date",
				array("label" => false, "placeholder" => "Reservation date",
						'type' => 'text')) ?>
	
	</div>
	<div class="two columns">
				<?php echo $this->Form
		->select("Reservation.booking_time_hour", $hours,
				array("empty" => false, "label" => false, 'type' => 'text')) ?>
	</div>
	<div class="two columns">
				<?php echo $this->Form
		->select("Reservation.booking_time_min", $mins,
				array("empty" => false, "label" => false, 'type' => 'text')) ?>
	
	</div>
</div>
				<?php echo $this->Form
		->input("Reservation.group_size",
				array("label" => false, "placeholder" => "Group size")) ?>				
				
				<?php echo $this->Form
		->input("Reservation.comments",
				array("label" => false, "placeholder" => "Additional details")) ?>
				
				<?php echo $this->Form
		->submit("Send Reservation",
				array("label" => false, "class" => "button small")) ?>
				
				
	</div>
	<div class="six columns">

	<div class="row">
	<div class="twelve columns">
		<h5>Upcoming events</h5>
		<?php foreach ($events as $event) { ?>
		<article  itemscope itemtype="http://schema.org/Event">
		<div class="row">
		
			<div class="twelve columns">
				<span itemprop="name" ><a class="" href=
				<?php if(!empty($event['Event']['path'] )){?>
				"/files/events/<?php echo $event['Event']['path'] ?>"
				<?php }else{ echo "#"; }?>
				 target="_blank">
				<b><?php echo $event['Event']['name'] ?></b></a></span>
				<br>
						<span  itemprop="startDate" content="<?php echo date(
			'Y-m-d\TH:i', strtotime($event['Event']['event_date'])) ?>">
				<?php echo date('l \t\h\e jS M, g:i a',
			strtotime($event['Event']['event_date'])) ?>
			</span>
			</div>
	
		</div>
			
		<div class="row" >
			<div class="twelve columns" itemprop="description">
				<p><?php echo $event['Event']['details'] ?></p>
			</div>
		</div>
		<br>
		
		<div  itemprop="location" itemscope itemtype="http://schema.org/Place">
					<div  itemprop="url" href="contact-us.html">
					</div>
					<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<span itemprop="addressLocality" style="display:none">Geln Waverley</span>
     										<span itemprop="addressRegion" style="display:none">VIC</span>
					</div>
		</div>					
			</article>
		<?php } ?>
	</div>
	</div>
	</div>
</div>
			<?php echo $this->Form->end() ?>	
			<div class="row">
	<div class="twelve columns">
	<?php echo $this->Session->flash() ?>
	</div>
</div>		
<script>

$(function(){

	$("#ReservationBookingDate").datepicker("option", "dateFormat", "yy/mm/dd");
})

</script>