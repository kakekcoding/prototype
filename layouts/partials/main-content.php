<div class="row">
	<div class="col-sm-8 blog-main">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>

			<!-- Slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="../static/img/slideshow/800x400.png" alt="Image">
			          	<div class="carousel-caption">
			            	<h3>Paket Wisata 1</h3>
			            	<p>Rp. 10.000.000</p>
			          	</div>      
				</div>

				<div class="item">
					<img src="../static/img/slideshow/800x400%202.png" alt="Image">
						<div class="carousel-caption">
							<h3>Paket Wisata 2</h3>
							<p>Rp. 10.000.000</p>
						</div>      
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="col-sm-4 blog-sidebar">
		<div class="sidebar-module sidebar-module-inset">
			<div class="row">
				<form action="" method="POST" role="form" class="form-horizontal">
					<legend class="text-center">Pesan Tiket Sekarang</legend>
						 		
						<div class="form-group col-sm-12">
						 	<label for="">Nama pemesan</label>
						 	<input type="text" class="form-control">
						 </div>
						 		
						<div class="form-group col-sm-12">
						 	<label for="">Jenis paket liburan</label>
						 	<select name="" id="input" class="form-control" required="required">
						 		<option value="">Pake wisata 1</option>
						 		<option value="">Pake wisata 2</option>
						 	</select>
						</div>

						<div class="form-group col-sm-12">
						 	<label for="">Kelas</label>
						 	<select name="" id="input" class="form-control" required="required">
						 		<option value="">Kelas 1</option>
						 		<option value="">Kelas 2</option>
						 	</select>
						</div>
						 		
						<div class="form-group col-sm-12">
						 	<label for="">Jumlah</label>
						 	<select name="" id="input" class="form-control" required="required">
						 		<option value="">1</option>
						 		<option value="">2</option>
						 	</select>
						</div>

						 <div class="form-group col-sm-12">
						 	<label for="">Tanggal Berangkat</label>
						 	<input type="date" class="form-control">
						</div>

						<button type="button" class="btn btn-success col-sm-11" style="background-color: #FF9933; border-color: #FF9933;">Pesan sekarang</button>
						
				</form>
			</div>
		</div>
	</div>
</div>