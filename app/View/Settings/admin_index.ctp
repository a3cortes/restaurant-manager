<h5>Application Settings</h5>
<div class="row">
	<div class="twelve columns">

		<?php echo $this->Form->create('',array('class'=>"nice"))?>

		<table width="100%">

			<?php foreach($data as $k => $v){?>
			<tr>
				<td><?php echo Inflector::humanize($k)?>
				</td>

				<td>
					<?php echo $this->Form->input($k, array("value"=>$v, "label" => false, "class"=>"input-text", "style"=>"margin-bottom:0;width:100%"))?>
				</td>
			</tr>
			<?php }?>

		</table>
		<?php echo $this->Form->submit("Save", array("class"=>"small green nice button radius"))?>
		<?php echo $this->Form->end()?>
	</div>
</div>
