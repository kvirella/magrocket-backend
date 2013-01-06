<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
  
	<!-- Begin Main Content -->
    <div class="content">
        
		<div class="header">
		 	<h1 class="page-title">Push Notifications</h1>
		</div>
		        
      <ul class="breadcrumb">
         <li><a href="/">Home</a> <span class="divider">/</span></li>
         <li><a href="/publications">Publications</a> <span class="divider">/</span></li>
         <li class="active">Push Notifications</li>
      </ul>
		
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="alert alert-info">
	        <button type="button" class="close" data-dismiss="alert">×</button>
	        Use this form to send Push Notifications for your publication.  This functionality requires that you have correctly setup your Parse.com account and have entered the application API keys in the Publication definition and the master API keys in the <a href="/settings/">Settings</a>.
	    </div>
			<div class="row-fluid"> 		
				<div class="well">
				    <div id="myTabContent" class="tab-content">
				      <div class="tab-pane active in" id="home">
							<form action="/pushnotifications/postback" method="post" enctype="multipart/form-data" name="pushnotificationform" id="pushnotificationform">
								<input type="hidden" name="UUID" id="UUID" value="<?php echo $pushData['PUBLICATION_UUID']?>"></input>

								<label>Publication Name</label>
								<input type="text" title="Your publication name" value="<?php echo $pushData['NAME']?>" id="NAME" name="NAME">

								<label>Alert Text</label>
								<textarea rows="3" name="ALERTTEXT">{"badge":1,"alert":"New Content Available","content-available":1}</textarea>

								<div class="btn-toolbar">
								    <button class="btn btn-primary"><i class="icon-save" name="submitbutton"></i> Send</button>
								    <button type="button" class="btn" onclick="history.back()">Cancel</button>
								  <div class="btn-group">
								  </div>
								</div>	
							</form>
				      </div>
				  </div>
				</div>
			</div>			
		</div>

	<!-- End Main Content -->

<?php include('footer.php'); ?>


