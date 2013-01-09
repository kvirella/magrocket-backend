<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
  
	<!-- Begin Main Content -->
    <div class="content">
        
		<div class="header">
		 	<h1 class="page-title">Edit Publication</h1>
		</div>
		        
      <ul class="breadcrumb">
         <li><a href="/">Home</a> <span class="divider">/</span></li>
         <li class="active">Edit Publication</li>
      </ul>
		
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="alert alert-info">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        Edit the metadata for your publication and click Save.
		    </div>
			<div class="row-fluid"> 		
				<div class="well">
				    <div id="myTabContent" class="tab-content">
				      <div class="tab-pane active in" id="home">
				      	<form action="/publicationsedit/postback" method="post" enctype="multipart/form-data" name="publicationform" id="publicationform">
								<input type="hidden" name="ID" id="ID" value="<?php echo $publicationData['ID']?>"></input>
								<input type="hidden" name="UUID" id="UUID" value="<?php echo $publicationData['UUID']?>"></input>

								<label>Publication Name</label>
								<input type="text" required class="input-xlarge" title="Enter your publication name." value="<?php echo $publicationData['NAME']?>" id="NAME" name="NAME">

								<label>Publication ID</label>
								<input type="text" class="input-xxlarge" value="<?php echo $publicationData['UUID']?>" class="input-xlarge">
								
								<label>Parse Application ID</label>
								<input type="text" class="input-xxlarge" title="Enter the Parse Application ID." value="<?php echo $publicationData['PARSE_APPLICATION_ID']?>" id="PARSE_APPLICATION_ID" name="PARSE_APPLICATION_ID">

								<label>Parse Rest Api Key</label>
   							<input type="text" class="input-xxlarge" title="Enter the Parse Rest Api Key." value="<?php echo $publicationData['PARSE_REST_API_KEY']?>" id="PARSE_REST_API_KEY" name="PARSE_REST_API_KEY">
								
									<div class="btn-toolbar">
									    <button class="btn btn-primary"><i class="icon-save" name="submitbutton"></i> Save</button>
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
