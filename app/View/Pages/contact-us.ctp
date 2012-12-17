<div class="row">
	<div class="twelve columns">
		<h1 class="">Contact us</h1>
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
				
				
				<?php echo $this->Form
		->input("Reservation.comments",
				array("label" => false, "placeholder" => "Additional details")) ?>
				
				<?php echo $this->Form
		->submit("Send",
				array("label" => false, "class" => "button small")) ?>
				
				<?php echo $this->Session->flash() ?>
	</div>
	<div class="six columns">
	<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=<?php echo $this->Session->read('site_data.address'); ?>&amp;iwloc=A&amp;output=embed&amp;hl=en"></iframe>
					
	</div>
</div>
			<?php echo $this->Form->end() ?>			
<script>

$(function(){

	$("#ReservationBookingDate").datepicker("option", "dateFormat", "yy/mm/dd");
})

</script>