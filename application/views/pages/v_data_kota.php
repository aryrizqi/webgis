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
			<h3 align="center">Daftar Kepulauan Kota Indonesia Berdasarkan Zona Waktu Indonesia 
			<?php
			if(($_GET['waktu']) == "WIB") {
				echo "BARAT (WIB)";
			} else if (($_GET['waktu']) == "WITA") {
				echo "TENGAH (WITA)";
			} else if (($_GET['waktu']) == "WIT") {
				echo "TIMUR (WIT)";
			}

			?>

			</h3>
			<hr>
			
			<div class="col-md-12">
				<div class="media">
					<ul>
						<li>
								<table style="color: black;" class="table table-striped table-bordered dataTables-example" >
											<thead>
												<tr>
                          							<th>Nomor</th>
                                                    <th>Nama Kota</th>
                                                    <th>Detail</th>
												</tr>
											</thead>
											<tbody>

											
					            <tr class="gradeX">
					            <?php 
					            		if(isset($result)) {
					                      foreach ($result->result() as $row) {
					                        	# code...
					                        $no = $row->id - 1; 
					                      ?>
					                <td><h5><?php echo $no; ?><h5></td>
					                <td><h5><?php echo $row->nm_kota; ?></h5></td>
					                <td><a class="btn btn-primary btn-xs" href="<?php echo site_url('data/detailBulan?kd='.$row->kd_kota);?>" role="button">DETAIL</a></td>
					            </tr> 
					            <?php } } else { ?>
					            <tr class="gradeX">
					            <td>DATA TIDAK DITEMUKAN</td>
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
		</div>
	</div>	