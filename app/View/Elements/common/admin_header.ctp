<?php echo $this->Html->docType('html5'); ?>
<html lang="en">
<head>
<title><?php echo Inflector::humanize($title) ?></title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta name="keywords" content="" >
<meta name="description" content="" >

<meta charset="utf-8">
<?php echo $this->Html->css('foundation.min') ?>
<?php echo $this->Html->css("general_foundicons.css")?>
<?php echo $this->Html->css("general_foundicons_ie7.css")?>
<?php echo $this->Html->css('blitzer/jquery-ui-1.9.2.custom') ?>

<?php echo $this->Html->css('fc/fullcalendar') ?>
<?php echo $this->Html->css('fc/fullcalendar.print') ?>



<?php echo $this->Html->css('app') ?>



<!--[if lt IE 8]> 		<div style=' clear: both; text-align:center; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a></div>  	<![endif]-->
<!--[if lt IE 9]>   		<script type="text/javascript" src="js/html5.js"></script>		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">   	<![endif]-->
</head>
