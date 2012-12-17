<?php 
$this->Html->addCrumb('Users', '/admin/users');
$this->Html->addCrumb('Add', '#');
?>
<h5>Add a new user</h5>



<?php echo $this->Form->create()?>
<div class="row row-body">
	<div class="four columns">
		<?php echo $this->Form->input("username" , array("placeholder" => "Username"))?>
	</div>

	<div class="four columns">
		<?php echo $this->Form->input("name" , array("placeholder" => "Display name") )?>
	</div>

	<div class="four columns">
		<?php echo $this->Form->input("password" , array("placeholder" => "Password"))?>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<?php echo $this->Form->submit("Add", array("class" =>"button radius success small" ))?>
	</div>
</div>
<?php echo $this->Form->end()?>