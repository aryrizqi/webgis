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

                <div class="form-group col-sm-12">
                <label class="col-sm-4 control-label">Bulan</label>
				<label class="col-sm-8 control-label">: <?php echo $_GET['bulan'];?></label>
				<label class="col-sm-4 control-label"><i>(Month)</i></label>
                </div>
              </div>

              <br />

              <div class="col-md-12">
				<div class="media">
					<ul>
						<li>
								<table style="color: black;" class="table table-striped table-bordered dataTables-example" >
											<thead>
												<tr>
                                                    <th>Tanggal</th>
                                                    <th>Detail</th>
												</tr>
											</thead>
											<tbody>

											
					            <tr class="gradeX">
					            <?php 
					            		if(isset($result)) {
					                      foreach ($result->result() as $row) {
					                        	# code...
					                      	$i=1;
					                      	for($i; $i<=31; $i++) {
					                        
					                      ?>
					                <td><h5><?php echo $i; ?></h5></td>
					                <td><a class="btn btn-primary btn-xs" href="<?php echo site_url('data/detailJam?kd='.$row->kd_kota.'&tanggal='.$i.'&bulan='.$_GET['bulan']);?>" role="button">DETAIL</a></td>
					            </tr> 
					            <?php } } } else { ?>
					            <tr class="gradeX">
					            <td>DATA TIDAK DITEMUKAN</td>
					            <td>DATA TIDAK DITEMUKAN</td>
					            </tr>
					            <?php } ?>


					            </tbody>

										</table>
						</li>
					</ul>
				</div>
			</div>
                
            
			<?php
			} }
			?>

			
			<hr>
			
		</div>
	</div>	