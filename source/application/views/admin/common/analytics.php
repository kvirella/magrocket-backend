<?php
$crudAuth = $this->session->userdata('CRUD_AUTH');
?>
<div class="container">
        <h2><?php echo $this->lang->line('__LBL_ANALYTICS__'); ?></h2>
		  <br>    	  
    	  <p>
    	  		MagRocket currently supports basic statistics and analytics for your MagRocket based publications.
		  </p>
		  <br><br>
		  <?php echo $publications_table; ?>
		  <br><br><br><br><br><br><br>
        <footer>
            <p><?php echo $this->lang->line('__LBL_COPYRIGHT__'); ?></p>
            <img class="pull-right" src="<?php echo base_url(); ?>media/images/MagRocketLogo.png">
        </footer>
    </div>
</div>