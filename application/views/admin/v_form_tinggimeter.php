
<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-md-6">
						<h1 class="page-title"><?php if(isset($result)) { echo 'Edit Form Tinggi Meter'; }
                        else { echo 'Add Form Tinggi Meter'; } ?></h1>
					</div>

<div class="lightBoxGallery">
<div class="wrapper wrapper-content animated fadeInRight">
					<div class="row">
						<div class="col-lg-12">
<div class="ibox float-e-margins border-green-top table-list-siswa">
								<div class="ibox-content">
								
							<form method="post" enctype="multipart/form-data" <?php if(isset($result)) foreach ($result->result() as $row) { { echo 'action='. '"' .site_url('admin/edit_form_tinggimeter?id=').$row->id.'"';
                                } } else {
                                echo 'action='. '"' .site_url('admin/add_form_tinggimeter'). '"';
                                } ?> class="form-horizontal">

                            <?php 
                                    if(isset($result)) {
                                    foreach ($result->result() as $row) {

                            ?>

                            <div class="col-lg-6">

                                 <div class="form-group"><label class="col-sm-2 control-label">Kode Tinggi Meter</label>

                                    <div class="col-sm-10"><input type="text" name="kd_tinggi" value="<?php echo $row->kd_tinggi; ?>" class="form-control" readonly></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Wilayah</label>

                                    <div class="col-sm-10"><select name="wilayah" class="form-control" data-placeholder="Pilih Wilayah..." class="chosen-select" tabindex="2">
                                    <option value="">Pilih Wilayah</option>
                                    <option value="WIB" <?php if($row->wilayah== "WIB") echo 'selected="selected"'; ?>>WIB</option>
                                    <option value="WITA" <?php if($row->wilayah== "WITA") echo 'selected="selected"'; ?>>WITA</option>
                                    <option value="WIT" <?php if($row->wilayah== "WIT") echo 'selected="selected"'; ?> >WIT</option>
                                    </select>
                                </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Nama Kota</label>

                                    <div class="col-sm-10"><select name="nm_kota" data-placeholder="Pilih Nama Kota..." class="chosen-select" tabindex="2" required="">
                                    <option value="">Pilih Nama Kota</option>

                                                                <?php if (isset($judul)) {

                                                                foreach ($judul->result() as $rw) {
                                                                    # code...
                                                                 ?>                                                             
                                                                <option value="<?php echo $rw->nm_kota; ?>" <?php echo isset($row->nm_kota) ? ($row->nm_kota == $rw->nm_kota ? 'selected' : '') : ''; ?>>
                                                                <?php echo $rw->nm_kota; ?></option>


                                                                              <?php } } ?>
                                    </select></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                </div>

                                <div class="col-lg-6">

                                <div class="form-group"><label class="col-sm-2 control-label">Tinggi Meter</label>
                                    <div class="col-sm-10"><input type="text" name="tinggi_meter" class="form-control" value="<?php echo $row->tinggi_meter; ?>" readonly></div>

                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Jam</label>

                                <div class="col-sm-10"><input name="jam" type="text" value="<?php echo $row->jam; ?>" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Tanggal</label>

                                    <div class="col-sm-10"><input name="tanggal" type="text" value="<?php echo $row->tanggal; ?>" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Bulan</label>

                                    <div class="col-sm-10"><select name="bulan" class="form-control" data-placeholder="Pilih Bulan..." class="chosen-select" tabindex="2">
                                    <option value="">Pilih Bulan</option>
                                    <option value="Januari" <?php if($row->bulan == "Januari") echo 'selected="selected"'; ?>>Januari</option>
                                    <option value="Februari" <?php if($row->bulan == "Februari") echo 'selected="selected"'; ?>>Februari</option>
                                    <option value="Maret" <?php if($row->bulan == "Maret") echo 'selected="selected"'; ?>>Maret</option>
                                    <option value="April" <?php if($row->bulan == "April") echo 'selected="selected"'; ?>>April</option>
                                    <option value="Mei" <?php if($row->bulan == "Mei") echo 'selected="selected"'; ?>>Mei</option>
                                    <option value="Juni" <?php if($row->bulan == "Juni") echo 'selected="selected"'; ?>>Juni</option>
                                    <option value="Juli" <?php if($row->bulan == "Juli") echo 'selected="selected"'; ?>>Juli</option>
                                    <option value="Agustus" <?php if($row->bulan == "Agustus") echo 'selected="selected"'; ?>>Agustus</option>
                                    <option value="September" <?php if($row->bulan == "September") echo 'selected="selected"'; ?>>September</option>
                                    <option value="Oktober" <?php if($row->bulan == "Oktober") echo 'selected="selected"'; ?>>Oktober</option>
                                    <option value="November" <?php if($row->bulan == "November") echo 'selected="selected"'; ?>>November</option>
                                    <option value="Desember" <?php if($row->bulan == "Desember") echo 'selected="selected"'; ?>>Desember</option>
                                    </select>
                                </div>

                                </div>

                                <div class="hr-line-dashed"></div>

                                </div>

                                
                                
                                <?php } } else { ?>

                                <div class="col-lg-6">

                                 <div class="form-group"><label class="col-sm-2 control-label">Kode Tinggi Meter</label>
                                    <div class="col-sm-10"><input type="text" name="kd_tinggi" class="form-control" value="<?php echo $kd_tinggi; ?>" readonly></div>

                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Wilayah</label>

                                    <div class="col-sm-10"><select name="wilayah" class="form-control" data-placeholder="Pilih Wilayah..." class="chosen-select" tabindex="2">
                                    <option value="">Pilih Wilayah</option>
                                    <option value="WIB">WIB</option>
                                    <option value="WITA">WITA</option>
                                    <option value="WIT">WIT</option>
                                    </select>
                                </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Nama Kota</label>

                                    <div class="col-sm-10"><select name="nm_kota" id="nm_kota" data-placeholder="Pilih Nama Kota..." class="chosen-select" tabindex="2" required="">
                                    <option value="">Pilih Nama Kota</option>

                                                                <?php if (isset($judul)) {

                                                                foreach ($judul->result() as $rw) {
                                                                    # code...
                                                                 ?>                                                             
                                                                <option value="<?php echo $rw->nm_kota; ?>">
                                                                <?php echo $rw->nm_kota; ?></option>


                                                                              <?php } } ?>
                                    </select></div>
                                    <div class="col-sm-10"><input class="form-control" type="hidden" name="kd_kota" value="" readonly="true" id="kd_tinggi"></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                </div>

                                <div class="col-lg-6">

                                <div class="form-group"><label class="col-sm-2 control-label">Tinggi Meter</label>

                                    <div class="col-sm-10"><input name="tinggi_meter" type="text" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Bulan</label>

                                    <div class="col-sm-10"><select name="bulan" class="form-control" data-placeholder="Pilih Bulan..." class="chosen-select" tabindex="2">
                                    <option value="">Pilih Bulan</option>
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
                                    </select>
                                </div>

                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Tanggal</label>

                                    <div class="col-sm-10"><input name="tanggal" type="text" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Jam</label>

                                    <div class="col-sm-10"><input name="jam" type="text" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                </div>

                                <?php } ?>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-8">
                                        <button class="btn btn-white" type="reset">Cancel</button>
                                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                                
                            </form>

									


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


