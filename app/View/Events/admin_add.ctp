<?php 
$this->Html->addCrumb('Events', '/admin/events');
$this->Html->addCrumb('Add event', '#');
?>
<h5>Add an vent</h5>
<?php echo $this->Form->create('' , array('class'=>"custom"))?>
<div class="row">
	<div class="six columns">
		<?php echo $this->Form->input("name" , array( "label"=>false ))?>
	</div>
	<div class="six columns">
		<?php echo $this->Form->input("path" , array("type" => "file",  "label"=>false , "placeholder" =>"Event name"))?>
	</div>

</div>

<div class="row">
	<div class="twelve columns">
		<?php echo $this->Form->input("details" , array( "label"=>false ))?>
	</div>

</div>


<div class="row">
	<div class="two columns">
		<?php echo $this->Form
		->input("event_date",
				array("type" => "text", "label" => "Event Date",
						))
		?>
		
				
	</div>

	<div class="three columns">
	
	
		<div class="row">
			<div class="six columns">
			<?php echo $this->Form
				->input("Event.booking_time_hour",
						array( "options" => $hours, "type"=>"select", "label"=>"Hour"))
			?>
			</div>
			
			<div class="six columns">
			<?php echo $this->Form
				->input("Event.booking_time_min",
						array("type" =>"select" , "label"=>"Min", "options"=>$mins ))
?>
			</div>
		</div>
	</div>
		<div class="one columns">
		</div>
	<div class="three columns">
		<?php echo $this->Form
		->input("booking",
				array("label" => "Available for booking", "type" => "select",
						"options" => array(1 => "Yes", 0 => "No")));
		?>	
	</div>
	
	<div class="three columns">
		<?php echo $this->Form
				->input("published",
						array("label" => "Published", "type" => "select",
								"options" => array(1 => "Publshed",
										0 => "Unpublished")))
		?>	
	</div>

	
	
</div>
<div class="row">
	<div class="twelve columns">
		<?php echo $this->Form->submit("Update event", array("class"=>"button success small radius"))?>
	</div>
</div>
<?php echo $this->Form->end()?>
<br>
 <script>
    $(function() 
    {

        $( '#EventEventDate').datepicker({  
            numberOfMonths: 2,  
            dateFormat: 'dd-mm-yy',  
            showOn: 'both',  
            buttonImageOnly: true,  
        }); 
    });

    function customRange(a) 
    {  
        var b = new Date();  
        var c = new Date(b.getFullYear(), b.getMonth(), b.getDate());  
        if (a.id == 'ReservationEventEnd') {  
            if ($('#ReservationEventStart').datepicker('getDate') != null) {  
                c = $('#ReservationEventEnd').datepicker('getDate');  
            }  
        }  
        return {  
            minDate: c  
        }  
    } 
</script>
