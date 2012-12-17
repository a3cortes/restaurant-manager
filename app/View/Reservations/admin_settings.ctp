<?php 
$this->Html->addCrumb('Settings', '#');
$this->Html->addCrumb('Reservation settings', '#');
?>
<p>You can setup events and specials dates here. These will showup on
	the reservation page for customers to select when making a reservation</p>

<div class="row">
	<div class="twelve columns">
		<a href="/admin/reservationevents/add" class="button radius success small">Add a new event</a>
	</div>
</div>
<br>
<div class="row">
	<div class="twelve columns">

		<h5>Current events</h5>

		<?php foreach($data as $re){?>
		<div class="row row-body">
			<div class="four columns">
				<a href="/admin/ReservationEvents/edit/<?php echo $re['ReservationEvent']['id']?>"><?php echo $re['ReservationEvent']['name']?> </a>
			</div>
			<div class="two columns">
				<?php if($re['ReservationEvent']['published']){?>
					<span class="confirmed general foundicon-checkmark"></span>
				<?php }else{?>
					<span class="unconfirmed general foundicon-error"></span>
				<?php } ?>
					
			</div>
			<div class="three columns">
				<a href="/admin/ReservationEvents/delete/<?php echo $re['ReservationEvent']['id']?>" class="button alert tiny radius">Delete</a>
			</div>
			<div class="three columns">
				
			</div>
		</div>
		<?php }?>
	</div>
</div>
