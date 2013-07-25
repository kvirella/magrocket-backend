<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->lang->line('__LBL_PROJECT_NAME__'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="uszboq0" >

        <link href="<?php echo base_url(); ?>media/bounce-theme/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>media/bounce-theme/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>media/bounce-theme/css/glyphicons.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	    <link href="<?php echo base_url(); ?>media/bounce-theme/css/base.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>media/bounce-theme/css/blue.css" rel="stylesheet">
        
        <!-- Le styles 
        <link href="<?php echo base_url(); ?>media/css/template.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>media/css/style.css" rel="stylesheet"> -->
        
        <script src="<?php echo base_url(); ?>media/bootstrap/js/jquery-1.7.1.min.js"></script>
        <script src="<?php echo base_url(); ?>media/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <style>
   	 #header{
		padding: 8px 0;
		margin-bottom:10px;
	}
	.affix .container{
		background: none repeat scroll 0 0 #F1F1F1;
	}
    </style>
    <body>
        <?php echo $main_menu; ?>
        <?php echo $main_content; ?>
    </body>
</html>
