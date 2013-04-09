<?php 
$menuitem = $currentMenu;
$this->Html->addCrumb('Menus', '#');
$this->Html->addCrumb('Online menu', '/admin/menus');
$this->Html->addCrumb($menuitem['Menu']['name'], '/admin/menus/edit/'.$menuitem['Menu']['id']);
$this->Html->addCrumb('Add new', '#');
?>

<?php echo $this->element("menus/lookup")?>
<h5>
	Add an item to <?php echo $menuitem['Menu']['name']?>
</h5>
<div class="row">
	<?php echo $this->Form->create('MenuItem', array("class"=>"custom"))?>
	<div class="six columns" style="margin-left: 0px">
		<?php echo $this->Form->input("MenuItem.menu_id",array("selected"=>$menuitem['Menu']['id'] ,"options" => $menucats ,"label"=>"Menu category", "div" =>false,"style"=>"width:100%"))?>
		<?php echo $this->Form->input("MenuItem.name",array("label"=>"Name", "div" =>false,"style"=>"width:100%"))?>
		<?php echo $this->Form->input("MenuItem.desc" ,array("label"=>"Description", "div" =>false,"style"=>"width:100%"))?>
		<div class="row " >
			<div class="six columns" >
				<label>Price 1</label>
				<div class="row collapse">
					<div class='two column'>
						<span class="prefix">$</span>
					</div>
					<div class="ten columns">
						<?php echo $this->Form->input("MenuItem.price1",array("value"=>'0.00' , "label"=>false, 'placeholder' => 'Price 1'))?>
					</div>
				</div>
			</div> <!-- End #name -->
		
			<div class="six columns" >
				<label>Price 2</label>
				<div class="row collapse">

					<div class='two column'>
						<span class="prefix">$</span>
					</div>
					<div class="ten columns">
						<?php echo $this->Form->input("MenuItem.price2",array("value"=>'0.00' , "label"=>false, 'placeholder' => 'Price 2'))?>
					</div>
				</div>
			</div><!-- End #name -->
		</div>
		<div class="row">
			<div style="float: left" class="three columns">
				<?php echo $this->Form->input("MenuItem.active",array("type"=>"select","div" =>false,"options" =>array("1" =>"Yes", "0"=>"No")))?>
			</div>
			<div style="float: left" class="six columns">
				<?php echo $this->Form->input("MenuItem.order", array("value"=> '1', "div" =>false, "label" =>"Display Order","class" =>" small"))?>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns">
				<?php echo $this->Form->submit("Save", array("class" => "small success button radius", "style"=>"float:left;margin-right:5px"));?>
				<?php echo $this->Form->button("Delete", array("class" => "small alert button radius", "style"=>"x"));?>
			</div>
		</div>
		<br clear="both" />
	</div>
	<div class="six columns">
		<h5>
			Recently changed items in
			<?php echo $menuitem['Menu']['name']?>
		</h5>
		<ul class="disk">
		<?php foreach($recent as $item){
		?>
			<li><a href="/admin/menus/itemedit/<?php echo $item['MenuItem']['id']?>" class="style1"><?php echo $item['MenuItem']['name']?></a></li>
		<?php } ?>
		</ul>
	</div>
	<?php echo $this->Form->end();?>
</div>
