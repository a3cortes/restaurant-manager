

		
		


<table class="twelve">
  <thead>
    <tr>
      <th>Name</th>
      <th>Reservations</th>
      <th>Published</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($events as $event){?>
    <tr>
      <td>	<a
					href="/admin/events/edit/<?php echo $event['Event']['id']?>"><?php echo $event['Event']['name']?>
				</a></td>
      <td><?php echo $event['Event']['reservation_count']?></td>
      <td>				<?php if($event['Event']['published']){?>
				<span class="confirmed general foundicon-checkmark"></span>
				<?php }else{?>
				<span class="unconfirmed general foundicon-error"></span>
				<?php }?></td>
    </tr>
  <?php }?>
  </tbody>
</table>

		
		
		