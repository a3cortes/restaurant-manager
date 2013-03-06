<?php echo $this->Html->script('/js/ckeditor/ckeditor'); ?>
<script type="text/javascript">
	CKEDITOR.replace( '<?php echo $field ?>' , { height: 400} );
</script>