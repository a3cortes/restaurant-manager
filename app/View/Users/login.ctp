



<div class="row">
	<div class="four columns offset-by-four">
			<div class="row">
			<div class="two columns">
			<h5>
				<span class="general foundicon-lock"
					style=" color: #2A75A9"></span></h5>
			</div>
			
			<div class="ten columns">
			<h5 style="">Login</h5></div>
		</div>
	</div>
</div>

<div class="row">
	<div class="four columns offset-by-four"">
		<?php echo $this->Form->create('User',array("class"=>"nice"));?>

		<?php echo $this->Form->input('username',array("label" => false,"placeholder" =>"Username"));?>
		<?php echo $this->Form->input('password',array("label" => false, "placeholder" =>"Password" ));?>
		<?php echo $this->Form->Submit('Login', array("class"=>"small success button radius"));?>
		<?php echo $this->Form->end();?>

	
	</div>
</div>
<div class="row">
	<div class="six columns offset-by-three">
		<?php echo $this->Session->flash();?>
	</div>
</div>