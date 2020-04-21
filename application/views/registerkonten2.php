<!-- Add steps dynamically -->
<div class="panel panel-white">
					<div class="panel-heading">
						<h6 class="panel-title">Berita</h6>
						<div class="heading-elements">
	                	</div>
					</div>

                	<form action="<?= site_url('frontend/save_register3'); ?>" method="POST" enctype="multipart/form-data">
                		<div class="step-wrapper">
							<fieldset class="step" id="add-step1">
								<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">1</span>
									Input Data Berita
								</h6>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Kategori:</label>
											<select name="id_kategori" class="select">
												<option></option>
												<optgroup label="Kategori Berita">
													<option value="1">Politik</option>
													<option value="2">Kekerasan</option>
												</optgroup>

											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Isi Berita:</label>
											<input type="text" name="isi_berita" placeholder="Ketikan Isi Berita...." class="form-control">
											</input>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Judul Berita:</label>
											<input type="text" name="judul" class="form-control" placeholder="Ketikan Judul....">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Status:</label>
											<input type="text" name="status" class="form-control" placeholder="Ketikan Status....">
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-6">
									<div class="col-md-6">
										<div class="form-group">
											<label>Id Admin:</label>
											<input type="text" name="id_admin" class="form-control" placeholder="Ketikan Id....">
										</div>
									</div>
								</div>
									

									<div class="col-md-6">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
												<tr>
            										<td>Tanggal Posting</td>
            										<td>:</td>
            										<td>
                										<input type="date" name="tgl_posting" />
        											</tr>

													<tr>
            										<td>Gambar :</td>
            										<td>
                										<input type="file" name="gambar" />
        											</tr>
													
							</fieldset>
						</div>
                        <div class="text-right">
						<button type="submit" class="btn btn-primary">Daftar</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
								</div>
						</div>