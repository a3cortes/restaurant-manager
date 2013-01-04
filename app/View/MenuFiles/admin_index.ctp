<?php
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('PDF Menus', '/admin/menusFiles');
?>

<h5>Upload a new PDF menu</h5>
<div class="row">
  <?php echo $this->Form->create('MenuFile' , array('class'=>"" , 'type' => 'file'))?>
  <?php echo $this->Form->input('dir', array('type' => 'hidden')); ?>
  <div class="six columns">
    <?php echo $this->Form->input("name" , array( "label"=>false , "placeholder" =>"Display name"))?>
    <?php echo $this->Form->input("path" , array("type" => "file",  "label"=>false , "placeholder" =>"Event name"))?>
  </div>

  <div class="six columns">

    <?php echo $this->Form->submit("Upload", array("class"=>"button success small radius"))?>
  </div>

  <?php echo $this->Form->end()?>
</div>
<br />


<div class="row">
  <div class="twelve columns">
<h5>Current PDF menus</h5>
    <table class="twelve">
      <thead>
        <tr>
          <th>Menu name</th>
          <th>Menu file</th>
          <th>Uploaded on</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
<?php foreach ($data as $pdf)
{ ?>
          <tr>
            <td><a href="/admin/menuFiles/edit/<?php echo $pdf['MenuFile']['id'] ?>" ><?php echo $pdf['MenuFile']['name'] ?></a></td>
            <td><a href="/files/menus/<?php echo $pdf['MenuFile']['path'] ?>" target="_blank"><?php echo $pdf['MenuFile']['path'] ?> (<?php echo $this->Tools->human_filesize($pdf['MenuFile']['size'])?>)</a></td>
            <td><?php echo $pdf['MenuFile']['created'] ?></td>
            <td><a href="/admin/menuFiles/delete/<?php echo $pdf['MenuFile']['id'] ?>" class="button radius small alert">Delete</td>
<?php } ?>
      </tbody>
    </table>


  </div>
</div>
