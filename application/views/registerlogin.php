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
							<form class="form-horizontal form-validate-jquery" action="<?= site_url('admin/save_login'); ?>" method="POST" enctype="multipart/form-data">

			<fieldset class="content-group">
									<legend class="text-bold">Input Data Login</legend>
									<input type="hidden" name="id_costomer" value="<?=(isset($id_costomer['id_costomer']))?md5($id_costomer['id_costomer']):'';?>"/>

									<!-- Number range -->
									<div class="form-group">
										<label class="control-label col-lg-3">Nama Costomer <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="nama_costomer" class="form-control" required="required" placeholder="Masukan Nama Costomer" value="<?=(isset($id_customer['nama_costomer']))?($id_customer['nama_costomer']):'';?>"/>
										</div>
									</div>
									<!-- /number range -->


									<!-- URL validation -->
									<div class="form-group">
										<label class="control-label col-lg-3">Password <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="password" class="form-control" required="required" placeholder="Masukan Password" value="<?=(isset($id_customer['password']))?($id_customer['password']):'';?>"/>
										</div>
									</div>
									<!-- /url validation -->


									<!-- URL validation -->
									<div class="form-group">
										<label class="control-label col-lg-3">Alamat <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="alamat" class="form-control" required="required" placeholder="Masukan Alamat" value="<?=(isset($id_customer['alamat']))?($id_customer['alamat']):'';?>"/>
										</div>
									</div>
									<!-- /url validation -->


									<!-- Styled file uploader -->
									<div class="form-group">
										<label class="control-label col-lg-3">Email <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="email" class="file-styled" required="required" value="<?=(isset($id_customer['email']))?($id_customer['email']):'';?>"/>
										</div>
									</div>


									<!-- Styled file uploader -->
									<div class="form-group">
										<label class="control-label col-lg-3">Nomer Telepon <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="no_telp" class="file-styled" required="required" value="<?=(isset($id_customer['no_telp']))?($id_customer['no_telp']):'';?>"/>
										</div>
									</div>

									<!-- Styled file uploader -->
									<div class="form-group">
										<label class="control-label col-lg-3">Email <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="email" class="file-styled" required="required" value="<?=(isset($id_customer['email']))?($id_customer['email']):'';?>"/>
										</div>
									</div>

									

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


								