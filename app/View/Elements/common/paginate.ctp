<div class="row">
	<div class="six columns">
			<?php echo $this->Paginator->prev(' << ' , array(), null, array('escape'=>false, 'class' => 'disabled','tag' => 'li')); ?>
			<ul class="pagination">
				<?php echo $this->Paginator->numbers(array('first' => '1','tag' => 'li',"separator"=>""));?>
			</ul>
			<?php echo $this->Paginator->next(' >> ', array(), null, array('class' => 'disabled','tag' => 'li'));?>
	</div>
	<div class="six columns" style="text-align:right">
	<div class="page-numbers">
	<?php
echo $this->Paginator->counter(
    'Showing {:current} out of
     {:count}. {:start} - {:end}'
);
?>
</div>
	</div>
</div>

