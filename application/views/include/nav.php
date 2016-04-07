<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
			</button>
				<!-- <a class="navbar-brand" href="<?php echo base_url();?>index.php/home"><img  class="img-thumbnail" alt="Brand" src="<?php echo base_url()?>images/logo/logo-pjfiber2.jpg"></a> -->
        </div>
	<div id="navbar" class="navbar-collapse collapse">
		<div class="nav navbar-nav navbar-right">
			<ul class="nav navbar-nav ">
            	<li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-cog fa-spin "></i> หน้าแรก</a></li>
            	<li><a href="<?php echo base_url();?>index.php/menu/about"><i class="fa fa-cog fa-spin"></i> เกี่ยวกับเรา</a></li>
            	<li><a href="<?php echo site_url('menu/service');?>"><i class="fa fa-cog fa-spin"></i> สินค้าและบริการ</a></li>
            	<li><a href="<?php echo site_url('menu/payment');?>"><i class="fa fa-cog fa-spin"></i> การชำระเงิน</a></li>
                  <li><a href="<?php echo site_url('menu/news');?>"><i class="fa fa-cog fa-spin"></i> ข่าวสาร</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>"><i class="fa fa-cog fa-spin"></i> ติดต่อเรา</a></li>
            	
            	<!-- <li><a href="<?php echo site_url('menu/admin');?>"><i class="fa fa-cog fa-spin"></i> (ทดสอบระบบ admin)</a></li> -->
			</ul>
		</div>
	</div><!--/.nav-collapse -->
</div>
</nav>