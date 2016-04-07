<?php   $this->view('include/header');  ?>
<?php   $this->view('include/nav'); ?>
<!-- ------------------------------------------header---------------------------------------------------------- --> 
    <div class="container bghome">  
      <div class="col-md-12 ">
        <div class="">      
          <img class="img-thumbnail" src="<?php echo base_url()?>images/banner.jpg" alt="...">        
        </div>
      </div>
    </div>
    <div class="container bghome">  
      <div class="col-md-12 ">          
        <?php $this->view('include/marquee'); ?>  
      </div>
    </div>
<!-- Left content---------------------------------------------------------------------------------------------------- -->
  <div class="row">
    <div class="container bghome">      
        <div class="col-md-3 ">
            <?php $this->view('navbar/navbar-right');?>
        </div>
<!-- right content---------------------------------------------------------------------------------------------------- --> 
        
        <div class="col-md-9">
        <!-- Slide  --------------------------------------------------------------------------> 
          <div class="panel panel-info">    
            <div class="panel-body">
              <?php $this->view('include/slide');?>
            </div>
          </div>
          <!-- Slide  --------------------------------------------------------------------------> 
          <div class="panel panel-info">    
            <div class="panel-body">
              
            </div>
          </div>


        </div>
    </div>

  </div>
<!-- --------------------------------------------------------------------------------------------------- --> 
<?php  $this->view('include/footer');  ?>