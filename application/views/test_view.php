<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MagRocket Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="USZBOQ0" >

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/magrocket/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/magrocket/stylesheets/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/magrocket/lib/font-awesome/css/font-awesome.css">

    <script src="<?php echo base_url(); ?>assets/magrocket/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

 	 <!-- bootbox code -->
	 <script type="text/javascript" src="<?php echo base_url(); ?>assets/magrocket/lib/bootbox.min.js"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/magrocket/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/magrocket/images/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right"> 
                    <li id="fat-menu" class="dropdown">
                    </li>
                    
                </ul>
                <a href="/"><img src="<?php echo base_url(); ?>assets/magrocket/images/logo.png" width="168" height="40"></a>
        </div>
    </div>


    <div class="sidebar-nav">
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form> 	  
    </div>
  
	<!-- Begin Main Content -->
    <div class="content">
        
		<div class="header">
		 	<h1 class="page-title">Test</h1>
		</div>
		        
      <ul class="breadcrumb">
         <li><a href="/">Home</a> <span class="divider">/</span></li>
         <li class="active">Test</li>
      </ul>
		
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
			    <div class="alert alert-info">
			        <button type="button" class="close" data-dismiss="alert">×</button>
			        <strong>If you got this far, the Framework seems to be installed correctly.</strong>
			    </div>
			    <div>
			    <?php phpinfo();?>
			    </div>
			</div>

	<!-- End Main Content -->

                    <footer>
                        <hr>
                        <p>&copy; 2013 <a href="http://www.magrocket.com" target="_blank">MagRocket</a> by <a href="http://www.nin9creative.com" target="_blank">NIN9 Creative</a></p>
                    </footer>
            </div>
        </div>
    </div>
    


    <script src="<?php echo base_url(); ?>assets/magrocket/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>