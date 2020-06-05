<!--
Navigation Bar Section 
-->
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">
		<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse">
		<ul class="nav">
			<?php
				if ($title=='Beranda') {
					echo '<li class="active"><a href="'.base_url().'index.php/home/beranda">Beranda	</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/produk">Produk</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/pembayaran">Pembayaran</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/tentang">Tentang Kami</a></li>';
				} else if ($title=='Produk') {
					echo '<li class=""><a href="'.base_url().'index.php/home/beranda">Beranda </a></li>';
					echo '<li class="active"><a href="'.base_url().'index.php/home/produk">Produk</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/pembayaran">Pembayaran</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/tentang">Tentang Kami</a></li>';
				} else if ($title=='Pembayaran') {
					echo '<li class=""><a href="'.base_url().'index.php/home/beranda">Beranda </a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/produk">Produk</a></li>';
					echo '<li class="active"><a href="'.base_url().'index.php/home/pembayaran">Pembayaran</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/tentang">Tentang Kami</a></li>';
				} else if ($title=='Tentang') {
					echo '<li class=""><a href="'.base_url().'index.php/home/beranda">Beranda </a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/produk">Produk</a></li>';
					echo '<li class=""><a href="'.base_url().'index.php/home/pembayaran">Pembayaran</a></li>';
					echo '<li class="active"><a href="'.base_url().'index.php/home/tentang">Tentang Kami</a></li>';
				}
			?>
		</ul>
		<form action="#" class="navbar-search pull-left">
			<input type="text" placeholder="Pencarian" class="search-query span2">
		</form>
		<ul class="nav pull-right">
		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
			<div class="dropdown-menu">
			<form class="form-horizontal loginFrm">
				<div class="control-group">
				<input type="text" class="span2" id="inputEmail" placeholder="Email">
				</div>
				<div class="control-group">
				<input type="password" class="span2" id="inputPassword" placeholder="Password">
				</div>
				<div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
				<button type="submit" class="shopBtn btn-block">Sign in</button>
				</div>
			</form>
			</div>
		</li>
		</ul>
		</div>
	</div>
	</div>
</div>