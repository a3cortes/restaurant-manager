<html>
  <head/>
  <body style="font-family: Arial, Helvetica, sans-serif">
    <table width="90%" border="0" cellspacing="0" cellpadding="5">
      <tr><td colspan="2" class="txt2" style="color: #C00">Dear <?php echo $data['r']['name']?>,</td>
  </tr>
      <tr><td colspan="2">Thank you for making a booking with us. Here are your booking details.</td>
  </tr>
      <tr><td width="20%">Date &amp; Time</td>
    <td width="80%" class="txt1" style="color: #600"><?php echo $data['r']['date'] ?></td>
  </tr>
      <tr><td>Group size</td>
    <td class="txt1" style="color: #600"><?php echo $data['r']['size'] ?></td>
  </tr>
      <tr><td>Location</td>
    <td class="txt1" style="color: #600"><?php echo $data['r']['venue']?></td>
  </tr>
      <tr><td colspan="2"><br/>
    We are looking forward to seeing you at <strong><span class="txt1" style="color: #600"><?php echo $this->Session->read('site_data.address') ?>.</span></strong></td>
  </tr>
      <tr><td colspan="2">If you have any enquiries please contact us on <span class="txt1" style="color: #600"><?php echo $this->Session->read('site_data.phone') ?></span></td>
  </tr>
    </table>
  </body>
</html>
