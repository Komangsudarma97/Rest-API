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
							<form class="form-horizontal form-validate-jquery" action="<?= site_url('admin/save_kategori'); ?>" method="POST" enctype="multipart/form-data">

			<fieldset class="content-group">
									<legend class="text-bold">Input Data Kategori</legend>
									<input type="hidden" name="id_kategori" value="<?=(isset($id_kategori['kategori']))?md5($id_kategori['id_kategori']):'';?>"/>

									<!-- Number range -->
									<div class="form-group">
										<label class="control-label col-lg-3">Nama Kategori <span class="text-danger"></span></label>
										<div class="col-lg-9">
											<input type="text" name="kategori" class="form-control" required="required" placeholder="Kategori" value="<?=(isset($id_kategori['kategori']))?($id_kategori['kategori']):'';?>"/>
										</div>
									</div>
									<!-- /number range -->

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
						<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second">
			<div class="navbar-text">
				&copy; 2019. BeritaNews by Sudarma&Andika
			</div>
					<!-- /footer -->
					</div>

					


								