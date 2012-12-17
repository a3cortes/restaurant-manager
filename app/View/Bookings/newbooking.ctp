				<!-- content -->
				<section id="content">
					<div class="indent">
						<div class="wrapper">
							
							<table width="943" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td >
							    <h2>Make a reservation</h2>
							    <form name="form1" method="post" action="">
									  <table width="900" border="0" cellspacing="0" cellpadding="5">
									    <tr>
									      <td width="171">Name</td>
									      <td width="402"><?php echo $this->Form->input("Booking.name", array("label" => false))?></td>
									      <td width="297" rowspan="8" style="padding:0"><img src="<?php echo $wwwroot?>images/res.jpg" /></td>
									    </tr>
									    <tr>
									      <td>Contact number</td>
									      <td><?php echo $this->Form->input("Booking.phone", array("label" => false))?></td>
								        </tr>
									    <tr>
									      <td>Email</td>
									      <td><?php echo $this->Form->input("Booking.email", array("label" => false))?></td>
								        </tr>
									    <tr>
									      <td>Reservation date &amp; time</td>
									      <td><?php echo $this->Form->input("Booking.booking_date", array("label" => false, 'type' => 'text'))?></td>
								        </tr>
									    <tr>
									      <td>Group size</td>
									      <td><?php echo $this->Form->input("Booking.group_size", array("label" => false))?></td>
								        </tr>
									    <tr>
									      <td>Additional information</td>
									      <td><?php echo $this->Form->input("Booking.comments", array("label" => false))?></td>
								        </tr>
									    <tr>
									      <td>&nbsp;</td>
									      <td><input type="submit" name="button" id="button" value="Submit"></td>
								        </tr>
									    <tr>
									    <td>&nbsp;</td>
									    <td class="error-message" style="font-weight:600;text-align:left;margin:0;">
									    	<?php echo $this->Session->flash()?>
									    </td>
									    </tr>
									  </table>
								</form>
							    

				    
							    <!-- end mneu -->
							    </td>
							  </tr>
							</table>
						</div><!-- wrapper -->
					</div>
				</section>
				<!-- footer -->
