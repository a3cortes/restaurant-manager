<?php 
$this->Html->addCrumb('Reservations', '/admin/reservations');
$this->Html->addCrumb($reservation['Reservation']['email'], '#');
?>
<?php echo $this->element("reservations/lookup")?>
<h5>Reservation details</h5>
<div class="row">
	<div class="eight columns">



		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="30%"><strong>Name</strong></td>
				<td width="70%"><?php echo $reservation['Reservation']['name']?></td>
			</tr>
						<tr>
				<td><strong>Reservation for</strong></td>
				<td><?php echo ($reservation['Event']['name'])?>
				</td>
			</tr>
			<tr>
				<td><strong>Reservation date &amp; time</strong></td>
				<td><?php echo date("D d M Y h:ia", strtotime($reservation['Reservation']['booking_date']))?>
				</td>
			</tr>
			<tr>
				<td><strong>Contact number</strong></td>
				<td><?php echo $reservation['Reservation']['phone']?></td>
			</tr>
			<tr>
				<td><strong>Email</strong></td>
				<td><?php echo $reservation['Reservation']['email']?></td>
			</tr>
			<tr>
				<td><strong>Group size</strong></td>
				<td><?php echo $reservation['Reservation']['group_size']?></td>
			</tr>
			<tr>
				<td><strong>Comments</strong></td>
				<td><?php echo $reservation['Reservation']['comments']?></td>
			</tr>
		</table>

	</div>
	<div class="four columns">
		<h5>Status</h5>
		<?php if($reservation['Reservation']['confirmed']){?>
			Confirmed on
			<?php echo date("D d M Y h:ia", strtotime($reservation['Reservation']['confirmed_on']))?>
		<?php }else{?>
		Unconfirmed <Br> <br> <a
			href="/admin/reservations/confirm/<?php echo $reservation['Reservation']['id']?>"
			class="small success button radius" style="margin-bottom: 2px">Click to confirm</a>
		<?php }?>
		<br>
		<br>
		<a href="/admin/reservations/delete/<?php echo $reservation['Reservation']['id']?>" class="button alert small radius">Delete</a>
	</div>
</div>

<br clear="both" />
<div class="row">
	<div class="six columns">
		<h5>
			Other reservations on
			<?php echo date("D d M Y", strtotime($reservation['Reservation']['booking_date']))?>
		</h5>

		<?php echo $this->element("reservations/list_short",array("reservations" => $reservationsOnday))?>
		
	</div>
	<div class="six columns">
		<h5>
			Other reservations by <?php echo $reservation['Reservation']['email']?>
		</h5>

		<?php echo $this->element("reservations/list_short",array("reservations" => $reservationsBy))?>
		

	</div>
</div>
