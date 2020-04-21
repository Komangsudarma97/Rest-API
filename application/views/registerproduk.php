<!-- Core JS files -->
<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?=base_url();?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/pages/editor_ckeditor.js"></script>

	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

<div class="panel-body">
							<form class="form-horizontal form-validate-jquery" action="<?= site_url('admin/save_register'); ?>" method="POST" enctype="multipart/form-data">

			<fieldset class="content-group">
									<legend class="text-bold">Input Produk</legend>
									<input type="hidden" name="id_produk" value="<?=(isset($id_produk['id_produk']))?md5($id_produk['id_produk']):'';?>"/>

									<!-- Number range -->
									<div class="form-group">
										<label class="control-label col-lg-3">Nama Produk <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="nama_produk" class="form-control" required="required" placeholder="Masukan Nama Produk" value="<?=(isset($id_produk['nama_produk']))?($id_produk['nama_produk']):'';?>"/>
										</div>
									</div>
									<!-- /number range -->


									<!-- URL validation -->
									<div class="form-group">
										<label class="control-label col-lg-3">Harga <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="harga" class="form-control" required="required" placeholder="Masukan Harga" value="<?=(isset($id_produk['harga']))?($id_produk['harga']):'';?>"/>
										</div>
									</div>
									<!-- /url validation -->


									<!-- URL validation -->
									<div class="form-group">
										<label class="control-label col-lg-3">Stok <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="stok" class="form-control" required="required" placeholder="Masukan stok" value="<?=(isset($id_produk['stok']))?($id_produk['stok']):'';?>"/>
										</div>
									</div>
									<!-- /url validation -->


									<!-- Styled file uploader -->
									<div class="form-group">
										<label class="control-label col-lg-3">Gambar <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="file" name="gambar" class="file-styled" required="required" value="<?=(isset($id_berita['gambar']))?($id_berita['gambar']):'';?>"/>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-3">Kategori Produk <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<select name="id_kategori">
												<option>Pilih Kategori</option>
                    							<?php
                    							foreach($nama_kategori as $val){?>
                    							<option <?=(isset($id_produk['id_kategori'])&&$id_produk['id_kategori']==$val['id_kategori'])?'selected':'';?>
												value="<?=$val['id_kategori'];?>"><?=$val['nama_kategori'];?></option>
                    							<?php } ?>
                							</select>
										</div>
									</div>

								<!-- URL validation -->
								<div class="form-group">
										<label class="control-label col-lg-3">Deskripsi <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="deskripsi" class="form-control" required="required" placeholder="Masukan Deskripsi" value="<?=(isset($id_produk['harga']))?($id_produk['harga']):'';?>"/>
										</div>
									</div>
									<!-- /url validation -->

									

					            <div class="text-right">
									<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
									<button type="submit" class="btn btn-primary">Simpan <i class="icon-arrow-right14 position-right"></i></button>
								</div>
				            </form>
										</div>
									</div>


								</fieldset>
							</form>

						</div>
					</div>

	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second">
			<div class="navbar-text">
				&copy; 2020. Aksessoris Velg Mobil by Sudarma&Swisma
			</div>


								