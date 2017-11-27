<?php
	//Buat hightlight menu
	$namaHalaman = $_SERVER['PHP_SELF'];
	$namaArray   = explode('/',$namaHalaman);
	$jumlah      = count($namaArray);
	$namaHalaman = $namaArray[$jumlah-1];
?>


<nav class="navbar navbar-default navbar-fixed-top navbar-ku" role="navigation" style="background-color: #314559; border-top-color: #6DB532; border-style: stripped; border-top-width: medium;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="#">TripOn</a>
		</div>	
		<div class="collapse navbar-collapse" id="collapse">	
			<ul class="nav navbar-nav navbar-right primary-menu">
				<li class="<?php echo ($namaHalaman=='#')?'active':'';?>" >
					<a class="<?php echo ($namaHalaman=='#')?'active':'';?>" href="#" >Beranda</a>
				</li>
				<li class="<?php echo ($namaHalaman=='reservasi.php')?'active':'';?>" >
					<a class="<?php echo ($namaHalaman=='reservasi.php')?'active':'';?>" href="reservasi.php" >Reservasi</a>
				</li>
				<li class="<?php echo ($namaHalaman=='paket.php')?'active':'';?>" >
					<a class="<?php echo ($namaHalaman=='paket.php')?'active':'';?>" href="paket.php" >Paket</a>
				</li>
				<li class="<?php echo ($namaHalaman=='daftar.php')?'active':'';?>" >
					<a class="<?php echo ($namaHalaman=='daftar.php')?'active':'';?>" href="daftar.php" >Daftar</a>
				</li>
				<li class="<?php echo ($namaHalaman=='masuk.php')?'active':'';?>" >
					<a class="<?php echo ($namaHalaman=='masuk.php')?'active':'';?>" href="masuk.php" >Masuk</a>
				</li>
			</ul>
		</div>
	</div>
</nav>