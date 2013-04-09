
<div class="row">
	<div class="twelve columns">

	<div class="panel">
	<?php echo date("Y") ?> |  
	<?php echo $this->Session->read("site_data.name")?>
	
	
	</div>
	
	
		</div>
								
</div>

	<?php 
		echo $this->Html->script( 'jquery');
	 	echo $this->Html->script("modernizr.foundation") ;
		echo $this->Html->script("foundation.min");
		echo $this->Html->script("jquery-ui-1.9.2.custom.min") ;
		
		echo $this->Html->script('fc/fullcalendar.min');


		echo $this->Html->script('app');
	?>