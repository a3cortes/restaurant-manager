<?php 
$this->Html->addCrumb('Reservations', '#');
?>

<?php echo $this->element("reservations/lookup")?>
<h5>Up coming reservations</h5>

<?php echo $this->element("reservations/list_full",array("reservations" => $reservations))?>
<?php echo $this->element("common/paginate")?>
<hr />
<div class="row">
	<div class="six columns">
		<h5>
			Todays reservations,
			<?php echo date("D d M Y")?>
		</h5>
		
		<?php echo $this->element("reservations/list_short",array("reservations" => $reservationsToday))?>

	</div>
	<div class="six columns">
		<h5>
			Tomorrows reservations,
			<?php echo date("D d M Y",strtotime(date("Y-m-d", strtotime(date("Y-m-d"))) . " +1 day"));?>
		</h5>

		<?php echo $this->element("reservations/list_short",array("reservations" => $reservationsTomorrow))?>

	</div>
</div>

<hr />

<h5>Events</h5>

<?php echo $this->element("events/list_full",array("reservations" => $events))?>