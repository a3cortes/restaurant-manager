<?php 
$this->Html->addCrumb('Users', '#');
$this->Html->addCrumb('Edit', '#');
$this->Html->addCrumb($data['User']['username'], '#');
?>
<h5>Current users</h5>



<?php echo $this->Form->create()?>
<?php echo $this->Form->hidden("id", array("value"=> $data['User']['id']))?>
<div class="row row-body">
	<div class="four columns">
		<?php echo $this->Form->input("username", array("value"=> $data['User']['username']))?>
	</div>
	
	<div class="four columns">
		<?php echo $this->Form->input("name" , array("value"=> $data['User']['name']))?>
	</div>
	
	<div class="four columns">
		<?php echo $this->Form->input("password" , array("label"=> "New password"))?>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<?php echo $this->Form->submit("Update", array("class" =>"button radius success small" , "style" => "float:left;margin-right:5px"))?>
		<a href="/admin/users/delete/<?php echo $data['User']['id']?>" class="button radius alert small">Delete</a>
	</div>
</div>
<?php echo $this->Form->end()?>