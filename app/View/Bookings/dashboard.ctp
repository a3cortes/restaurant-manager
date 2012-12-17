	<section id="content" style="background-color:#1C0403">
					<div class="indent">
						<div class="wrapper">
							<br/>
<?php foreach($bookings as $b){?>
<table width="900" border="0" cellspacing="0" cellpadding="5">
	  <tr>
	    <td width="200"><span class="color">Name :</span> <?php echo $b['Booking']['name']?></td>
	    <td width="150"><span class="color">Phone :</span> <?php echo $b['Booking']['phone']?></td>
	    <td width="100"><span class="color">Group Size: </span><?php echo $b['Booking']['group_size']?></td>
	    <td width="200"><span class="color">Reservation  : </span><?php echo date("D d M , h:i A", strtotime($b['Booking']['booking_date']) ) ?></td>
	    <?php if($b['Booking']['confirmed'] == 1) {?>
	    <td width="70" align="center" style="background-color: #A6A07D;color:#000">
		Confirmed
	    <?php }else{?>
	     <td width="70" align="center" style="background-color:#59271A;color:#000">
	    <a href="javascript:;" data="<?php echo $b['Booking']['id']?>" class="pendingBtn">Pending</a>
	    <?php }?>
	    </td>
	    <td width="20" align="center" ><a href="javascript:;" data="<?php echo $b['Booking']['id']?>" class="deleteBtn">Delete </a></td>
	  </tr>
	  <tr>
	    <td colspan="6"><?php echo $b['Booking']['comments']?>&nbsp;</td>
      </tr>
	</table>
<BR />
<?php } ?>
		<BR />	
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" width="164" ><?php echo $this->Paginator->prev(' << ' . __('Previous'), array(), null, array('class' => 'prev disabled')); ?></td>
    <td align="center" width="164" ><?php echo $this->Paginator->numbers(array('first' => 'First page'));?></td>
    <td align="center" width="164" ><?php echo $this->Paginator->next(' Next ' . __('>>'), array(), null, array('class' => 'next disabled'));?></td>
  </tr>
</table>
				
						</div><!-- wrapper -->
					</div>
				</section>