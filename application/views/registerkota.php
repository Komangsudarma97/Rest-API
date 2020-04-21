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
							<form class="form-horizontal form-validate-jquery" action="<?= site_url('admin/save_kota'); ?>" method="POST" enctype="multipart/form-data">

			<fieldset class="content-group">
									<legend class="text-bold">Input Data Login</legend>
									<input type="hidden" name="id_kota" value="<?=(isset($id_kota['id_kota']))?md5($id_kota['id_kota']):'';?>"/>

									<!-- Number range -->
									<div class="form-group">
										<label class="control-label col-lg-3">Nama Kota <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="nama_kota" class="form-control" required="required" placeholder="Masukan Nama Kota" value="<?=(isset($id_kota['nama_kota']))?($id_kota['nama_kota']):'';?>"/>
										</div>
									</div>
									<!-- /number range -->
                                    <!-- URL validation -->
									<div class="form-group">
										<label class="control-label col-lg-3">Ongkos Kirim <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="ongkos_kirim" class="form-control" required="required" placeholder="Masukan Ongkos Kirim" value="<?=(isset($id_kota['ongkos_kirim']))?($id_kota['ongkos_kirim']):'';?>"/>
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


								