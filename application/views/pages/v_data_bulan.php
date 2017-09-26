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
		<?php
			if(isset($result)) {
				foreach ($result->result() as $row) {
				# code...
				$no = $row->id - 1; 
			?>
			<h3 align="center"><?php echo $no . ". " . $row->nm_kota; ?></h3>
			<br />

			<div style="color: black">
				<div class="form-group col-sm-12">
				<label class="col-sm-4 control-label">Posisi</label>
				<label class="col-sm-8 control-label">: Lintang <i>(Lat)</i> : <?php echo $row->lintang;?></label>
				<label class="col-sm-4 control-label"><i>(Position)</i></label>
				<label class="col-sm-8 control-label">: Bujur <i>(Long)</i> : <?php echo $row->bujur;?></label>
                </div>

                <br>

                <div class="form-group col-sm-12">
                <label class="col-sm-4 control-label">Waktu</label>
				<label class="col-sm-8 control-label">: <?php echo $row->waktu;?></label>
				<label class="col-sm-4 control-label"><i>(Time)</i></label>
                </div>

                <br>

                <div class="form-group col-sm-12">
                <label class="col-sm-4 control-label">Tipe Pasut</label>
				<label class="col-sm-8 control-label">: <?php echo $row->tipe_pasut;?></label>
				<label class="col-sm-4 control-label"><i>(Tide Type)</i></label>
                </div>
                <br />
              </div>



                <div class="form-group btn-toolbar col-lg-12">
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Januari&kd_kota=').$row->kd_kota; ?>" role="button">Januari</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Februari&kd_kota=').$row->kd_kota; ?>" role="button">Februari</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Maret&kd_kota=').$row->kd_kota; ?>" role="button">Maret</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=April&kd_kota=').$row->kd_kota; ?>" role="button">April</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Mei&kd_kota=').$row->kd_kota; ?>" role="button">Mei</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Juni&kd_kota=').$row->kd_kota; ?>" role="button">Juni</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Juli&kd_kota=').$row->kd_kota; ?>" role="button">Juli</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Agustus&kd_kota=').$row->kd_kota; ?>" role="button">Agustus</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=September&kd_kota=').$row->kd_kota; ?>" role="button">September</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Oktober&kd_kota=').$row->kd_kota; ?>" role="button">Oktober</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=November&kd_kota=').$row->kd_kota; ?>" role="button">November</a>
                	<a class="btn btn-primary btn-lg col-xs-12 col-sm-4 col-md-3" href="<?php echo site_url('data/detailTanggal?bulan=Desember&kd_kota=').$row->kd_kota; ?>" role="button">Desember</a>
                </div>
            
			<?php
			} }
			?>

			
			<hr>
			
		</div>
	</div>	