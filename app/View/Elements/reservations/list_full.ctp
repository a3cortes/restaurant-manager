

		
		


<table class="twelve">
  <thead>
    <tr>
      <th>Date</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Group</th>
      <th>Comments</th>
      <th>Confirmed</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($reservations as $reservation){?>
    <tr>
      <td>	<a
					href="/admin/reservations/details/<?php echo $reservation['Reservation']['id']?>"><?php echo date("D d M, h:ia", strtotime($reservation['Reservation']['booking_date']))?>
				</a></td>
      <td><?php echo $reservation['Reservation']['name']?></td>
      <td><?php echo $reservation['Reservation']['phone']?></td>
      <td><?php echo $reservation['Reservation']['group_size']?></td>
      <td><?php echo $reservation['Reservation']['comments']?></td>
      <td>				<?php if($reservation['Reservation']['confirmed']){?>
				<span class="confirmed general foundicon-checkmark"></span>
				<?php }else{?>
				<span class="unconfirmed general foundicon-error"></span>
				<?php }?></td>
    </tr>
  <?php }?>
  </tbody>
</table>

		
		
		