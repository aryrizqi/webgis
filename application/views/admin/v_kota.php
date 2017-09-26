
<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-md-6">
						<h1 class="page-title">Kota Manager</h1>
					</div>

<div class="lightBoxGallery">
<div class="wrapper wrapper-content animated fadeInRight">
					<div class="row">
						<div class="col-lg-12">
<div class="ibox float-e-margins border-green-top table-list-siswa">
								<div class="ibox-content">
								
									<div class="table-responsive">

                                    <?php 
                                     $sucreg = $this->session->flashdata('sucreg');
                                    if($sucreg){ 
                                        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $sucreg.'</div>';
                                 }
                                 $failreg = $this->session->flashdata('failreg');
                                    if($failreg){ 
                                        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>failed! </strong>'. $failreg.'</div>';
                                 }

                                 $sucident = $this->session->flashdata('sucident');
                                    if($sucident){ 
                                        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success! </strong>'. $sucident.'</div>';
                                 }
                                 $failident = $this->session->flashdata('failident');
                                    if($failident){ 
                                        echo '<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>failed! </strong>'. $failident.'</div>';
                                 }

                                    ?>
									
										<table class="table table-striped table-bordered table-hover dataTables-example">
											<thead>
												<tr>
                          							<th>OPSI</th>
                          							<th>Kode Kode</th>
                                                    <th>Nama Kota</th>
                                                    <th>Wilayah</th>
                                                    <th>Lintang</th>
                                                    <th>Bujur</th>
                                                    <th>Waktu</th>
                                                    <th>Tipe Pasut</th>
												</tr>
											</thead>
											<tbody>

											
            <tr class="gradeX">
            <?php $no = 1; 
                      foreach ($result->result() as $row) {
                        	# code...
                        
                      ?>
                <td>
				<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-bars"></i>
									</button>
			                    <ul class="dropdown-menu">
								<li>
			                    <a href="<?php echo site_url('admin/form_kota?id=').$row->id ?>" role="button" class="" data-html="true" data-target="" data-toggle="modal"> EDIT</a>
			                    </li>
			                    <li>
			                    <a role="button" class="" data-html="true" data-target="#modalHapus<?php echo $row->id; ?>" data-toggle="modal"> HAPUS</a>
			                    </li>
			                    </ul>
			                    </div>

                </td>
                <td><?php echo $row->kd_kota; ?></td>
                <td><?php echo $row->nm_kota; ?></td>
                <td>
                <?php if ($row->wilayah == "WIB") { ?>
                <span class="label label-success">
                <? } else if ($row->wilayah == "WITA") { ?>
                <span class="label label-warning">
                <? } else if ($row->wilayah == "WIT") { ?>
                <span class="label label-danger">
                <?php } echo $row->wilayah; ?>
                </td>

                <td><?php echo $row->lintang; ?></td>
                <td><?php echo $row->bujur; ?></td>
                <td><?php echo $row->waktu; ?></td>
                <td><?php echo $row->tipe_pasut; ?></td>

            </tr> 
            <?php } ?>

            </tbody>

										</table>
										
									</div>

									


								</div>
							</div>
							</div>
							</div>
							</div>

                     </div>

</div>





<div class="footer">
            <div class="pull-right">
                UB <strong>Teknik Informatika</strong>
            </div>
            <div>
                <strong>Copyright</strong> Rizqi Aryansa &copy; 2017
            </div>
        </div>


                          <?php 
                          foreach($result->result() as $row) {
                          ?>
                           
                          <div id="modalHapus<?php echo $row->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

                            <div class="modal-dialog">

                              <div class="modal-content">

                                <div class="modal-header">
                                
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title"><i class="ti-settings"></i> Hapus Kota Manager</h4>
                                </div>
                                <form method="POST" action="<?php echo site_url('admin/delete_form_kota?id='.$row->id) ?>">
                                
                                <div class="modal-body">

                                <div class="form-group">
                                    <div> <label><strong>Apakah anda yakin menghapus ?</strong></label> </div>
                                </div>

                                    <div class="form-group">
                                      <label>KODE KOTA:</label>
                                      <div>
                                        <input type="text" class="form-control" value="<?php echo $row->kd_kota; ?>" name="kd_kota" readonly>
                                      </div>
                                    </div>

                                  </div>
                                    
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-inverse waves-effect waves-light" name="hapus" value="hapus">Hapus</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          
                          <?php } ?>