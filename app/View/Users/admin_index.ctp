<?php 
$this->Html->addCrumb('Users', '#');
?>

<a href="/admin/users/add" class="small success  button radius" style="margin-bottom: 2px">Add a user</a>

<h5>Current users</h5>



<table class="twelve">
  <thead>
    <tr>
      <th>Username</th>
      <th>Display name</th>
      <th>Last login</th>

    </tr>
  </thead>
  <tbody>
<?php foreach($data as $user){?>
    <tr>
      <td>		<a
			href="/admin/users/edit/<?php echo $user['User']['id']?>"><?php echo $user['User']['username']?>
		</a>
		</td>
      <td><?php echo $user['User']['name']?></td>
      <td>				<?php echo $user['User']['lastlogin']?></td>
    </tr>
  <?php }?>
  </tbody>
</table>

		
		
		