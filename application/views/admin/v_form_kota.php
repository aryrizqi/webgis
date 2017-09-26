
<div class="row wrapper border-bottom white-bg page-heading">
					<div class="col-md-6">
						<h1 class="page-title"><?php if(isset($result)) { echo 'Edit Form Kota'; }
                        else { echo 'Add Form Kota'; } ?></h1>
					</div>

<div class="lightBoxGallery">
<div class="wrapper wrapper-content animated fadeInRight">
					<div class="row">
						<div class="col-lg-12">
<div class="ibox float-e-margins border-green-top table-list-siswa">
								<div class="ibox-content">
								
							<form method="post" enctype="multipart/form-data" <?php if(isset($result)) foreach ($result->result() as $row) { { echo 'action='. '"' .site_url('admin/edit_form_kota?id=').$row->id.'"';
                                } } else {
                                echo 'action='. '"' .site_url('admin/add_form_kota'). '"';
                                } ?> class="form-horizontal">

                            <?php 
                                    if(isset($result)) {
                                    foreach ($result->result() as $row) {

                            ?>

                            <div class="col-lg-6">

                                 <div class="form-group"><label class="col-sm-2 control-label">Kode Kota</label>

                                    <div class="col-sm-10"><input type="text" name="kd_kota" value="<?php echo $row->kd_kota; ?>" class="form-control" readonly></div>
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

                                    <div class="col-sm-10"><input type="text" name="nm_kota" value="<?php echo $row->nm_kota; ?>" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                </div>



                                <div class="col-lg-6">

                                <div class="form-group"><label class="col-sm-2 control-label">Lintang</label>

                                    <div class="col-sm-10"><input name="lintang" type="text" value="<?php echo $row->lintang; ?>" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Bujur</label>

                                    <div class="col-sm-10"><input name="bujur" type="text" value="<?php echo $row->bujur; ?>" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Waktu</label>

                                    <div class="col-sm-10"><select name="waktu" class="form-control" data-placeholder="Pilih waktu..." class="chosen-select" tabindex="2">
                                    <option value="">Pilih Waktu</option>
                                    <option value="GMT+7" <?php if($row->waktu == "GMT+7") echo 'selected="selected"'; ?>>GMT + 07.00</option>
                                    <option value="GMT+8" <?php if($row->waktu == "GMT+8") echo 'selected="selected"'; ?>>GMT + 08.00</option>
                                    <option value="GMT+9" <?php if($row->waktu == "GMT+9") echo 'selected="selected"'; ?>>GMT + 09.00</option>
                                    </select>
                                </div>

                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Tipe Pasut</label>

                                    <div class="col-sm-10"><input name="tipe_pasut" type="text" value="<?php echo $row->tipe_pasut; ?>" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                </div>

                                
                                
                                <?php } } else { ?>

                                <div class="col-lg-6">

                                 <div class="form-group"><label class="col-sm-2 control-label">Kode Kota</label>

                                    <div class="col-sm-10"><input type="text" name="kd_kota" value="<?php echo $id; ?>" class="form-control" readonly></div>
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

                                    <div class="col-sm-10"><input type="text" name="nm_kota"  class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>


                                </div>

                                <div class="col-lg-6">

                                <div class="form-group"><label class="col-sm-2 control-label">Lintang</label>

                                    <div class="col-sm-10"><input name="lintang" type="text" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Bujur</label>

                                    <div class="col-sm-10"><input name="bujur" type="text" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Waktu</label>

                                    <div class="col-sm-10"><select name="waktu" class="form-control" data-placeholder="Pilih waktu..." class="chosen-select" tabindex="2">
                                    <option value="">Pilih Waktu</option>
                                    <option value="GMT+7">GMT + 07.00</option>
                                    <option value="GMT+8">GMT + 08.00</option>
                                    <option value="GMT+9">GMT + 09.00</option>
                                    </select>
                                </div>

                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Tipe Pasut</label>

                                    <div class="col-sm-10"><input name="tipe_pasut" type="text" class="form-control"></div>
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


