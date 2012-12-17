<?php 
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('PDF Menus', '#');
?>
<p>Upload PDF menus. PDFs will be displayed at top of all menus</p>

<div class="row">
	<div class="twelve columns">
		<h5>Upload a new pdf file</h5>
	</div>
</div>
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
<br>
<h5>Current pdf menus</h5>


<table class="twelve">
  <thead>
    <tr>
      <th>Name</th>
      <th>File</th>
      <th>&nbsp;</th>

    </tr>
  </thead>
  <tbody>
<?php foreach($data as $re){?>
    <tr>
      <td>	<a href="/admin/menufiles/index/<?php echo $re['MenuFile']['id']?>"><?php echo $re['MenuFile']['name']?></a>
				</td>
      <td>	<a href="/files/menus/<?php echo $re['MenuFile']['path']?>" target="_blank"><?php echo $re['MenuFile']['path']?></a>  <i>(<?php echo $this->Tools->human_filesize($re['MenuFile']['size'])?>)</i></td>
      <td>				<a class="button radius alert tiny" href="/admin/menuFiles/delete/<?php echo $re['MenuFile']['id']?>">Delete</a></td>
    </tr>
  <?php }?>
  </tbody>
</table>

		