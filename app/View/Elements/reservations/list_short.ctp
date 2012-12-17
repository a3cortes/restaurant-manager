<?php if(count($reservations)>0){?>		
		
		<table class="twelve">
  <thead>
    <tr>
      <th>Time</th>
      <th>Name</th>
      <th>Group</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($reservations as $reservation) { ?>
    <tr>
      <td>	<a href="/admin/reservations/details/<?php echo $reservation['Reservation']['id'] ?>"><?php echo date(
			"h i a", strtotime($reservation['Reservation']['booking_date'])); ?></a>
				</td>
      <td><?php echo $reservation['Reservation']['name'] ?></td>
      <td><?php echo $reservation['Reservation']['group_size'] ?></td>
      <td><?php echo $reservation['Reservation']['comments'] ?></td>
      <td>				<?php if ($reservation['Reservation']['confirmed']) { ?>
				<span class="confirmed general foundicon-checkmark"></span>
				<?php } else { ?>
				<span class="unconfirmed general foundicon-error"></span>
				<?php } ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

		<?php }else{?>
		
		 <h5 class="radius label">No Reservations</h5>
		 
		<?php }?>