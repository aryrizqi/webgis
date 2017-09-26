<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="<?php echo site_url('home'); ?>">Home</a></li>
				<li>Data Pasang Surut Kepulauan Indonesia</li>			
			</div>		
		</div>	
	</div>
	
	<div class="services">
		<div class="container">
			<h3>Letak Kepulauan Kota Berdasarkan Zona Waktu Indonesia</h3>
			<hr>
			<div class="col-md-8">
				<img src="<?php echo base_url('assets/resources/images/gis/zonawaktu.jpg'); ?>" class="img-responsive">
			</div>
			
			<div class="col-md-4">
				<div class="media">
					<ul>
						<li>
							<div class="media-left">
								<i class="fa fa-pencil"></i>						
							</div>
							<div class="media-body">
								<a class="btn btn-primary btn-lg" href="<?php echo site_url('data/detailKota?waktu=WIB'); ?>" role="button">WIB (GMT+7)</a>
								<h5>Zona Waktu Indonesia Barat</h5>
							</div>
						</li>
						<hr>
						<li>
							<div class="media-left">
								<i class="fa fa-book"></i>						
							</div>
							<div class="media-body">
								<a class="btn btn-primary btn-lg" href="<?php echo site_url('data/detailKota?waktu=WITA'); ?>" role="button">WITA (GMT+8)</a>
								<h5>Zona Waktu Indonesia Tengah</h5>
							</div>
						</li>
						<hr>
						<li>
							<div class="media-left">
								<i class="fa fa-rocket"></i>						
							</div>
							<div class="media-body">
								<a class="btn btn-primary btn-lg" href="<?php echo site_url('data/detailKota?waktu=WIT'); ?>" role="button">WIT (GMT+9)</a>
								<h5>Zona Waktu Indonesia Timur</h5>
							</div>
						</li>
						<hr>
					</ul>
				</div>
			</div>
		</div>
	</div>	