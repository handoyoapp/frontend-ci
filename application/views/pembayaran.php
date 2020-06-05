<!DOCTYPE html>
<html lang="en">
	<?php require_once 'req_header.php';?>
<body>
<?php require_once 'req_header_section.php';?>
<?php require_once 'req_navigation_bar.php';?>
<!-- 
Body Section 
-->
<div class="row">
<div id="sidebar" class="span3">
	<?php require_once 'req_kategori_bar.php';?>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="<?php echo base_url();?>assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url();?>assets/img/b.jpg" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">Rp 120.000,-</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url();?>assets/img/b.jpg" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">Rp 120.000,-</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url();?>assets/img/b.jpg" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">Rp 120.000,-</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
<!--
New Products
-->
	<div class="well well-small">
	<h3>Pembayaran </h3>
		<div class="row-fluid">
			<p>Pembayaran dapat dilakukan dengan melakukan transfer via Bank :</p>
			<ul>
				<li>Via Bank Mandiri -> a.n. Candra Budiman No.Rek 55226177162</li>
				<li>Via Bank BCA -> a.n. Candra Budiman No.Rek 772661772617</li>
			</ul>
		</div>
	</div>
	</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Sponsor by</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url();?>assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url();?>assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url();?>assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url();?>assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url();?>assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url();?>assets/img/6.png"></a>
		</div>
	</div>
</section>

	<?php require_once 'req_footer.php';?>
  </body>
</html>