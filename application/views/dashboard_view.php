<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
  
	<!-- Begin Main Content -->
    <div class="content">
        
		<div class="header">
		 	<h1 class="page-title">Dashboard</h1>
		</div>
		        
      <ul class="breadcrumb">
         <li><a href="/">Home</a> <span class="divider">/</span></li>
         <li class="active">Dashboard</li>
      </ul>
		
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="row-fluid">
			    <div class="alert alert-info">
			        <button type="button" class="close" data-dismiss="alert">×</button>
			        <strong>Welcome to MagRocket!</strong>
			    </div>
			
			    <div class="block">
			        <a href="#page-stats" class="block-heading" data-toggle="collapse">Latest Stats</a>
			        <div id="page-stats" class="block-body collapse in">
			
			            <div class="stat-widget-container">
			                <div class="stat-widget">
			                    <div class="stat-button">
			                        <p class="title">X,XXX</p>
			                        <p class="detail">Issue Downloads</p>
			                    </div>
			                </div>
			
			                <div class="stat-widget">
			                    <div class="stat-button">
			                        <p class="title">X,XXX</p>
			                        <p class="detail">New Subscribers</p>
			                    </div>
			                </div>
			
			                <div class="stat-widget">
			                    <div class="stat-button">
			                        <p class="title">X,XXX</p>
			                        <p class="detail">Issue Page Views</p>
			                    </div>
			                </div>
			                			
			            </div>
			        </div>
			    </div>
			</div>

	<!-- End Main Content -->

<?php include('footer.php'); ?>