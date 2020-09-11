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
	<h3>Produk Kami </h3>
		<?php 
			$slice = 1;
			foreach ($query as $row)
			{
				if ($slice==4){
					$slice=1;
				}
				
				if ($slice==1){
					echo '<div class="row-fluid">';
					echo '<li class="span4">
									<div class="thumbnail">
									<a href="'.base_url().'produk/produk_detail?id='.$row->id_barang.'" class="overlay"></a>
									<a class="zoomTool" href="'.base_url().'produk/produk_detail?id='.$row->id_barang.'" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
									<a href="'.base_url().'produk/produk_detail?id='.$row->id_barang.'"><img src="'.$row->img.'" alt=""></a>
									<div class="caption cntr">
										<p>'.$row->nama_barang.'</p>
										<p><strong> Rp '.number_format($row->harga,0,',','.').',-</strong></p>
										<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
										<div class="actionList">
											<a class="pull-left" href="#">Add to Wish List </a> 
											<a class="pull-left" href="#"> Add to Compare </a>
										</div> 
										<br class="clr">
									</div>
									</div>
								</li>';
					
				}

				if ($slice != 1) {
					echo '<li class="span4">
									<div class="thumbnail">
									<a href="'.base_url().'produk/produk_detail?id='.$row->id_barang.'" class="overlay"></a>
									<a class="zoomTool" href="'.base_url().'produk/produk_detail?id='.$row->id_barang.'" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
									<a href="'.base_url().'produk/produk_detail?id='.$row->id_barang.'"><img src="'.$row->img.'" alt=""></a>
									<div class="caption cntr">
										<p>'.$row->nama_barang.'</p>
										<p><strong> Rp '.number_format($row->harga,0,',','.').',-</strong></p>
										<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
										<div class="actionList">
											<a class="pull-left" href="#">Add to Wish List </a> 
											<a class="pull-left" href="#"> Add to Compare </a>
										</div> 
										<br class="clr">
									</div>
									</div>
								</li>';
				}

				if ($slice == 3) {
					echo '</div>';
				}

				$slice++;
			}
		?>
	</div>
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