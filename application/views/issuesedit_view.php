<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
  
	<!-- Begin Main Content -->
    <div class="content">
        
		<div class="header">
		 	<h1 class="page-title">Edit Issue</h1>
		</div>
		        
      <ul class="breadcrumb">
         <li><a href="/">Home</a> <span class="divider">/</span></li>
         <li class="active">Edit Issue</li>
      </ul>
		
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="alert alert-info">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        Edit the metadata for your issue and click Save.
		    </div>
			<div class="row-fluid"> 		
				<div class="well">
				    <div id="myTabContent" class="tab-content">
				      <div class="tab-pane active in" id="home">
							<form action="/issuesedit/postback" method="post" enctype="multipart/form-data" name="issueform" id="issueform">
								<input type="hidden" name="ID" id="ID" value="<?php echo $issueData['ID']?>"></input>
								<input type="hidden" name="PUBLICATION_UUID" id="PUBLICATION_UUID" value="<?php echo $issueData['PUBLICATION_UUID']?>"></input>
								<label>Name</label>
								<input type="text" required class="input-xlarge" title="Enter your issue name." value="<?php echo $issueData['NAME']?>" id="NAME" name="NAME">

								<label>Title</label>
								<input type="text" required class="input-xlarge" title="Enter your issue title." value="<?php echo $issueData['TITLE']?>" id="TITLE" name="TITLE">

								<label>Info</label>
								<input type="text" required class="input-xxlarge" title="Enter the issue info." value="<?php echo $issueData['INFO']?>" id="INFO" name="INFO">

								<label>Date</label>
								<input type="text" required class="input-large" title="Enter your issue publication date." value="<?php echo $issueData['DATE']?>" id="DATE" name="DATE">

								<label>Cover</label>
								<input type="text" required class="span11" title="Enter your issue cover URL." value="<?php echo $issueData['COVER']?>" id="COVER" name="COVER">

								<label>URL</label>
								<input type="text" required class="span11" title="Enter your issue HPUB URL." value="<?php echo $issueData['URL']?>" id="URL" name="URL">

								<label>iTunes Summary</label>
								<input type="text" class="input-xxlarge" title="Enter your iTunes Summary." value="<?php echo $issueData['ITUNES_SUMMARY']?>" id="ITUNES_SUMMARY" name="ITUNES_SUMMARY">

								<label>iTunes Coverart URL</label>
								<input type="text" class="span11" title="Enter your issue iTunes Coverart URL." value="<?php echo $issueData['ITUNES_COVERART_URL']?>" id="ITUNES_COVERART_URL" name="ITUNES_COVERART_URL">

								<label>iTunes Publish Date</label>
								<input type="text" class="input-large" title="Enter your issue iTunes Publish Date." value="<?php echo $issueData['ITUNES_PUBLISHED']?>" id="ITUNES_PUBLISHED" name="ITUNES_PUBLISHED">

								<label>iTunes Updated</label>
								<input type="text" class="input-large" title="Enter your iTunes Issue Updated Date." value="<?php echo $issueData['ITUNES_UPDATED']?>" id="ITUNES_UPDATED" name="ITUNES_UPDATED">
																																
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